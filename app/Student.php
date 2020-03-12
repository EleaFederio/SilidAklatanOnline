<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Passport\HasApiTokens;

class Student extends Model
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
}
