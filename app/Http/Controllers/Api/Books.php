<?php

namespace App\Http\Controllers\Api;

use App\Book;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Books extends Controller
{
    public function index(){
        return Book::all();
    }
}
