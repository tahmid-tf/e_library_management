<?php

namespace App\Exports;

use App\Models\Book;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;

class BooksExport implements FromCollection, WithHeadings, ShouldAutoSize
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Book::all();
    }

    public function headings(): array
    {
        return [
            'ID',
            'title',
            'author',
            'isbn',
            'category',
            'description',
            'cover image',
            'book file link',
            'publisher',
            'edition',
            'book tags',
            'total copies',
            'available copies',
            'Archived Date',
            'Data Creation Date',
            'Data Update Date',
        ];
    }
}
