<?php

namespace App\Http\Controllers;
use App\about_website;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

use Illuminate\Http\Request;

class AboutWebsiteController extends Controller
{

    public function update(Request $request)
    {
        $webdetails=about_website::find(1);

        $privacy=Input::get('user_pri');
        $terms_con=Input::get('terms_con');
        $adpolicy=Input::get('adpolicy');
        $refund=Input::get('refund');


        $webdetails->privacy=$privacy;
        $webdetails->terms_conditions=$terms_con;
        $webdetails->ad_policy=$adpolicy;
        $webdetails->refund_policy=$refund;


        $webdetails->save();

        return Redirect::intended('/yakana/spinal/admin?action=websitedetails')->with('status', 'Settings updated!');
    }

}
