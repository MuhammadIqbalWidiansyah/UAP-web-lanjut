<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>

<!-- component -->
      <div class="bg-white p-4 rounded-md">
        <div>
          <h2 class="mb-4 text-xl font-bold text-gray-700">Transaksi</h2>
          <div>
            <div>
              <div class="flex justify-between bg-gradient-to-tr from-pink-500 to-pink-600 rounded-md py-2 px-4 text-white font-bold text-md">
                <div>
                  <span>Id</span>
                </div>
                <div>
                  <span>User Id</span>
                </div>
                <div>
                  <span>Total</span>
                </div>
                <div>
                  <span>Tanggal</span>
                </div>
                <div>
                  <span>Detail</span>
                </div>
              </div>
              <div>
                <div class="flex justify-between border-t text-sm font-normal mt-4 space-x-4">
                  <div class="px-2 flex">
                    <span>A123</span>
                  </div>
                  <div>
                    <span>iqbal widiansyah</span>
                  </div>
                  <div class="px-2">
                    <span>Rp 151.500</span>
                  </div>
                  <div class="px-2">
                    <span>28/10/2023</span>
                  </div>
                  <div class="px-2">
                    <a href="<?= base_url('/tampil'); ?>">
                      <button
                          class="middle none center rounded-lg bg-pink-500 py-3 px-6 font-sans text-xs font-bold uppercase text-white shadow-md shadow-pink-500/20 transition-all hover:shadow-lg hover:shadow-pink-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                          data-ripple-light="true">
                          Detail
                        </button>
                    </a>
                  </div>
                </div>
      
                <div class="flex justify-between border-t text-sm font-normal mt-4 space-x-4">
                  <div class="px-2 flex">
                    <span>B123</span>
                  </div>
                  <div>
                    <span>Restu Halimmmm</span>
                  </div>
                  <div class="px-2">
                    <span>Rp 151.500</span>
                  </div>
                  <div class="px-2">
                    <span>29/10/2023</span>
                  </div>
                  <div class="px-2">
                    <a href="<?= base_url('/tampil'); ?>">
                      <button
                          class="middle none center rounded-lg bg-pink-500 py-3 px-6 font-sans text-xs font-bold uppercase text-white shadow-md shadow-pink-500/20 transition-all hover:shadow-lg hover:shadow-pink-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                          data-ripple-light="true">
                          Detail
                        </button>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


<?= $this->endSection() ?>