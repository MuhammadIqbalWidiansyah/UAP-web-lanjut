<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>

    <div class="container mx-2 p-10 ">
      <h1 class="text-3xl lg:text-4xl tracking-tight font-semibold leading-8 lg:leading-9 text-gray-800 dark:text-black dark:text-black">Produk</h1>
    </div> 
<br>
<div class="mp-4 ">
<div class="row row-cols-2 g-3">
<div class="col">
  <div class="card flex flex-col justify-center p-2 bg-white rounded-lg shadow-2xl">
      <img src="<?php echo base_url('images/daycream.png'); ?>" class="card-img-top" alt="daycream" />
      <div class="card-body">
        <h5 class="card-title">Day Cream</h5>
        <p class="card-text">
        Rp 89.500 (Tersisa 150 produk)
        </p>
      </div>
  </div> 
</div>
  
  <div class="col">
  <div class="card flex flex-col justify-center p-2 bg-white rounded-lg shadow-2xl">
      <img src="<?php echo base_url('images//nightcream.png'); ?>" class="card-img-top" alt="/nightcream" />
      <div class="card-body">
        <h5 class="card-title">Night Cream</h5>
        <p class="card-text">
        Rp 151.500 (Tersisa 250 Produk)
        </p>
      </div>
    </div>
  </div>

  <div class="col">
  <div class="card flex flex-col justify-center p-2 bg-white rounded-lg shadow-2xl">
      <img src="<?php echo base_url('images/moistureizer.png'); ?>" class="card-img-top" alt="moistureizer" />
      <div class="card-body">
        <h5 class="card-title">Moistureizer</h5>
        <p class="card-text">
        Rp 40.000 (Tersisa 210 Produk)
        </p>
      </div>
    </div>
  </div>

  <div class="col">
  <div class="card flex flex-col justify-center p-2 bg-white rounded-lg shadow-2xl">
      <img src="<?php echo base_url('images/serum.png'); ?>" class="card-img-top"alt="serum" />
      <div class="card-body">
        <h5 class="card-title">Serum</h5>
        <p class="card-text">
        Rp 175.000 (Tersisa 136 Produk)
        </p>
      </div>
    </div>
  </div>  
</div>

<br>
<div class="row row-cols-2 g-3">
<div class="col">
  <div class="card flex flex-col justify-center p-2 bg-white rounded-lg shadow-2xl">
      <img src="<?php echo base_url('images/toner.png'); ?>" class="card-img-top" alt="toner" />
      <div class="card-body">
        <h5 class="card-title">Toner</h5>
        <p class="card-text">
        Rp 63.500 (Tersisa 320 Produk)
        </p>
      </div>
  </div> 
</div>
  
  <div class="col">
  <div class="card flex flex-col justify-center p-2 bg-white rounded-lg shadow-2xl">
      <img src="<?php echo base_url('images/booster.png'); ?>" class="card-img-top" alt="booster" />
      <div class="card-body">
        <h5 class="card-title">Booster</h5>
        <p class="card-text">
        Rp 249.000 (Tersisa 210 Produk)
        </p>
      </div>
    </div>
  </div>

  <div class="col">
  <div class="card flex flex-col justify-center p-2 bg-white rounded-lg shadow-2xl">
      <img src="<?php echo base_url('images/sunscreen.png'); ?>" class="card-img-top" alt="sunscreen" />
      <div class="card-body">
        <h5 class="card-title">Sunscreen</h5>
        <p class="card-text">
        Rp 79.000 (Tersisa 160 Produk)
        </p>
      </div>
    </div>
  </div>

  <div class="col">
  <div class="card flex flex-col justify-center p-2 bg-white rounded-lg shadow-2xl">
      <img src="<?php echo base_url('images/facialwash.png'); ?>" class="card-img-top" alt="facialwash" />
      <div class="card-body">
        <h5 class="card-title">Facial Wash</h5>
        <p class="card-text">
        Rp 65.000 (Tersisa 70 Produk)
        </p>
      </div>
    </div>
  </div>

</div>  
</div>
   
<?= $this->endSection() ?>