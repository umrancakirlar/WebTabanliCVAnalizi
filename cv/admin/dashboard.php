<!DOCTYPE html>
<html lang="en">

<?php
include('../functions.php');

if (!isAdmin()) {
    $_SESSION['msg'] = "You must log in first";
    header('location: ../login.php');
}

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['user']);
    header("location: ../login.php");
}

?>





<!-- molla/index-1.html  22 Nov 2019 09:55:06 GMT -->
<head>
    <?php include('../theme/head.php') ?>
</head>

<body>
<div class="page-wrapper">
    <?php include('../theme/adminheader.php') ?>


    <main class="main">
      <div class="container">
          <div class="row">
              <div style="margin-top: 50px;" class="col-md-12 text-center">
                  <?php if (isset($_SESSION['success'])) : ?>
                      <div class="error success" >
                          <h3>
                              <?php
                              echo $_SESSION['success'];
                              unset($_SESSION['success']);
                              ?>
                          </h3>
                      </div>
                  <?php endif ?>
              </div>
          </div>

      </div>




    </main><!-- End .main -->
    <?php include('../theme/footer.php') ?>

</div><!-- End .page-wrapper -->
<button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

<!-- Mobile Menu -->
<div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

<?php include('../theme/mobilemenu.php') ?>


<!-- Plugins JS File -->
<?php include('../theme/js.php') ?>
</body>


<!-- molla/index-1.html  22 Nov 2019 09:55:32 GMT -->
</html>