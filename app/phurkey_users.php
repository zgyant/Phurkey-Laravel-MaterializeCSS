<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class phurkey_users extends Authenticatable
{
    public $timestamps = false;
    protected $fillable = ['full_name','username','email','password','reg_ip_address','reg_date','conf_code','activated'];
}
