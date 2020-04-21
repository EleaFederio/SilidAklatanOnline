<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Foundation\Auth\User  as Authenticatable;
use App\Book;

class Student extends Authenticatable
{
    use HasApiTokens;

    protected $fillable = [
        "firstname",
        "middlename",
        "lastname",
        "street_brgy",
        "student_id",
        "town",
        "province",
        "zip_code",
        "b_day",
        "course",
        "year",
        "block",
        "major",
        "hash",
        "password",
        "phone",
        "email"
    ];

    public function books(){
        return $this->belongsToMany(Book::class)->withTimestamps();
    }

}
