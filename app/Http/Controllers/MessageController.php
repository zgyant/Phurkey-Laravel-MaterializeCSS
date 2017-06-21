<?php

namespace App\Http\Controllers;

use App\phurkey_website;
use App\users_message;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

use App\website;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

use Illuminate\Support\Facades\Input;

class MessageController extends Controller
{
    public function sendMsg(Request $request,$username)
    {
        $sender=Session::get('user_email');

        $book_id=Input::get('book_id');

        $message_book=Input::get('message_book');

        $receiver=$username;
        $message=new users_message();

        $message->sender=$sender;
        $message->book_id=$book_id;
        $message->receiver=$receiver;
        $message->message=$message_book;


        $message->save();

        return redirect('booklist/book/'.$book_id)->with('status', 'Message Sent!');

    }
}
