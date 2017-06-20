<?php

namespace App;

use Illuminate\Database\Eloquent\Model;



class phurkey_admins extends Model
{
    /*protected $table = 'books';
*/
    public $timestamps=false;

    protected $fillable=[
        'admin_name',
        'admin_username',
        'password',
        'admin_type',
        'admin_email',
        'admin_contact'];

}
