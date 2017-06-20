<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class phurkey_category extends Model
{
	protected $table = 'catagories';

    public $timestamps=false;

    protected $fillable=['category_name', 'category_title', 'cat_image'];
}
