<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Input;

use Illuminate\Support\Facades\Redirect;

use Illuminate\Support\Facades\Session;

use App\team_info;


class TeamInfoController extends Controller
{
    public function store()
    {
    	$destinationPath = base_path(). '/public/images/member_image/';

    	$user = new team_info;

    	$user->Full_Name = Input::get('name');

    	$user->Email = Input::get('email');

    	$user->Position = Input::get('pos');

    	$user->Website = Input::get('web');

    	$user->Contact_Number = Input::get('num');

    	$user->LinkedIn = Input::get('acc_linkedin');

    	$user->Twitter = Input::get('twi');

    	$user->Facebook = Input::get('fb');

    	$profile=Input::file('pic');

        $profileNameafter=$profile->getClientOriginalName();

        $profile->move($destinationPath,$profileNameafter);

        $user->member_photo=$profileNameafter;

    	$user->active = '1';


    	$user->save();
    	
    }
}
