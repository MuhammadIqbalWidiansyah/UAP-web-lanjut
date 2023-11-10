<?php

namespace App\Controllers;

class LoginController extends BaseController
{
    // public function customer()
    // {
    //     return view('login_cust');
    // }
    
    public function admin()
    {
        return view('login_admin');
    }

    public function karyawan()
    {
        return view('login_karyawan');
    }

    public function register()
    {
        return view('Auth/register');
    }



    
}


