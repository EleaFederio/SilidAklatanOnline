<?php

namespace App\Http\Livewire;

use App\Book;
use App\Http\Controllers\Api\Books;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class StudentHome extends Component
{
    public $searchInput = [
        'searchInputData' => ''
    ];

    public $searchResults = [];

    public function render()
    {
        return view('livewire.student-home');
    }

//    public function searchLike(){
//
//    }

    public function updated(){
        $searchData = $this->searchInput['searchInputData'];
//        dd($searchData);
        if (empty($searchData) || $searchData == " "){
            $this->searchResults = [];
        }else{
            $result = Book::where( 'title', 'LIKE',  "%$searchData%")->take(5)->get();
            $this->searchResults = $result;
        }

    }
}
