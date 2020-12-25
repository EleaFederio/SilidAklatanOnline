<?php

namespace App\Imports;

use App\Book;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class BookImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Book([
            'title' => $row['title'],
            'author' => $row['author'],
            'publisher' => $row['publisher'],
            'call_number' => $row['call_number'],
            'isbn' => $row['isbn'],
            'edition' => $row['edition'],
            'year' => $row['year'],
            'pages' => $row['pages'],
            'copies' => $row['copies'],
            'remarks' => $row['remarks'],
            'image_url' => $row['image_url']
        ]);
    }
}
