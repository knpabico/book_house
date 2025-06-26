<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    //dashboard
    public function index(){
        $books = Book::all();
        return view('admin.dashboard', ['books' => $books]);
    }
    
    public function student_view(){
        $books = Book::all();
        return view('student.dashboard', ['books' => $books]);
    }

    public function create_book(){
        return view('admin.create-book');
    }

    public function store_book(Request $request){
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'isbn' => 'required|string|max:13|unique:books,isbn',
            'published_date' => 'required|date',
            'copies_available' => 'required|integer|min:1',
            'description' => 'required|string|max:1000',
        ]);

        $newBook = Book::create($data);

        return redirect()->route('admin.dashboard');
    }

    public function edit_book(Book $book){
        return view('admin.edit-book', ['book' => $book]);
    }

    public function staff_edit_book(Book $book){
        return view('staff.edit-book', ['book' => $book]);
    }

    public function update_book(Book $book, Request $request){
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'isbn' => 'required|string|max:13|unique:books,isbn,' . $book->id,
            'published_date' => 'required|date',
            'copies_available' => 'required|integer|min:1',
            'description' => 'required|string|max:1000',
        ]);

        $book->update($data);

        return redirect(route('admin.dashboard'))->with('success', 'Book Updated Successfully');
    }

    public function staff_update_book(Book $book, Request $request){
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'isbn' => 'required|string|max:13|unique:books,isbn,' . $book->id,
            'published_date' => 'required|date',
            'copies_available' => 'required|integer|min:1',
            'description' => 'required|string|max:1000',
        ]);

        $book->update($data);

        return redirect(route('staff.dashboard'))->with('success', 'Book Updated Successfully');
    }

    public function delete_book(Book $book){
        $book->delete();
        return redirect(route('admin.dashboard'))->with('success', 'Book Updated Successfully');
    }
}
