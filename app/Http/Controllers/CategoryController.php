<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;

use Illuminate\Support\Facades\Input;

use App\phurkey_category;

class CategoryController extends Controller
{
    public function store()
    {

    	$category = new phurkey_category;

        $category->cat_image=Input::get('icon');

    	$category->category_name = Input::get('title');

    	$destinationPath = base_path(). '/public/images/category_image';

    	$cat=Input::file('icon');

        $catNameafter=$cat->getClientOriginalName();


        $cat->move($destinationPath,$catNameafter);

        $category->cat_image=$catNameafter;


        try{
        	$category->save();
        	Session::flash('flash_message', 'Category detail added successfully');
        	return redirect('yakana/spinal/admin?action=categories');
        }catch(Exception $exe)
        {

        	echo $exe;
        }



    }
}
