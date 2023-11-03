<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaksi</title>
    <link rel="stylesheet" href="<?=base_url("assets/css/style.css")?>">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

    <div class="container">
      <h1>DAFTAR TRANSAKSI</h1>
    </div>

    <table>
      <tr>
        <th>Id Transaksi</th>
        <th>Id User</th>
        <th>Tanggal</th>
        <th>Total</th>
      </tr>
      <tr>
        <td>123455</td>
        <td>Ika123</td>
        <td>11-1-2023</td>
        <td>300.0000</td>
      </tr>
      <tr>
        <td>233455</td>
        <td>Restu223</td>
        <td>11-2-2023</td>
        <td>150.0000</td>
      </tr>
      <tr>
        <td>382455</td>
        <td>Iqbal323</td>
        <td>11-2-2023</td>
        <td>200.0000</td>
      </tr>
    </table>

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
</body>
</html>