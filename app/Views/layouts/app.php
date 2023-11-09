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


</head>
<body>
    <header>
        <div class="header-content">
            <img src="<?= base_url("assets/img/logo.jpg") ?>" alt="Logo Perusahaan" width="90px">
            <div class="header-text">
            <h2>RESTIQA SKINCARE</h2>
            </div>
            <nav>
            <a href="#">Beranda</a>
            <a href="#">Tentang</a>
            <a href="#">Kontak</a>
            </nav>
        </div>
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