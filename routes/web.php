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

Route::get('privacy', function () {
    return view('privacy');
});

Route::get('terms', function () {
    return view('terms');
});

Route::get('sponsors', function () {
    return view('sponsors');
});


Route::get('teams', function () {
    return view('teams');
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

Route::get('book/{id}', function ($id) {
    return view('book',['id'=>$id]);
});
Route::get('booklist/book/{id}', function ($id) {
    return view('book',['id'=>$id]);
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


Route::get('yakana/spinal/admin/view_user/{id}', function ($id) {
    return view('theme/backend/dashboard/view_user',['id'=>$id]);
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

Route::get('/yakana/spinal/admin/getAdminsDetails','AdminAccountController@getAdminDetails');
Route::get('/yakana/spinal/admin/getUsersDetails','AccountController@getUsersDetails');
Route::get('/yakana/spinal/book_enable/{id}','BookController@enable_book');
Route::get('/yakana/spinal/book_delete/{id}','BookController@book_delete');

Route::get('/book_enable/{id}','BookController@enable_book_user');
Route::get('/book_delete/{id}','BookController@book_delete_user');


Route::post('/booklist/book/message/{username}','MessageController@sendMsg');


//add book
Route::post('add_book', 'BookController@store');

//edit profile
//Route::


//Update profile
//Route::patch('update_profile/{id}', 'AccountController@update');

Route::post('update_profile/{id}', 'AccountController@update');


//add new category
Route::post('yakana/spinal/add_category', 'CategoryController@store');
Route::post('yakana/spinal/add_category', 'CategoryController@store');

Route::post('yakana/spinal/website_setting', 'WebsiteController@update');
Route::post('yakana/spinal/website_details', 'AboutWebsiteController@update');
//Route::post('yakana/spinal/add_category', 'CategoryController@store');
Route::post('yakana/spinal/add_category', 'CategoryController@store');


//user message route
Route::post('message/{username}', 'MessageController@sendMsg');