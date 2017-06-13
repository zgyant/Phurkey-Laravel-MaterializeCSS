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

//CMS ROUTES
Route::get('yakana/spinal/admin/dashboard',function()
{
    return view('backend/backend');
})->name('admindash');

Route::get('yakana/spinal/admin/login',function()
{
    return view('backend/login');
})->name('adminlogin');
Route::get('yakana/spinal/admin',function()
{
    return view('backend/backend');
});


//Register Route

Route::post('create_user', 'AccountController@register');

//Login Route

Route::post('login_user', 'AccountController@login');

//Login Admin Route

Route::post('yakana/spinal/admin/login_admin', 'AdminAccountController@login');
Route::post('yakana/spinal/login_admin', 'AdminAccountController@login');

//Logout
Route::get('logout', 'AccountController@logout');
Route::get('yakana/spinal/admin/logout','AdminAccountController@logout');
Route::get('yakana/spinal/logout','AdminAccountController@logout');
//checkdata
Route::post('checkdata', 'AccountController@checkdata');

//add book
Route::post('add_book', 'BookController@store');

