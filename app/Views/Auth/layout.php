<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Myth:Auth</title>

    <!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?=base_url("assets/css/style.css")?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Restu -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<!-- login admin -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            padding-top: 5rem;
        }
    </style>

    <?= $this->renderSection('pageStyles') ?>
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

<?= view('App\Views\Auth\_navbar') ?>

<main role="main" class="container">
	<?= $this->renderSection('main') ?>
</main><!-- /.container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script>src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"</script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<?= $this->renderSection('pageScripts') ?>
</body>
</html>
