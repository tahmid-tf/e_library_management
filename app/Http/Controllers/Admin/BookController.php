<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::all();
        return view('panel.admin.book.view_books', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('panel.admin.book.add_book');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $input = request()->validate([
            'title' => 'required',
            'author' => 'required',
            'isbn' => 'required|unique:books',
            'category' => 'required',
            'book_tags' => 'required',
            'description' => 'required',
            'cover_image_link' => 'required',
            'book_file_link' => 'required',
            'publisher' => 'required',
            'edition' => 'required',
            'total_copies' => 'required',
            'available_copies' => 'required',
        ]);

        Book::create($input);
        session()->flash('message', 'Book added successfully.');
        return redirect(route('book.index'));

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $book = Book::find($id);

        if (!$book) {
            return "Book not found";
        }

        return view('panel.admin.book.edit_book', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $book = Book::find($id);

        if (!$book) {
            return "Book not found";
        }

        $input = request()->validate([
            'title' => 'required',
            'author' => 'required',
            'isbn' => 'required',
            'category' => 'required',
            'book_tags' => 'required',
            'description' => 'required',
            'cover_image_link' => 'required',
            'book_file_link' => 'required',
            'publisher' => 'required',
            'edition' => 'required',
            'total_copies' => 'required',
            'available_copies' => 'required',
        ]);

        $book->update($input);
        session()->flash('message', 'Book updated successfully.');
        return redirect(route('book.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function bulkDelete(Request $request)
    {
        $bookIds = $request->book_ids;

        if (!$bookIds || count($bookIds) == 0) {
            return response()->json(['success' => false, 'message' => 'No books selected']);
        }

        Book::whereIn('id', $bookIds)->delete();

        return response()->json(['success' => true, 'message' => 'Books deleted successfully']);
    }

}
