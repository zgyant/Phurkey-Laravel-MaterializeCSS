<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class phurkey_website extends Model
{
    protected $table = 'website_details';

    public $timestamps=false;

    protected $fillable=['web_title', 'meta_desc','meta_key','about','contact','location','email','facebook','twitter'];
}
