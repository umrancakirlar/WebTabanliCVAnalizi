<!DOCTYPE html>
<html lang="en">

<?php
include('functions.php');


?>


<!-- molla/index-1.html  22 Nov 2019 09:55:06 GMT -->
<head>
<?php include('theme/head.php') ?>
</head>

<body>
<div class="page-wrapper">
    <?php include('theme/header.php') ?>


    <main class="main">
        <div class="intro-slider-container">
            <div class="owl-carousel owl-simple owl-light owl-nav-inside" data-toggle="owl" data-owl-options='{"nav": false}'>
                <div class="intro-slide" style="background-image: url(assets/images/demos/demo-2/slider/slide-1.jpg);">
                    <div class="container intro-content">
                        <h2 class="intro-subtitle">İş mi Ariyosun</h2><!-- End .h3 intro-subtitle -->
                        <h1 class="intro-title">Hemen bize Katıl</h1><!-- End .intro-title -->

                        <a href="isarayan/isarayan.php" class="btn btn-primary">
                            <span>Giriş</span>
                            <i class="icon-long-arrow-right"></i>
                        </a>
                    </div><!-- End .container intro-content -->
                </div><!-- End .intro-slide -->

                <div class="intro-slide" style="background-image: url(assets/images/demos/demo-2/slider/slide-2.jpg);">
                    <div class="container intro-content">

                        <h2 class="intro-subtitle">Aradıgın Elemanı bulamıyor musun ? </h2><!-- End .h3 intro-subtitle -->
                        <h1 class="intro-subtitle">Hemen bize ulaş hesap tanımlıyalım </h1>
                        <a href="iletisim.php" class="btn btn-primary">
                            <span>Bize Ulaş</span>
                            <i class="icon-long-arrow-right"></i>
                        </a>
                    </div><!-- End .container intro-content -->
                </div><!-- End .intro-slide -->


            </div><!-- End .owl-carousel owl-simple -->

            <span class="slider-loader text-white"></span><!-- End .slider-loader -->
        </div><!-- End .intro-slider-container -->






    </main><!-- End .main -->
    <?php include('theme/footer.php') ?>

</div><!-- End .page-wrapper -->
<button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

<!-- Mobile Menu -->
<div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

<?php include('theme/mobilemenu.php') ?>


<!-- Plugins JS File -->
<?php include('theme/js.php') ?>
</body>


<!-- molla/index-1.html  22 Nov 2019 09:55:32 GMT -->
</html>