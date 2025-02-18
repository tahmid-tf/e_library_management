<?php

namespace App\Imports;

use App\Models\Book;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithValidation;
use Illuminate\Validation\Rule;

class BooksImport implements ToModel, WithStartRow, WithValidation
{

    public function model(array $row): ?Book
    {

        // Check if ISBN already exists
        if (Book::where('isbn', $row[3])->exists()) {
            session()->flash('error', "Duplicate ISBN detected: {$row[3]}");
            return null; // Skip inserting this row
        }

        return new Book([
            'title' => $row[1],
            'author' => $row[2],
            'isbn' => $row[3],
            'category' => $row[4],
            'description' => $row[5],
            'cover_image_link' => $row[6],
            'book_file_link' => $row[7],
            'publisher' => $row[8],
            'edition' => $row[9],
            'book_tags' => $row[10],
            'total_copies' => $row[11],
            'available_copies' => $row[12],
        ]);
    }

    public function startRow(): int
    {
        return 2;
    }

    public function rules(): array
    {
        return [
            '3' => [
                'required',
                Rule::unique('books', 'isbn'),
            ],
        ];
    }

}
