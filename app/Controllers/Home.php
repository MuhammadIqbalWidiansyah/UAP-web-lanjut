<?php

namespace App\Controllers;
use App\Controllers\BaseController;

class Home extends BaseController
{
    public function index()
    {
        if (logged_in()) {
            if (in_groups('admin')) {
                return dd('admin');
            } else if (in_groups('karyawan')) {
                return dd('karyawan');
            } else if (in_groups('customer')) {
                return dd('customer');
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

    public function keranjang() {
        return view('cart');
    }


}