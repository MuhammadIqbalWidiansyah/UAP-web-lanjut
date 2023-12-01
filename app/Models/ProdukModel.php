<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdukModel extends Model
{
    protected $table            = 'produk';
    protected $primaryKey       = 'produk_id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['produk_id', 'nama_produk', 'deskripsi', 'harga', 'stok', 'kategori_produk', 'foto', 'created_at', 'updated_at', 'deleted_at'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
        'nama_produk' => 'required|string|is_unique[produk.nama_produk]',
        'deskripsi' => 'required|string',
        'harga' => 'required|decimal',
        'stok' => 'required|integer',
        'kategori_produk' => 'required'
    ];
    protected $validationMessages   = [
        'nama_produk' => [
            'required' => 'Nama Produk Harus Diisi',
            'is_unique' => 'Nama Produk Sudah Terdaftar'
        ],
        'deskripsi' => [
            'required' => 'Deskripsi Harus Diisi',
        ],
        'harga' => [
            'required' => 'Harga Harus Diisi',
            'decimal' => 'Harga Harus Berupa Angka Desimal dan Dapat Berupa (+) dan (-)'
        ],
        'stok' => [
            'required' => 'Stok Harus Diisi',
            'integer' => 'Stok Harus Berupa Angka'
        ],
        'kategori_produk' => [
            'required' => 'Kategori Produk Harus Diisi',
        ]
    ];
    protected $skipValidation       = true;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function getProduk($produk_id = null) {
        if($produk_id != null) {
            return $this->select('produk.*, kategori_produk.nama_kategori')
            ->join('kategori_produk', 'kategori_produk.kategori_id = produk.kategori_produk')->find($produk_id);
        }
        return $this->select('produk.*, kategori_produk.nama_kategori')
            ->join('kategori_produk', 'kategori_produk.kategori_id = produk.kategori_produk')->findAll();
    }

    public function saveProduk($data) {
        $this->insert($data);
    }

    public function updateProduk($data, $produk_id) {
        return $this->update($produk_id, $data);
    }

    public function deleteProduk($produk_id) {
        return $this->delete($produk_id);
    }
}
