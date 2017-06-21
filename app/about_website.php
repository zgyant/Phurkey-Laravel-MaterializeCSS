<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class about_website extends Model
{
    protected $table = 'about_websites';

    public $timestamps=false;

    protected $fillable=['privacy', 'terms_conditions','ad_policy','refund_policy'];
}
