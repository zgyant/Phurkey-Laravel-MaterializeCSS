<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('booklist', function () {
    return view('booklist');
});
Route::get('booklist/{title}', function ($title) {
    return view('booklist',["title"=>$title]);
});

Route::get('newbook', function () {
    return view('newbook');
});


Route::get('forgot', function () {
    return view('forgot');
});


Route::get('register', function () {
    return view('register');
});

Route::get('verifymail', function () {
    return view('verifyemail');
});


Route::get('profile', function () {
    return view('profile');
});

Route::get('dashboard', function () {
    return view('dashboard');
});

Route::get('book', function () {
    return view('book');
});

Route::get('account', function () {
    return view('account');
});

Route::get('dashboard', function () {
    return view('dashboard');
});




//Register Route

Route::post('create_user', 'AccountController@register');

//Login Route

Route::post('login_user', 'AccountController@login');

//Logout
Route::get('logout', 'AccountController@logout');

//checkdata
Route::post('checkdata', 'AccountController@checkdata');



