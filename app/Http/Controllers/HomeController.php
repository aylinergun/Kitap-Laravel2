<?php

namespace App\Http\Controllers;
use App\Models\Book;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

      $books = Book::all();
      return view('visit')->with(compact('books'));
    }

    public function crud()
    {
      $books = Book::all();
      return view('home')->with(compact('books'));

    }


}
