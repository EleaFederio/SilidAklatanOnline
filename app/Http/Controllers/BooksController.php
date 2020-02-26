<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use Validator;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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

        $validator = Validator::make($request->all(), [
            'book_image' => 'image|max:5000|mimes:jpg,jpeg'
        ]);

        if($validator->passes()){

            $dataTime = date('Ymd_His');
            $file = $request->file('book_image');
            $fileName = $dataTime. '-'.rand(00000000, 99999999).'.jpg';
            $savePath = public_path('/images/');
            $file->move($savePath, $fileName);

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

            $books = Book::all();
            return view('pages/books/index')->with('books', $books);
        }else{
            return redirect()->back()
            ->with(['errors'=>$validator->errors()->all()]);
        }
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
        $book = Book::find($id);
        $book->title = $request->title;
        $book->author = $request->author;
        $book->publisher = $request->publisher;
        $book->call_number = $request->call_number;
        $book->isbn = $request->isbn;
        $book->edition = $request->edition;
        $book->pages = $request->pages;
        $book->copies = $request->copies;
        $book->year = $request->year;
        $book->remarks = $request->remarks;
        $book->save();
        $books = Book::all();
        return view('pages/books/index')->with('books', $books);
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
}
