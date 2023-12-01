<?php

namespace App\Models;

use CodeIgniter\Model;

class KategoriProdukModel extends Model
{
    protected $table            = 'kategori_produk';
    protected $primaryKey       = 'Kategori_id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['nama_kategori'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
        'nama_kategori' => 'required|alpha_space|is_unique[kategori_produk.nama_kategori]'
    ];
    protected $validationMessages   = [
        'nama_kategori' => [
            'required' => 'Nama Kategori Harus Diisi',

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

    public function getKategoriProduk($kategori_id = null) {
        if($kategori_id != null) {
            return $this->select('kategori_produk.*')->find($kategori_id);
        }
        return $this->select('kategori_produk.*')->findAll();
    }
}
