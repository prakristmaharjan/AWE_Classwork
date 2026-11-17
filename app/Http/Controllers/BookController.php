<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=Book::all();
        return view('books', ["books" => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("addbook");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // form valdiation - client, server, database
        $incomingFields=$request->validate([
            'title'=>'required|max:225',
            'pages'=>'required',
            'price'=>'required',
            'author'=>'required'
        ]);
        Book::create([
            'title' => $incomingFields['title'],
            'pages' => $incomingFields['pages'],
            'price' => $incomingFields['price'],
            'author' => $incomingFields['author'],
        ]);
        return redirect("/books");
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect("/books");
    }
}
