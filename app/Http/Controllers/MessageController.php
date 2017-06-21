<?php

namespace App\Http\Controllers;

use App\phurkey_website;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

use App\website;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

use Illuminate\Support\Facades\Input;

class MessageController extends Controller
{
    public function send(Request $request,$username)
    {
        $sender=Session::get('user_email');

    }
}
