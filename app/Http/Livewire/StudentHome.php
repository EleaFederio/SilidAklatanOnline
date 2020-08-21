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

    public $searchResult;

    public function render()
    {
        return view('livewire.student-home');
    }

    public function searchLike(){
        $searchData = $this->searchInput['searchInputData'];
        $result = Book::where( 'title', 'LIKE',  "%$searchData%")->take(5)->get();
        $this->searchResult = $result;
    }
}
