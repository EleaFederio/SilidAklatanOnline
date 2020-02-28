<?php

namespace App\Exports;

use App\Book;
use Maatwebsite\Excel\Concerns\FromCollection;

class BookExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        // return Book::all();
        return Book::select(['title','author', 'publisher'])->get();
    }

    public function headings(): array
    {
        return [
        'title',
        'author',
        'publisher'
        ];
    }
}
