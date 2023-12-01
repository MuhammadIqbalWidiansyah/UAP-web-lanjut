<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProdukModel;
use App\Models\KategoriProdukModel;

class ProdukController extends BaseController
{
    public $produkModel;
    public $kategoriProdukModel;

    public function __construct() {
        $this->produkModel = new ProdukModel();
        $this->kategoriProdukModel = new KategoriProdukModel();
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
            'title' => 'Dashboard',
            'barang' => $this->produkModel->getProduk()
        ];
        return view('dashboard_cust', $data);
    }

    public function createProduk() {
        $kategoriProduk = $this->kategoriProdukModel->getKategoriProduk();
        $data = [
            'title' => 'Create Produk',
            'kategori_produk' => $kategoriProduk
        ];
        return view('create_produk', $data);
    }

    public function store() {
        $kategoriProduk = [
            [
                'kategori_id' => 1,
                'nama_kategori' => 'Day Cream',
            ],
            [
                'kategori_id' => 2,
                'nama_kategori' => 'Night Cream',
            ],
            [
                'kategori_id' => 3,
                'nama_kategori' => 'Moistureizer',
            ],
            [
                'kategori_id' => 4,
                'nama_kategori' => 'Serum',
            ],
            [
                'kategori_id' => 5,
                'nama_kategori' => 'Toner',
            ],
            [
                'kategori_id' => 6,
                'nama_kategori' => 'Booster',
            ],
            [
                'kategori_id' => 7,
                'nama_kategori' => 'Sunscreen',
            ],
            [
                'kategori_id' => 8,
                'nama_kategori' => 'Facial Wash',
            ]
        ];

        if(!$this->validate($this->produkModel->validationRules, $this->produkModel->validationMessages)) {
            $data = [
                'title' => 'Store Kategori Produk',
                'kategori_produk' => $kategoriProduk,
                'validation' => $this->validator
            ];
            return view('create_produk', $data);
        }

        $path = 'assets/uploads/img/';
        $foto = $this->request->getFile('foto');
        $name = $foto->getRandomName();

        if($foto->move($path, $name)) {
            $foto = base_url($path . $name);
        }

        $this->produkModel->saveProduk([
            'nama_produk' => $this->request->getVar('nama_produk'),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'harga' => $this->request->getVar('harga'),
            'stok' => $this->request->getVar('stok'),
            'kategori_produk' => $this->request->getVar('kategori_produk'),
            'foto' => $foto
        ]);
        return redirect()->to(base_url('/dash_cust'));
    }

    public function editProduk($produk_id) {
        $produk = $this->produkModel->getProduk($produk_id);
        $kategoriProduk = $this->kategoriProdukModel->getKategoriProduk();
        $data = [
            'title' => 'Edit Produk',
            'produk' => $produk,
            'kategori_produk' => $kategoriProduk
        ];
        return view('edit_produk', $data);
    }

    public function updateProduk($produk_id) {
        $path = 'assets/uploads/img/';
        $foto = $this->request->getFile('foto');
        $data = [
            'nama_produk' => $this->request->getVar('nama_produk'),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'harga' => $this->request->getVar('harga'),
            'stok' => $this->request->getVar('stok'),
            'kategori_produk' => $this->request->getVar('kategori_produk')
        ];

        if ($foto->isValid()) {
            $name = $foto->getRandomName();
            if ($foto->move($path, $name)) {
                $foto_path = base_url($path . $name);
                $data['foto'] = $foto_path;
            }
        }
        $result = $this->produkModel->updateProduk($data, $produk_id);

        if (!$result) {
            return redirect()->back()->withInput()
            ->with('error', 'Gagal Menyimpan Data');
        }
        return redirect()->to(base_url('/dash_cust'));
    }

    public function destroyProduk($produk_id) {
        $result = $this->produkModel->deleteProduk($produk_id);
        if(!$result) {
            return redirect()->back()->with('error', 'Gagal Menghapus Data');
        }
        return redirect()->to(base_url('/dash_cust'))
        ->with('success', 'Berhasil Menghapus Data');
    }
}


