<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TransaksiModel;

class TransaksiController extends BaseController
{
    public function transaksi($user_id)
    {
        $transaksiModel = new TransaksiModel();
        $data['riwayat_transaksi'] = $transaksiModel->getTransaksiByUserId($user_id);

        return view('riwayat_transaksi', $data);
    }
}
