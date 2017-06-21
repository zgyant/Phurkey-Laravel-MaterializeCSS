<?php

namespace App;

use Illuminate\Database\Eloquent\Model;



class users_message extends Model
{
    protected  $table='message_users';
    protected $fillable=
        ['sender', 'receiver',
            'message','seen'];
}
