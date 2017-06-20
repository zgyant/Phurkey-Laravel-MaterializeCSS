<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class phurkey_category extends Model
{
	protected $table = 'categories';

    public $timestamps=false;

    protected $fillable=['category_title', 'cat_image'];
}
