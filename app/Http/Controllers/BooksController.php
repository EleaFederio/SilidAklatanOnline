<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Book;
//use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Redirect;
use Validator;
use Excel;
use App\Imports\BookImport;

class BooksController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $books = Book::all();
        return view('pages/books/index')->with('books', $books);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('pages.books.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fileName = null;

        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'publisher' => 'required'
        ]);

        if($request->book_image != null){
            $dataTime = date('Ymd_His');
            $file = $request->file('book_image');
            $fileName = $dataTime. '-'.rand(00000000, 99999999).'.jpg';
            $savePath = public_path('/images/');
            $file->move($savePath, $fileName);
        }

        $isBookExist = DB::table('books')
            ->where('title', $request->title)
            ->where('author', $request->author)
            ->where('publisher', $request->publisher)
//                ->where('call_number', $request->call_number)
//                ->where('isbn', $request->isbn)
            ->get();

        if (count($isBookExist) > 0){
            return view('pages/books/add')->with('errors' , ['Book is already in the database']);
        }else{
            Book::create([
                'title' => $request->title,
                'author' => $request->author,
                'publisher' => $request->publisher,
                'call_number' => $request->call_number,
                'isbn' => $request->isbn,
                'edition' => $request->edition,
                'year' => $request->year,
                'pages' => $request->pages,
                'copies' => $request->copies,
                'image_url' => $fileName,
                'remarks' => $request->remarks
            ]);
        }


        $books = Book::all();

        return view('pages/books/index')->with('books', $books);


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $books = Book::find($id);
        return view('pages/books/show')->with('books', $books);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $books = Book::find($id);
        return view('pages/books/edit')->with('books', $books);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $fileName = null;

        $validator = Validator::make($request->all(), [
            'book_image' => 'image|max:5000|mimes:jpg,jpeg'
        ]);

        if($validator->passes()){

            if($request->book_image != null){
                $dataTime = date('Ymd_His');
                $file = $request->file('book_image');
                $fileName = $dataTime. '-'.rand(00000000, 99999999).'.jpg';
                $savePath = public_path('/images/');
                $file->move($savePath, $fileName);
            }

            $book = Book::find($id);
            $book->title = $request->title;
            $book->author = $request->author;
            $book->publisher = $request->publisher;
            $book->call_number = $request->call_number;
            $book->isbn = $request->isbn;
            $book->edition = $request->edition;
            $book->pages = $request->pages;
            $book->copies = $request->copies;
            $book->image_url = $fileName;
            $book->year = $request->year;
            $book->remarks = $request->remarks;
            $book->save();

            $books = Book::all();
            return view('pages/books/index')->with('books', $books);
        }else{
            return redirect()->back()
            ->with(['errors'=>$validator->errors()->all()]);
        }
    }

    public function borrowBookRequestList(){

        $data = DB::table('book_student')
            ->join('students', 'students.id', 'book_student.student_id')
            ->join('books', 'books.id', 'book_student.book_id')
            ->join('borrow_status', 'borrow_status.id', 'book_student.borrow_id')
            ->select('students.firstname', 'students.lastname', 'students.student_id', 'students.course', 'students.year', 'books.title', 'books.author', 'books.publisher', 'books.image_url', 'book_student.id', 'borrow_status.name', 'book_student.created_at')
            ->where('borrow_id', 1)
            ->orWhere('borrow_id' , 2)
            ->get();

//        dd($data);

        return view('pages/books/borrowrequest')->with('borrowRequest', $data);
    }

    public function borrowBookController($id){
        $data = DB::table('book_student')
            ->where('book_student.student_id', $id)
            ->join('students', 'students.id', 'book_student.student_id')
            ->join('books', 'books.id', 'book_student.book_id')
            ->join('borrow_status', 'borrow_status.id', 'book_student.borrow_id')
            ->update(['book_student.borrow_id' => 2] );
//        return redirect()->back();

        $data = DB::table('book_student')
            ->join('students', 'students.id', 'book_student.student_id')
            ->join('books', 'books.id', 'book_student.book_id')
            ->join('borrow_status', 'borrow_status.id', 'book_student.borrow_id')
            ->select('students.firstname', 'students.lastname', 'students.student_id', 'students.course', 'students.year', 'students.phone', 'books.title', 'books.author', 'books.publisher', 'books.image_url', 'book_student.id', 'borrow_status.name', 'book_student.created_at')
            ->where('borrow_id', 1)
            ->orWhere('borrow_id' , 2)
            ->get();
        return view('pages/books/borrowrequest')->with('borrowRequest', $data);
    }

    public function borrowBookApprovedList(){
        $data = DB::table('book_student')
            ->join('students', 'students.id', 'book_student.student_id')
            ->join('books', 'books.id', 'book_student.book_id')
            ->join('borrow_status', 'borrow_status.id', 'book_student.borrow_id')
            ->select('students.firstname', 'students.lastname', 'students.student_id', 'students.course', 'students.year', 'students.phone', 'books.title', 'books.author', 'books.publisher', 'books.image_url', 'book_student.id', 'borrow_status.name', 'book_student.created_at')
            ->where('borrow_id', 3)
            ->get();
        return view('pages/books/approvedrequest')->with('approvedBooks', $data);
    }

    public function request(){
        return view('pages/books/bookrequest');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Book::destroy($id);
        $books = Book::all();
        return view('pages/books/index')->with('books', $books);
    }

    public function exportIntoExcel(){
        return Excel::download(new Book, 'books.xlsx');
    }

    public function exportIntoCSV(){
        return Excel::download(new Book, 'books.csv');
    }


    public function importForm(){

    }

    public function import(Request $request){

        $bookSpreadSheet = $request->file('booklist');

//        dd($bookSpreadSheet->extension());

        $error = array();
        if(empty($request->file())){
            array_push($error, 'No File Selected');
        }else{
            if( $bookSpreadSheet->extension() != 'txt'){
                array_push($error, 'File not supported');
            }
            Excel::import(new BookImport, $request->file('booklist')->store('import'));
            $books = Book::all();
            return view('pages/books/index')->with('books', $books);
        }
        return redirect()->back();

//        print_r($error);

//        Excel::import(new BookImport, $request->file('booklist')->store('import'));
//        $books = Book::all();
//        return view('pages/books/index')->with('books', $books);

    }

}
