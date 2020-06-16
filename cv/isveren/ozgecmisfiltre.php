<!DOCTYPE html>
<html lang="en">


<?php
include('../functions.php');
include('../includes/public_functions.php');
include('../database_connection.php');
if (!isveren()) {
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
    <script src="../js/jquery-1.10.2.min.js"></script>
    <script src="../js/jquery-ui.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link href = "../css/jquery-ui.css" rel = "stylesheet">
    <!-- Custom CSS -->
    <link href="../css/style.css" rel="stylesheet">
</head>

<body>
<div class="page-wrapper">
    <?php include('../theme/isverenheader.php') ?>


    <main class="main">
        <div class="container">


            <div class="row">
                <div style="margin-top: 50px;" class="col-md-12 text-center">



                            <div class="col-md-3">

                                <div class="list-group">
                                    <h3>Sehir</h3>
                                    <div style="height: 180px; overflow-y: auto; overflow-x: hidden;">
                                        <?php
                                        $query =   " select  sehir from cvs where yayinla=1";
                                        $statement = $connect->prepare($query);
                                        $statement->execute();
                                        $result = $statement->fetchAll();
                                        foreach($result as $row)
                                        {
                                            ?>
                                            <div class="list-group-item checkbox">
                                                <label><input type="checkbox" class="common_selector sehir" value="<?php echo $row['sehir']; ?>"  > <?php echo $row['sehir']; ?></label>
                                            </div>
                                            <?php
                                        }

                                        ?>
                                    </div>
                                </div>

                                <div class="list-group">
                                    <h3>Ortalama</h3>
                                    <div style="height: 180px; overflow-y: auto; overflow-x: hidden;">
                                        <?php
                                        $query =   " select DISTINCT  ortalama from cvs where yayinla=1";
                                        $statement = $connect->prepare($query);
                                        $statement->execute();
                                        $result = $statement->fetchAll();
                                        foreach($result as $row)
                                        {
                                            ?>
                                            <div class="list-group-item checkbox">
                                                <label><input type="checkbox" class="common_selector ortalama" value="<?php echo $row['ortalama']; ?>"  > <?php echo $row['ortalama']; ?></label>
                                            </div>
                                            <?php
                                        }

                                        ?>
                                    </div>
                                </div>
                                <div class="list-group">
                                    <h3>Kodlama Dilleri</h3>
                                    <div style="height: 180px; overflow-y: auto; overflow-x: hidden;">
                                        <?php
                                        $query =   " select DISTINCT  php from cvs where php=1";
                                        $statement = $connect->prepare($query);
                                        $statement->execute();
                                        $result = $statement->fetchAll();
                                        foreach($result as $row)
                                        {
                                            ?>
                                            <div class="list-group-item checkbox">
                                                <label><input type="checkbox" class="common_selector php" value="<?php echo $row['php']; ?>"  >php</label>
                                            </div>
                                            <?php
                                        }

                                        ?>
                                    </div>

                                </div>
                                <div class="list-group">

                                    <div style="height: 180px; margin-top: -145px; overflow-y: auto; overflow-x: hidden;">
                                        <?php
                                        $query =   " select DISTINCT  java from cvs where java=1";
                                        $statement = $connect->prepare($query);
                                        $statement->execute();
                                        $result = $statement->fetchAll();
                                        foreach($result as $row)
                                        {
                                            ?>
                                            <div class="list-group-item checkbox">
                                                <label><input type="checkbox" class="common_selector java" value="<?php echo $row['java']; ?>"  >java</label>
                                            </div>
                                            <?php
                                        }

                                        ?>
                                    </div>

                                </div>

                                <div class="list-group">

                                    <div style="height: 180px; margin-top: -145px; overflow-y: auto; overflow-x: hidden;">
                                        <?php
                                        $query =   " select DISTINCT  asp from cvs where asp=1";
                                        $statement = $connect->prepare($query);
                                        $statement->execute();
                                        $result = $statement->fetchAll();
                                        foreach($result as $row)
                                        {
                                            ?>
                                            <div class="list-group-item checkbox">
                                                <label><input type="checkbox" class="common_selector asp" value="<?php echo $row['asp']; ?>"  >asp</label>
                                            </div>
                                            <?php
                                        }

                                        ?>
                                    </div>

                                </div>

                                <div class="list-group">

                                    <div style="height: 180px; margin-top: -145px; overflow-y: auto; overflow-x: hidden;">
                                        <?php
                                        $query =   " select DISTINCT  csharp from cvs where csharp=1";
                                        $statement = $connect->prepare($query);
                                        $statement->execute();
                                        $result = $statement->fetchAll();
                                        foreach($result as $row)
                                        {
                                            ?>
                                            <div class="list-group-item checkbox">
                                                <label><input type="checkbox" class="common_selector csharp" value="<?php echo $row['csharp']; ?>"  >csharp</label>
                                            </div>
                                            <?php
                                        }

                                        ?>
                                    </div>

                                </div>

                                <div class="list-group">

                                    <div style="height: 180px; margin-top: -145px; overflow-y: auto; overflow-x: hidden;">
                                        <?php
                                        $query =   " select DISTINCT  mysql from cvs where mysql=1";
                                        $statement = $connect->prepare($query);
                                        $statement->execute();
                                        $result = $statement->fetchAll();
                                        foreach($result as $row)
                                        {
                                            ?>
                                            <div class="list-group-item checkbox">
                                                <label><input type="checkbox" class="common_selector mysql" value="<?php echo $row['mysql']; ?>"  >mysql</label>
                                            </div>
                                            <?php
                                        }

                                        ?>
                                    </div>

                                </div>

                            </div>

                            <div class="col-md-9">
                                <br />
                                <div class="row filter_data">

                                </div>
                            </div>
                        </div>

                    </div>
                    <style>
                        #loading
                        {
                            text-align:center;
                            background: url('../loader.gif') no-repeat center;
                            height: 150px;
                        }
                    </style>

                    <script>
                        $(document).ready(function(){

                            filter_data();

                            function filter_data()
                            {
                                $('.filter_data').html('<div id="loading" style="" ></div>');
                                var action = 'fetch_data';

                                var sehir = get_filter('sehir');
                                var ortalama = get_filter('ortalama');
                                var php = get_filter('php');
                                var java = get_filter('java');
                                var asp = get_filter('asp');
                                var csharp = get_filter('csharp');
                                var mysql = get_filter('mysql');
                                $.ajax({
                                    url:"fetch_data.php",
                                    method:"POST",
                                    data:{action:action, sehir:sehir, ortalama:ortalama, php:php, java:java , asp:asp , csharp:csharp, mysql:mysql },
                                    success:function(data){
                                        $('.filter_data').html(data);
                                    }
                                });
                            }

                            function get_filter(class_name)
                            {
                                var filter = [];
                                $('.'+class_name+':checked').each(function(){
                                    filter.push($(this).val());
                                });
                                return filter;
                            }

                            $('.common_selector').click(function(){
                                filter_data();
                            });



                        });
                    </script>




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