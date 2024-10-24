<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function getBook(){
        $books = Book::all();

        return view('welcome', compact('books'));
    }

    public function getCreatePage(){
        return view('createform');
    }

    public function createBook(Request $request){
        $request->validate([
            'title' => 'required',
            'desc' => 'required',
            'author'=> 'required',
            'pages' => 'required',
            'cover' => 'required'
        ]);

        $fileName = $request->title . '-' . $request->file('cover')->getClientOriginalName();
        $request->file('cover')->storeAs('covers', $fileName, 'public');
        // Storage::put('path/to/file.jpg', $fileContents, 'public');


        Book::create([
            'title' => $request->title,
            'desc' => $request->desc,
            'author' => $request->author,
            'pages' => $request->pages,
            'cover' => $fileName
        ]);

        return redirect(route('getBook'));
    }
}
