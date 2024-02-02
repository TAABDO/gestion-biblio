<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{



    public function index()
{
    $books = Book::all();
    return view('Admin_dash.books.book',['books' => $books]);
}

public function create()
{

    return view('Admin_dash.books.Createbook');

}

public function store(Request $request)
{
// dd($request);
    $data= $request->validate([

        'title'=>'required',
        'author'=>'required',
        'genre'=>'required',
        'description'=>'required',
        'publication_year'=>'required|date',
        'total_copies'=>'required|numeric',
        'availbale_copies'=>'required|numeric',
    ]);

    $newbook = Book::create($data);
    return redirect()->route('books');

}

public function edit(Book $book)
{
    return view('Admin_dash.books.Updatebook',['book'=>$book]);
}

public function update(Request $request, Book $book)
{

    $data = $request->validate([
        'title' => 'required',
        'author' => 'required',
        'genre' => 'required',
        'description' => 'required',
        'publication_year' => 'required|date',
        'total_copies' => 'required|numeric',
        'availbale_copies' => 'required|numeric',
    ]);

    $book->update($data);
    return redirect()->route('books');
}

public function destroy(Book $book)
{
    $book->delete();

    // Retrieve all books after deleting the book
    $books = Book::all();

    return redirect()->route('books');
}

public function getAllfordashboard(){

       $books = Book::all();
       return view('Admin_dash.dashboard',['books' => $books]);

}

}
