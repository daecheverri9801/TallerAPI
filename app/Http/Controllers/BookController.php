<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBookRequest;
use App\Http\Requests\UpdateBookRequest;
use App\Models\Book;
use \Illuminate\Http\Response;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::all();
        return response()->json(['status' => true, 'books' => $books]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateBookRequest $request)
    {
        $book = Book::create($request->all());
        return response()->json($book, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        return response()->json(['status' => true, 'book' => $book]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBookRequest $request, Book $book)
    {
        if ($book->update($request->all())) {
            return response()->json(['status' => true, 'event' => $book]);
        } else {
            return response()->json(['status' => false, 'event' => $book]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        if ($book->delete()) {
            return response()->json(['status' => true, 'message' => 'Book deleted']);
        }
        return response()->json(['status' => false, 'message' => 'Book not deleted']);
    }
}
