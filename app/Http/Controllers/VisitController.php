<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class VisitController extends Controller
{
  public function index()
  {

    $books = Book::all();
    return view('visit')->with(compact('books'));

    }
  }
