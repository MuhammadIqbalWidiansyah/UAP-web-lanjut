<?php

namespace App\Controllers;
use App\Controllers\BaseController;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function list()
    {
        return view('transaksi');
    }

    
    public function tampil()
    {
        
        return view('detail');
    }

    
}