<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class team_info extends Model
{
    protected $fillable=['Full_Name', 'Email', 'Position', 'Website', 'Contact_Number'
    					,'LinkedIn','Twitter','Facebook','member_photo'];
}
