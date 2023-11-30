<?php

namespace App\Controllers;

use App\Models\ProdukModel;

class ProdukController extends BaseController
{
    public $produkModel;

    public function __construct() {
        $this->produkModel = new ProdukModel();
    }

    public function list_barang()
    {
        $data = [
            'title' => 'Produk',
            'barang' => $this->produkModel->getProduk()
        ];
        return view('list_barang', $data);
    }

    public function dashboard_cust() {
        $data = [
            'title' => 'dashboard',
            'barang' => $this->produkModel->getProduk()
        ];
        return view('dashboard_cust', $data);
    }
}


