<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TransaksiModel;
use App\Models\ProdukModel;

class TransaksiController extends BaseController
{
    public function beliProduk($produk_id)
    {
        // Load the authentication library
        $authenticate = \Config\Services::authentication();

        // Check if the user is logged in
        if (!$authenticate->check()) {
            // Redirect or take other actions if the user is not logged in
            return redirect()->to('/logout');
        }

        // Retrieve the currently logged-in user's information
        $user = $authenticate->user();
        $userId = $user->id; // Assuming 'id' is the field in your users table for user ID

        // Ambil informasi produk berdasarkan ID
        $produkModel = new ProdukModel();
        $produk = $produkModel->find($produk_id);

        if (!$produk) {
            return "Produk tidak ditemukan"; // Tambahkan logika jika produk tidak ditemukan
        }

        // Lakukan validasi stok cukup sebelum transaksi
        if ($produk['stok'] <= 0) {
            return "Maaf, stok produk habis"; // Tambahkan logika jika stok habis
        }

        // Lakukan proses transaksi (mengurangi stok, dll.) di sini
        $transaksiModel = new TransaksiModel();

        // Informasi transaksi yang akan disimpan
        $dataTransaksi = [
            'user_id' => $userId,
            'produk_id' => $produk_id,
            'jumlah' => 1, // Jumlah produk yang dibeli, bisa disesuaikan dengan kebutuhan
            'tanggal_transaksi' => date('Y-m-d H:i:s') // Tanggal transaksi, dapat disesuaikan
        ];

        // Lakukan transaksi: Simpan informasi transaksi dan kurangi stok produk
        $transaksiModel->tambahTransaksi($dataTransaksi);

        // Kurangi stok produk setelah transaksi
        $stok_baru = $produk['stok'] - 1; // Misalnya, hanya satu produk yang dibeli

        // Update stok produk
        $produkModel->update($produk_id, ['stok' => $stok_baru]);

        return redirect()->back()->with('success', 'Transaksi berhasil. Produk telah dibeli.');
    }

    public function history()
    {
        // Load the authentication library
        $authenticate = \Config\Services::authentication();

        // Check if the user is logged in
        if (!$authenticate->check()) {
            // Redirect or take other actions if the user is not logged in
            return redirect()->to('/logout');
        }

        // Retrieve the currently logged-in user's information
        $user = $authenticate->user();
        $userId = $user->id; // Assuming 'id' is the field in your users table for user ID

        // Instance dari model transaksi
        $transactionModel = new TransaksiModel();

        // Mengambil riwayat transaksi beserta nama produk berdasarkan user ID
        $transactions = $transactionModel->getTransactionHistory($userId);

        // Mengirim data riwayat transaksi ke view
        return view('riwayat_transaksi', ['transaksi' => $transactions]);
    }
}
