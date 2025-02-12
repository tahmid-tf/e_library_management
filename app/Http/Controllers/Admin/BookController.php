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
        //
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
            'isbn' => 'required',
            'category' => 'required',
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
        return back();

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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
