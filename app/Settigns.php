<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Settigns extends Model
{
    protected $fillable = [
      'library_name',
      'library_address',
      'librarians_name'
    ];

    use HasFactory;
}
