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
    protected $allowedFields    = ['produk_id', 'nama_produk', 'deskripsi', 'harga', 'stok', 'kategori_produk', 'foto', 'created_at', 'updated_at', 'updated_at', 'deleted_at'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
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
}
