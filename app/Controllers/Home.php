<?php

namespace App\Controllers;
use App\Controllers\BaseController;

class Home extends BaseController
{
    public function index()
    {
        if (logged_in()) {
            if (in_groups('Admin')) {
                return dd('admin');
            } else if (in_groups('Karyawan')) {
                return dd('karyawan');
            } else if (in_groups('User')) {
                return view('list_barang');
            }   
        } else {
            return view('landing_page');
        }
    }

    public function list() 
    {
        return view('transaksi');
    }

    public function tampil() {
        return view('detail');
    }
}