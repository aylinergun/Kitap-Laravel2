<?php

namespace App\Http\Controllers;
use App\Models\Book;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');

    }

    public function index()
    {

      $books = Book::all();
      return view('home')->with(compact('books'));
    }
}
