<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
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
        "majoy",
        "phone",
        "email"
    ];
}
