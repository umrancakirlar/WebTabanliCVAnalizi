
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




        <div class="login-page bg-image pt-8 pb-8 pt-md-12 pb-md-12 pt-lg-17 pb-lg-17" style="background-image: url('assets/images/backgrounds/5206.jpg')">
            <div class="container">
                <div class="form-box">
                    <div class="form-tab">
                        <ul class="nav nav-pills nav-fill" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link" id="signin-tab-2" data-toggle="tab" href="#signin-2" role="tab" aria-controls="signin-2" aria-selected="false">Giriş</a>
                            </li>

                        </ul>
                        <div class="tab-content">
                            <?php
                            if(isset($errorMsg))
                            {
                                echo '<div class="alert alert-danger">';
                                echo $errorMsg;
                                echo '</div>';
                                unset($errorMsg);
                            }
                            ?>
                            <div class="tab-pane fade show active" id="signin-2" role="tabpanel" aria-labelledby="signin-tab-2">


                                <form method="post" action="login.php">

                                    <?php echo display_error(); ?>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input class="form-control"  name="email" type="email" placeholder="Enter email" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input class="form-control" type="password" name="password">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn" name="login_btn">Login</button>
                                    </div>
                                    <p>
                                        Hesabın yok mu ?<a href="register.php"> Kayıt Ol</a>
                                    </p>
                                </form>

                            </div><!-- .End .tab-pane -->
                        </div><!-- End .tab-content -->
                    </div><!-- End .form-tab -->
                </div><!-- End .form-box -->
            </div><!-- End .container -->
        </div><!-- End .login-page section-bg -->

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