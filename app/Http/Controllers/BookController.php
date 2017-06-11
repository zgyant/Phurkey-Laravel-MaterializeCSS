<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

use App\book;

use Illuminate\Support\Facades\Session;

use Illuminate\Support\Facades\Input;

class BookController extends Controller
{
    public function store(Request $request)
    {
    /*	    $this->validate($request,[

    		'book_name' => 'required',

    		'authur_name' => 'required',

    		'publisher_name' => 'required',

    		'genre' => 'required',

    		'description' => 'required',

    		'price' => 'required',

    		'image' => 'required|image',

    		'book_condition' => 'required',

    		'exse' =>'required'
    	]);

    */
        $book = new book;

        $book->book_name = Input::get('book_name');

        $book->authur_name = Input::get('author_name');

        $book->publisher_name = Input::get('publisher_name');

        $book->genre = Input::get('genre');

        $book->description = Input::get('description');

        $book->price = Input::get('price_book');
        
        $book->image = Input::get('book_image');


        if(empty(Input::get('sellobuy')))
        {
            $book->exse= 0;
        }
        else
        {
            $book->exse = Input::get('sellobuy');
        }

        $book->book_condition = Input::get('book_condition');

        try{
         
            $book->save();
            Session::flash('flash_message', 'Book information added successfully :) '); 

            return redirect('/booklist');

        }catch(Exception $e)
        {

            Session::flash('flash_message', 'Oops somethong went worng :(');

            return redirect('/newbook');

        }

    }
    
}
