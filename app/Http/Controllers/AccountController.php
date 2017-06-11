<?php

namespace App\Http\Controllers;

use App\phurkey_users;
use Exception;
use Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Request;

class AccountController extends Controller
{
    public function register(Request $request)
    {
        $user = new phurkey_users;

        $user->email = Input::get('email'); //GET EMAIL
        $email = Input::get('email');

        $user->password = Hash::make(Input::get('password')); //GET AND HASH PASSWORD

        $user->username = Input::get('user_name'); //GET USERNAME

        $user->full_name = Input::get('full_name'); //GET FULL NAME

        $user->reg_ip_address = Request::ip(); //GET IP ADDRESS

        $user->reg_date = date('Y-m-d'); //GET REGISTRATION DATE

        $str = "";
        $characters = array_merge(range('A','Z'), range('a','z'), range('0','9'));
        $max = count($characters) - 1;
        for ($i = 0; $i < 6; $i++) {
            $rand = mt_rand(0, $max);
            $str .= $characters[$rand];
        }
        $conf_key=$str.Input::get('user_name').$str;

        $user->conf_code=$conf_key;

        $user->activated='0';


        try {
            $user->save();
            Session::put(['user_email' => $email]);
            Session::flash('flash_message', 'Few More Steps :) ');
            return Redirect::intended('/verifymail');
        } catch (Exception $exp) {
            Session::flash('flash_message', 'Looks like there is already an old account with same Username/Email');
            return Redirect::intended('/register');
        }


    }

    public function login(Request $request)
    {
        $email = Input::get('login_email');
        $password = Input::get('login_pass');
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            Session::put(['user_email' => $email]);
            return Redirect::intended('/dashboard');
        } else {
            Session::put(['flash_message' => 'Invalid Username/Password']);
            return Redirect::intended('/account');
        }
    }


    public function logout(Request $request)
    {
        Session::forget('user_email','flash_message');
        return Redirect::intended('/');

    }

//    public function checkdata(Request $request)
//    {
//        if(Input::get('user_name'))
//        {
//            if (phurkey_users::where('email', '=', Input::get('user_email'))->exists())
//            {
//                echo "Email Already Exist";
//
//            } else {
//                echo "OK";
//            }
//            exit();
//        }
//        if(Input::get('user_email'))
//        {
//            if (phurkey_users::where('username', '=', Input::get('user_name'))->exists()) {
//                echo "User Name Already Exist";
//            } else {
//                echo "OK";
//            }
//            exit();
//        }
//    }
}