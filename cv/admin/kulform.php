<!DOCTYPE html>
<html lang="en">

<?php
include('../functions.php');

include('../server.php');

require_once("../db.php");


if (isset($_POST['submit'])) {
    $sql = $conn->prepare("UPDATE users SET last_name=? , first_name=? , email=?  WHERE id=?");
    $last_name =$_POST['last_name'];
    $first_name = $_POST['first_name'];
    $email= $_POST['email'];
    $sql->bind_param("sssi",$last_name, $first_name, $email,$_GET["id"]);
    if($sql->execute()) {
        $success_message = "Edited Successfully";
    } else {
        $error_message = "Problem in Editing Record";
    }

}

$sql = $conn->prepare("SELECT * FROM users WHERE id=?");
$sql->bind_param("i",$_GET["id"]);
$sql->execute();
$result = $sql->get_result();
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
}
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



                    <?php if(!empty($success_message)) { ?>
                        <div class="success message"><?php echo $success_message; ?></div>
                    <?php } if(!empty($error_message)) { ?>
                        <div class="error message"><?php echo $error_message; ?></div>
                    <?php } ?>
                    <form name="frmUser" method="post" action="">
                        <div class="button_link"><a href="kullanıcıhesap.php" >Geri Dön</a></div>
                        <table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tbl-qa">
                            <thead>
                            <tr>
                                <th colspan="2" class="table-header">Kullanıcı Düzenle</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="table-row">
                                <td><label>adı</label></td>
                                <td><input type="text" name="first_name" class="txtField" value="<?php echo $row["first_name"]?>"></td>
                            </tr>
                            <tr class="table-row">
                                <td><label>Soyadı</label></td>
                                <td><input type="text" name="last_name" class="txtField" value="<?php echo $row["last_name"]?>"></td>
                            </tr>
                            <tr class="table-row">
                                <td><label>Email</label></td>
                                <td><input type="text" name="email" class="txtField" value="<?php echo $row["email"]?>"></td>
                            </tr>

                            <tr class="table-row">
                                <td colspan="2"><input type="submit"  name="submit" value="Submit" class="demo-form-submit"></td>
                            </tr>
                            </tbody>
                        </table>
                    </form>





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


<?php
require_once("../db.php");?>
<html>
<head>
    <link href="style.css" rel="stylesheet" type="text/css" />
    <style>
        .tbl-qa{border-spacing:0px;border-radius:4px;border:#6ab5b9 1px solid;}
    </style>
    <title>employee edit </title>
</head>
<body>

</body>
</html>