<!DOCTYPE html>
 <html lang="en" class="">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./output.css" rel="stylesheet">
    <link rel="stylesheet" href="<?=base_url("assets/css/style.css")?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>
    <header>
        <nav style="background: #59c6cc;" class="dark:bg-gray-900">
            <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
                <a href="" class="flex items-center">
                    <img src="<?php echo base_url('images/restiqa1.png'); ?>" class="mr-3 h-6 sm:h-14" alt="Restiqa Logo" />
                    <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Restiqa</span>
                </a>
                <div class="flex items-center lg:order-2">
                    <a href="<?=base_url('/login_cust')?>"class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">Log in</a>
                    <button data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mobile-menu-2" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                        <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                </div>
                <div class="hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
                    <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-20 lg:mt-0">
                        <li>
                            <a href="#" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-blue-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700"aria-current="page" style="color: #ffffff;">Home</a>
                        </li>
                        <li>
                            <a href="#" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-blue-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700" style="color: #ffffff;">Produk</a>
                        </li>
                        <li>
                            <a href="#" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-blue-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700" style="color: #ffffff;">About Us</a>
                        </li>   
                        <li>
                            <a href="#" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-blue-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700"   style="color: #ffffff;">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <br>

    <section style="background: linear-gradient(90deg, #ff1493, #ffffff);" class="dark:bg-gray-900">
 

<br>
    <!-- component -->
<!-- This is an example component -->
    <div class="max-w-screen-xl mx-auto">

    <div id="default-carousel" class="relative" data-carousel="static">
    <!-- Carousel wrapper -->
    <div class="overflow-hidden relative h-56 rounded-lg sm:h-64 xl:h-80 2xl:h-96">
        <!-- Item 1 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <span class="absolute top-1/2 left-1/2 text-2xl font-semibold text-white -translate-x-1/2 -translate-y-1/2 sm:text-3xl dark:text-gray-800">First Slide</span>
            <img src="<?php echo base_url('images/profile_restiqa.png'); ?>" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
        </div>
        <!-- Item 2 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="<?php echo base_url('images/profile_restiqa.png'); ?>" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
        </div>
        <!-- Item 3 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="<?php echo base_url('images/profile_restiqa.png'); ?>" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
        </div>
    </div>
    <!-- Slider controls -->
    <button type="button" class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
            <span class="hidden">Previous</span>
        </span>
    </button>
    <button type="button" class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            <span class="hidden">Next</span>
        </span>
    </button>
</div>
</div>
   
        
    </section>  

    

    <section class="bg-white dark:bg-white-900">
        <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
                <h2 class="mb-4 text-4xl font-extrabold text-gray-900 dark:text-white"  style="color: #59c6cc;">Pilihan Terbaik</h2>
                <a href="<?=base_url('/list_barang')?>"class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" style="background-color: #59c6cc;" >Semua Produk</a>
            </div>
            <br>
            <div class="space-y-8 md:grid md:grid-cols-2 lg:grid-cols-3 md:gap-12 md:space-y-0">
                <div>
                  <div  style="background: linear-gradient(90deg, #ff1493, #ffffff);" class="dark:bg-gray-900">
                        <img src="<?php echo base_url('images/moistureizer1.png'); ?>" alt="mockup">
                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white" style="color: #59c6cc;">Moistureizer</h3>
                    <p class="text-gray-500 font-bold dark:text-gray-400" style="color: #000000;">Rp 40.000</p>
                </div>
                <div>
                  <div  style="background: linear-gradient(90deg, #ff1493, #ffffff);" class="dark:bg-gray-900">
                    <img src="<?php echo base_url('images/serum1.png'); ?>" alt="mockup">
                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white" style="color: #59c6cc;">Serum</h3>
                    <p class="text-gray-500 font-bold dark:text-gray-400" style="color: #000000;"> Rp 175.000 </p>
                </div>
              
                <div>
                  <div  style="background: linear-gradient(90deg, #ff1493, #ffffff);" class="dark:bg-gray-900">
                    <img src="<?php echo base_url('images/nightcream1.png'); ?>" alt="mockup">
                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white" style="color: #59c6cc;">Night Cream</h3>
                    <p class="text-gray-500 font-bold dark:text-gray-400" style="color: #000000;"> Rp 151.500 </p>
                </div>
                
            </div>
        </div>
      </section>

      <section style="background: linear-gradient(90deg, #ff1493, #ffffff);" class="dark:bg-gray-900">
      <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
    <div class="font-light text-gray-500 sm:text-lg dark:text-gray-400">
        <h1 class="max-w-2xl mb-4 text-4xl font-extrabold leading-none md:text-5xl xl:text-6xl dark:text-white" style="color: #ffffff;">Restiqa Skincare</h1>
        <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400" style="color: #ffffff;">Kami adalah tujuan terpercaya untuk produk perawatan kulit berkualitas. 
            Temukan produk yang cocok untuk kulit Anda dan mulailah perjalanan menuju kulit yang sehat dan indah bersama kami.</p>  
    </div>
    <div class="flex justify-end">
        <img class="w-2/3 rounded-lg"  src="<?php echo base_url('images/restiqa1.png'); ?>" alt="office content 1">
    </div>
</div>

    </section>

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
    
    <script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
</body>
</html>