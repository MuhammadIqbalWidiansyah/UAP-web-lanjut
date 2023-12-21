<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
<!-- header footer -->
    <link rel="stylesheet" href="<?=base_url("assets/css/style.css")?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Restu -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<!-- login admin -->
    <script src="https://cdn.tailwindcss.com"></script>

<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body>
   <header>
            <nav class="border-b border-gray-200 fixed z-50 w-full" style="background-color: #59c6cc;">
         <div class="px-3 py-3 lg:px-5 lg:pl-3">
            <div class="flex items-center justify-between">
               <div class="flex items-center justify-start">
                  <button id="toggleSidebarMobile" aria-expanded="true" aria-controls="sidebar" class="lg:hidden mr-2 text-gray-600 hover:text-gray-900 cursor-pointer p-2 hover:bg-gray-100 focus:bg-gray-100 focus:ring-2 focus:ring-gray-100 rounded">
                     <svg id="toggleSidebarMobileHamburger" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                     </svg>
                     <svg id="toggleSidebarMobileClose" class="w-6 h-6 hidden" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </button>
                  <a href="#" class="text-xl font-bold flex items-center lg:ml-2.5">
                  <img src="<?php echo base_url('assets/img/logo.jpg'); ?>" class="h-12 mr-2" alt="Windster Logo">
                  <span class="self-center whitespace-nowrap">RESTIQA</span>
                  </a>
                  <form action="#" method="GET" class="hidden lg:block lg:pl-32">
                     <label for="topbar-search" class="sr-only">Search</label>
                     <div class="mt-1 relative lg:w-64">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                           <svg class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                           </svg>
                        </div>
                        <input type="text" name="email" id="topbar-search" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full pl-10 p-2.5" placeholder="Search">
                     </div>
                  </form>
               </div>
               <div class="flex items-center">
                  <button id="toggleSidebarMobileSearch" type="button" class="lg:hidden text-gray-500 hover:text-gray-900 hover:bg-gray-100 p-2 rounded-lg">
                     <span class="sr-only">Search</span>
                     <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                     </svg>
                  </button>
                  <div class="hidden lg:flex items-center">
                     <div class="-mb-1">
                        <a class="github-button" href="#" data-color-scheme="no-preference: dark; light: light; dark: light;" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star themesberg/windster-tailwind-css-dashboard on GitHub">Star</a>
                     </div>
                  </div>
                  <a href="<?= url_to('logout') ?>" class="hidden sm:inline-flex ml-5 text-white bg-cyan-600 hover:bg-cyan-700 focus:ring-4 focus:ring-cyan-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center items-center mr-3" style="background-color: #F875AA;">
                  <?= csrf_field() ?>
                     LogOut
                  </a>
               </div>
            </div>
         </div>
      </nav>
   </header>


   <?= $this->renderSection('content') ?>
   </div>
         <footer class="footer">
               <div class="footer-left">
                  <h3>Payment Method</h3>
                  <div class="credit-cards">
                     <img src="img/visa.png" alt="">
                     <img src="img/mastercard.png" alt="">
                     <img src="img/paypal.png" alt="">
                  </div>
                  <p class="footer-copyright">2021 Restiqa Skincare</p>
               </div>

               <div class="footer-center">
                  <div>
                     <i class="fa fa-map-marker"></i>
                     <p><span>Indonesia</span> Bandar Lampung, Raja Basa</p>
                  </div>
                  <div>
                     <i class="fa fa-phone"></i>
                     <p>+62 856-6468-4711</p>
                  </div>
                  <div>
                     <i class="fa fa-envelope"></i>
                     <p><a href="#">restiqa23@gmail.com</a></p>
                  </div>
               </div>

               <div class="footer-right">
                  <p class="footer-about">
                     <span>About</span>
                     Selamat datang di Restiqa Skincare! Kami adalah tujuan terpercaya untuk produk perawatan kulit berkualitas. Temukan produk yang cocok untuk kulit Anda dan mulailah perjalanan menuju kulit yang sehat dan indah bersama kami.

                  <div class="footer-media">
                     <a href="#"><i class="fa fa-youtube"></i></a>
                     <a href="#"><i class="fa fa-facebook"></i></a>
                     <a href="#"><i class="fa fa-twitter"></i></a>
                     <a href="#"><i class="fa fa-instagram"></i></a>
                     <a href="#"><i class="fa fa-linkedin"></i></a>
                  </div>
               </div>

         </footer>
      
   <script>src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"</script>
</body>
</html>