<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>

    <div class="container mx-2 p-10 ">
      <h1 class="text-3xl lg:text-4xl tracking-tight font-semibold leading-8 lg:leading-9 text-gray-800 dark:text-black dark:text-black">Produk</h1>
    </div> 
<br>

<div class="container">
  <div class="mp-4">
    <div class="row row-cols-1 row-cols-md-3 g-4">
      <?php foreach($barang as $produk) { ?>
        <div class="col">
          <div class="card h-100 justify-center p-2 bg-white rounded-lg shadow-2xl">
            <img src="<?= $produk['foto'] ?>" class="card-img-top" alt="daycream" />
            <div class="card-body">
              <h5 class="card-title"><?= $produk['nama_produk'] ?></h5>
              <p class="card-text">
                Rp <?= $produk['harga'] ?> (Tersisa <?= $produk['stok'] ?> produk)
              </p>
            </div>
          </div> 
        </div>
      <?php } ?>
    </div>  
  </div>
</div>

  
<?= $this->endSection() ?>