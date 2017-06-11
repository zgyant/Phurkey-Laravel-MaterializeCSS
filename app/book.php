<?php

namespace App;

use Illuminate\Database\Eloquent\Model;



class book extends Model
{
	/*protected $table = 'books';
*/

    protected $fillable=['book_name', 'authur_name', 'publisher_name', 'genre', 'description', 'price', 'image', 'book_condition'];

}
