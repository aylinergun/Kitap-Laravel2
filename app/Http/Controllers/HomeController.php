<?php

namespace App\Http\Controllers;
use App\Models\Book;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function guestIndex()
    {

      $books = Book::all();
      return view('visit')->with(compact('books'));
    }

    public function loggedInIndex()
    {
      $books = Book::all();
      return view('book')->with(compact('books'));

    }


}
