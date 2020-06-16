
<!DOCTYPE html>
<html lang="en">

<?php include('functions.php') ?>

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
                                <a class="nav-link active" id="register-tab-2" data-toggle="tab" href="#register-2" role="tab" aria-controls="register-2" aria-selected="true">Register</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="register-2" role="tabpanel" aria-labelledby="register-tab-2">
                                <div class="row">
                                    <div class="col-md-12 well">
                                        <h4>Register</h4>

                                        <form action="kayıtet.php" method="post">

                                            <div class="form-group">
                                                <label for="">Email</label>
                                                <input type="email" name="email" class="form-control"/>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Password</label>
                                                <input type="password" name="password" class="form-control"/>
                                            </div>
                                            <div class="form-group">
                                                <input type="submit" name="btnRegister" class="btn btn-primary" value="Register"/>
                                            </div>
                                        </form>
                                    </div>
                                </div>
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