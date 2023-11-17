<?php

namespace App\Controllers;

class ProfileController extends BaseController
{
    public function admin()
    {
        return view('profile_admin');
    }

    public function karyawan()
    {
        return view('profile_karyawan');
    }
    

    public function customer()
    {
        return view('profile_cust');
    }   
    
}


