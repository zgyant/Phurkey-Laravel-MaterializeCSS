<?php

namespace App\Http\Controllers;

use App\phurkey_website;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

use App\website;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

use Illuminate\Support\Facades\Input;

class WebsiteController extends Controller
{
public function update(Request $request)
{
    $web_sett=phurkey_website::find(1);

    $web_title=Input::get('web_title');
    $meta_desc=Input::get('meta_desc');
    $meta_key=Input::get('meta_key');
    $about=Input::get('about');
    $contact=Input::get('contact_num_web');
    $location=Input::get('location_web');
    $email=Input::get('email_web');
    $facebook=Input::get('facebook');
    $twitter=Input::get('twitter');

    $web_sett->web_title=$web_title;
    $web_sett->meta_desc=$meta_desc;
    $web_sett->meta_key=$meta_key;
    $web_sett->about=$about;
    $web_sett->contact=$contact;
    $web_sett->location=$location;
    $web_sett->email=$email;
    $web_sett->facebook=$facebook;
    $web_sett->twitter=$twitter;

    $web_sett->save();

    return Redirect::intended('/yakana/spinal/admin?action=settings')->with('status', 'Settings updated!');
}
}
