<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        "title",
        "author",
        "publisher",
        "call_number",
        "isbn",
        "edition",
        "year",
        "zip_code",
        "pages",
        "image_url",
        "copies",
        "remarks"
    ];
}
