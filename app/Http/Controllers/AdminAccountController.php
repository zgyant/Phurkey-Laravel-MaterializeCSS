<?php

namespace App\Http\Controllers;

use App\phurkey_admins;
use Exception;
use Hash;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Request;

class AdminAccountController extends Controller
{

    public function login(Request $request)
    {
        $email = Input::get('login_email');
        $password = Input::get('login_pass');

        $admins = Phurkey_admins:: where('admin_email', $email)->where('password', $password)->first();
        if ($admins === null) {
            Session::put(['error' => 'ivc']);
            return Redirect::intended('/yakana/spinal/admin/login');
        } else {
            $type = $admins->admin_type;
            Session::put(['email' => $email, 'admin_type' => $type, 'flash_message' => 'Welcome' . $email]);
            return Redirect::intended('/yakana/spinal/admin');
        }

    }

    public function logout(Request $request)
    {
        Session::forget('email', 'flash_message', 'admin_type');
        return Redirect::intended('/yakana/spinal/admin/login');
    }

    public function getAdminDetails(Request $request)
    {
        return Datatables::of(phurkey_admins::query())->make(true);
    }

}