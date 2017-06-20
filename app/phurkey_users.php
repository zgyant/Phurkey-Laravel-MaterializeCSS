<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class phurkey_users extends Authenticatable
{
    public $timestamps = false;
    protected $fillable =
        ['full_name','username','email','password','reg_ip_address','reg_date',
            'sex','date_ob','address','contact_num','profile_image','descriptions',
            'conf_code','activated'];


    public function book()
    {

    	return $this->belongsTo(book::class);

    }
}
