<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>
<div class="container">
<body>
    <div class="container mx-2 p-10 ">
        <h1 class="text-3xl lg:text-4xl tracking-tight font-semibold leading-8 lg:leading-9 text-gray-800 dark:text-black dark:text-black">Riwayat Transaksi</h1>
    </div=> 
    <br>

    <table border="1">
        <tr>
            <th>Nama Produk</th>
            <th>Jumlah</th>
            <th>Tanggal Transaksi</th>
        </tr>
        <?php foreach ($transaksi as $trx) : ?>
            <tr>
                <td><?= $trx['nama_produk']; ?></td>
                <td><?= $trx['jumlah']; ?></td>
                <td><?= $trx['tanggal_transaksi']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</div>
<?= $this->endSection() ?>
