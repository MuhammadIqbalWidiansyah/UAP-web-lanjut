<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>

<div class="flex overflow-hidden bg-white pt-16">
      <aside id="sidebar" class="fixed hidden z-20 h-full top-0 left-0 pt-16 flex lg:flex flex-shrink-0 flex-col w-64 transition-width duration-75" aria-label="Sidebar">
         <div class="relative flex-1 flex flex-col min-h-0 border-r border-gray-200 bg-white pt-0">
            <div class="flex-1 flex flex-col pt-5 pb-4 overflow-y-auto">
               <div class="flex-1 px-3 bg-white divide-y space-y-1">
                  <ul class="space-y-2 pb-2">
                     <li>
                        <form action="#" method="GET" class="lg:hidden">
                           <label for="mobile-search" class="sr-only">Search</label>
                           <div class="relative">
                              <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                 <svg class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path>
                                 </svg>
                              </div>
                              <input type="text" name="email" id="mobile-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-cyan-600 focus:ring-cyan-600 block w-full pl-10 p-2.5" placeholder="Search">
                           </div>
                        </form>
                     </li>
                     <li>
                        <a href="#" class="text-base text-gray-900 font-normal rounded-lg flex items-center p-2 hover:bg-gray-100 group" >
                           <svg class="w-6 h-6 text-gray-500 group-hover:text-gray-900 transition duration-75" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                              <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                              <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                           </svg>
                           <span class="ml-3">Dashboard</span>
                        </a>
                     </li>
                     <li>
                        <a href="#" class="text-base text-gray-900 font-normal rounded-lg hover:bg-gray-100 flex items-center p-2 group ">
                           <svg class="w-6 h-6 text-gray-500 flex-shrink-0 group-hover:text-gray-900 transition duration-75" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                           </svg>
                           <span class="ml-3 flex-1 whitespace-nowrap">Profile</span>
                        </a>
                     </li>
                     <li>
                        <a href="#" class="text-base text-gray-900 font-normal rounded-lg hover:bg-gray-100 flex items-center p-2 group ">
                           <svg class="w-6 h-6 text-gray-500 flex-shrink-0 group-hover:text-gray-900 transition duration-75" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd"></path>
                           </svg>
                           <span class="ml-3 flex-1 whitespace-nowrap">Products</span>
                        </a>
                     </li>
                     <li>
                        <a href="#" class="text-base text-gray-900 font-normal rounded-lg hover:bg-gray-100 flex items-center p-2 group ">
                          <svg class="w-6 h-6" fill="currentColor" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                          </svg>
                           <span class="ml-3 flex-1 whitespace-nowrap">Log Out</span>
                        </a>
                     </li>
                     <li>
                        <a href="#" class="text-base text-gray-900 font-normal rounded-lg hover:bg-gray-100 flex items-center p-2 group ">
                           <svg class="w-6 h-6 text-gray-500 flex-shrink-0 group-hover:text-gray-900 transition duration-75" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" d="M5 4a3 3 0 00-3 3v6a3 3 0 003 3h10a3 3 0 003-3V7a3 3 0 00-3-3H5zm-1 9v-1h5v2H5a1 1 0 01-1-1zm7 1h4a1 1 0 001-1v-1h-5v2zm0-4h5V8h-5v2zM9 8H4v2h5V8z" clip-rule="evenodd"></path>
                           </svg>
                           <span class="ml-3 flex-1 whitespace-nowrap">Transaksi</span>
                        </a>
                     </li>
                  </ul>
                  <div class="space-y-2 pt-2">
                     <a href="#" target="_blank" class="text-base text-gray-900 font-normal rounded-lg hover:bg-gray-100 group transition duration-75 flex items-center p-2">
                        <svg class="w-6 h-6 text-gray-500 flex-shrink-0 group-hover:text-gray-900 transition duration-75" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                           <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-2 0c0 .993-.241 1.929-.668 2.754l-1.524-1.525a3.997 3.997 0 00.078-2.183l1.562-1.562C15.802 8.249 16 9.1 16 10zm-5.165 3.913l1.58 1.58A5.98 5.98 0 0110 16a5.976 5.976 0 01-2.516-.552l1.562-1.562a4.006 4.006 0 001.789.027zm-4.677-2.796a4.002 4.002 0 01-.041-2.08l-.08.08-1.53-1.533A5.98 5.98 0 004 10c0 .954.223 1.856.619 2.657l1.54-1.54zm1.088-6.45A5.974 5.974 0 0110 4c.954 0 1.856.223 2.657.619l-1.54 1.54a4.002 4.002 0 00-2.346.033L7.246 4.668zM12 10a2 2 0 11-4 0 2 2 0 014 0z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="ml-3">Help</span>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </aside>
      <div class="bg-gray-900 opacity-50 hidden fixed inset-0 z-10" id="sidebarBackdrop"></div>
      <div id="main-content" class="h-full w-full bg-gray-50 relative overflow-y-auto lg:ml-64">
         <main>
            <div class="pt-6 px-4">
              <br>
              <div class="mp-4 ">
              <div class="row row-cols-2 g-3">
              <div class="col">
                <div class="card flex flex-col justify-center p-2 bg-white rounded-lg">
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
                <div class="card flex flex-col justify-center p-2 bg-white rounded-lg">
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
                <div class="card flex flex-col justify-center p-2 bg-white rounded-lg ">
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
                <div class="card flex flex-col justify-center p-2 bg-white rounded-lg ">
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
                <div class="card flex flex-col justify-center p-2 bg-white rounded-lg ">
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
                <div class="card flex flex-col justify-center p-2 bg-white rounded-lg ">
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
                <div class="card flex flex-col justify-center p-2 bg-white rounded-lg ">
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
                <div class="card flex flex-col justify-center p-2 bg-white rounded-lg">
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
          </div>

        </div>  
      </div>
     </main>
    </div>
</div>

 <?= $this->endSection() ?>