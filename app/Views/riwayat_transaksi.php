<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>
<div class="container">
<body>
    <div class="container mx-2 p-10 ">
        <h1 class="text-3xl lg:text-4xl tracking-tight font-semibold leading-8 lg:leading-9 text-gray-800 dark:text-black dark:text-black">Riwayat Transaksi User ID <?= $riwayat_transaksi[0]['user_id']; ?></h1>
    </div=> 
    <br>

    <table border="1">
        <tr>
            <th>Transaksi ID</th>
            <th>User ID</th>
            <th>Total Harga</th>
            <th>Created At</th>
            <th>Updated At</th>
            <th>Deleted At</th>
        </tr>
        <?php foreach ($riwayat_transaksi as $transaksi) : ?>
            <tr>
                <td><?= $transaksi['transaksi_id']; ?></td>
                <td><?= $transaksi['user_id']; ?></td>
                <td><?= $transaksi['total_harga']; ?></td>
                <td><?= $transaksi['created_at']; ?></td>
                <td><?= $transaksi['updated_at']; ?></td>
                <td><?= $transaksi['deleted_at']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</div>
<?= $this->endSection() ?>
