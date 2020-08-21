<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentCenter extends Controller
{
    public function showPage(){
        return view('studentcenterpage');
    }
}
