<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Str;
use App\Http\Requests;
use App\Http\Controllers\BooksController;
use Illuminate\Http\Request;
use App\Models\Book;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct(){

       $this->middleware('auth');
     }
    public function index()
    {
    //  return view('index');
      $books = Book::all();
      //compact verileri gecirmek icin kullanabiliyorum.
      //degisken isimleri ve degerleri ile bir dizi olusturmamiza izin verir.
      return view('show')->with(compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $this->validate($request, [
         'name'=> 'required',
         'writer_name'=> 'required',
         'isbn_number'=> 'required|numeric',
         'description',
         'image'=>'image',
         'image.*'=> 'mimes:jpeg,jpg,png',
       ]);

        $book = new Book();
        $book->name = $request->name;
        $book->writer_name = $request->writer_name;
        $book->isbn_number = $request->isbn_number;
        $book->description = $request->description;

        if($request->hasFile('image')){

          $imageName = str_slug($request->name).'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads'), $imageName);
            $book->image = 'uploads/'.$imageName;

        }

        $book->save();

        return redirect('home');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book= Book::find($id);
        if(null==$book){
          return redirect('home');
        }
        else{
          return view('show', compact('book'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $book= Book::find($id);
      if(null==$book){
        return redirect('home');
      }
      else{
        return view('edit', compact('book'));
      }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

         $this->validate($request, [
           'name'=> 'required',
           'writer_name'=> 'required',
           'isbn_number'=> 'required|numeric',
           'image'=>'image',
           'image.*'=> 'mimes:jpeg,jpg,png',
         ]);

         $book= Book::find($id);
         if(null==$book){
           return redirect('home');
         }
         else{
           $book->name = $request->name;
           $book->writer_name = $request->writer_name;
           $book->isbn_number = $request->isbn_number;
           $book->description = $request->description;


          if($request->hasFile('image')){
            $imageName = str_slug($request->name).'.'.$request->image->getClientOriginalExtension();
              $request->image->move(public_path('uploads'), $imageName);
              $book->image = 'uploads/'.$imageName;

          }

          $book->save();

          return redirect('home');

    }
  }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $book = Book::findOrFail($id);
       $book->delete();


    }
}
