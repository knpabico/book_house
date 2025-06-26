<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class AdminController extends Controller
{
    ///dashboard
    public function index(){
        $books = Book::all();
        return view('admin.dashboard', ['books' => $books]);
    }
}
