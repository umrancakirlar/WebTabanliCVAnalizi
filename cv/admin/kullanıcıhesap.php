<!DOCTYPE html>
<html lang="en">

<?php
include('../functions.php');

include('../server.php');

require_once("../db.php");

$sql = "SELECT * FROM users";
$result = $conn->query($sql);
$conn->close();

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
        <?php if (isset($_SESSION['message'])): ?>
            <div class="msg">
                <?php
                echo $_SESSION['message'];
                unset($_SESSION['message']);
                ?>
            </div>
        <?php endif ?>
        <div class="container">
            <div class="row">
                <div style="margin-top: 50px;" class="col-md-12 ">




                    <table class="table table-wishlist table-mobile ">
                        <thead>
                        <tr>
                            <th>name</th>
                            <th>surname</th>
                            <th>email</th>
                            <th>role</th>
                            <th></th>
                        </tr>
                        </thead>

                        <tbody>
                        <?php
                        if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            ?>
                        <tr>
                            <td class="product-col">
                                <div class="product">

                                    <h3 class="product-title">
                                        <a href="#"><?php echo $row['first_name']; ?></a>
                                    </h3><!-- End .product-title -->
                                </div><!-- End .product -->
                            </td>
                            <td class="product-col">
                                <div class="product">

                                    <h3 class="product-title">
                                        <a href="#"><?php echo $row['last_name']; ?></a>
                                    </h3><!-- End .product-title -->
                                </div><!-- End .product -->
                            </td>
                            <td class="product-col">
                                <div class="product">

                                    <h3 class="product-title">
                                        <a href="#"><?php echo $row['email']; ?></a>
                                    </h3><!-- End .product-title -->
                                </div><!-- End .product -->
                            </td>
                            <?php if ($row['role'] == 'admin')
                            {
                                echo '  <td class="stock-col"><span class="text-warning">Admin</span></td>';
                            }
                            elseif ($row['role'] == 'isveren')
                            {
                                 echo '  <td class="stock-col"><span class="text-danger">İs Veren</span></td>';
                            }
                            elseif ($row['role'] == 'isarayan')
                            {
                                echo '  <td class="stock-col"><span class="text-success">İs Arayan</span></td>';
                            }
                            ?>
                            <td class="action-col">
                                    <a href="kulform.php?id=<?php echo $row['id']; ?>" class="btn btn-block btn-outline-primary-2" >Duzenle</a>
                            </td>
                            <td class="remove-col">
                                <a href="kuldelete.php?id=<?php echo $row['id']; ?>" class="text-danger"><i class="icon-close"></i></a>
                            </td>
                        </tr>
                            <?php
                        }
                        }
                        ?>

                        </tbody>
                    </table>




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