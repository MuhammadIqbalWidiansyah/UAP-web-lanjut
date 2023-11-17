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
            // return view('landing_page');
        }
    }

    public function list() 
    {
        return view('transaksi');
    }

    public function tampil() {
        return view('detail');
    }

    public function dash_admin() {
        return view('dashboard_admin');
    }

    public function dash_karyawan() {
        return view('dashboard_karyawan');
    }

    public function dash_cust() {
        return view('dashboard_cust');
    }

    public function produk() {
        return view('produk');
    }
}