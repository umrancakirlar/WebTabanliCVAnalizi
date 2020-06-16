<!DOCTYPE html>
<html lang="en">


<?php
include('../functions.php');
include('../db.php');
if (!isarayan()) {
    $_SESSION['msg'] = "You must log in first";
    header('location: ../login.php');
}

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['user']);
    header("location: ../login.php");
}

$userid = $_SESSION['user']['id'];





$sql = $conn->prepare("SELECT * FROM cvs WHERE user_id='$userid' LIMIT 1");
$sql->execute();
$result = $sql->get_result();
if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
}
else{
    $sql = $conn->prepare("INSERT INTO cvs (user_id)
VALUES ('$userid')");
    $sql->execute();
}
$conn->close();

?>

<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<!-- molla/index-1.html  22 Nov 2019 09:55:06 GMT -->
<head>
    <?php include('../theme/head.php') ?>
</head>

<body>
<div class="page-wrapper">
    <?php include('../theme/isarayanheader.php') ?>






    <main class="main">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form method="post" action="cvkaydet.php">

                        <?php echo display_error(); ?>
                        <h3 style="margin-top: 15px;" class="text-left">Kişisel Bilgiler</h3>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Ad:</label>
                                    <input class="form-control"  name="ad" value="<?php echo $row['ad']; ?>" type="text" placeholder="Ad giriniz" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Soyad:</label>
                                    <input class="form-control"  name="soyad" value="<?php echo $row['soyad']; ?>" type="text" placeholder="Soyadı giriniz" >
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">İs Ünvanınız:</label>
                                    <input class="form-control"  name="title" value="<?php echo $row['title']; ?>" type="text" placeholder="Ünvan giriniz" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input class="form-control"  name="email" value="<?php echo $row['email']; ?>" type="email" placeholder="Email giriniz" >
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Yayınlanıcak Kategori</label>
                            <select class="form-control" name="category" >
                                <?php
                                require("../database/db_connect.php");
                                $sql="SELECT * FROM topics ";
                                if ($result=mysqli_query($con,$sql))
                                {
                                    //count number of rows in query result
                                    $rowcount=mysqli_num_rows($result);
                                    //if no rows returned show no categories alert
                                    if ($rowcount==0) {
                                        # code...
                                        echo 'No Categories';
                                    }
                                    //if there are rows available display all the results
                                    foreach ($result as $blog_categories => $category) {
                                        # code...
                                        echo '
                                 
                                  <option value="'.$category['id'].'">'.$category['name'].'</option>}  
                                
                               
			
			';
                                    }
                                }

                                mysqli_close($con);
                                ?>

                            </select>

                            <div style="margin-top: 15px;" class="row">
                                <div class="col-md-6">
                                    <label for="exampleInputEmail1">Bilinen Diller</label>
                                    <?php

                                    if (  $row['php'] ==1 )
                                    {
                                        echo '
                                <div class="checkbox">
                                <label>
                              
                                <input type="text" style="width: 25px;" checked name="php"  value="0"> <a style="color: whitesmoke;" class="btn btn-success">php dillere ekli</a> </label>
                                </div>';
                                    }
                                    else{
                                        echo '<div class="checkbox">
 
                                <label><input type="text" style="width: 25px;" name="php"   value="1"> <a style="color: whitesmoke;" class="btn btn-danger">php dillere degil</a></label>
                            </div>';
                                    }

                                    ?>
                                    <?php

                                    if (  $row['csharp'] ==1 )
                                    {
                                        echo '
                                <div class="checkbox">
                                <label>
                              
                                <input type="text" style="width: 25px;" checked name="csharp"  value="0"> <a style="color: whitesmoke;" class="btn btn-success">c# dillere ekli</a> </label>
                                </div>';
                                    }
                                    else{
                                        echo '<div class="checkbox">
 
                                <label><input type="text" style="width: 25px;" name="csharp"   value="1"> <a style="color: whitesmoke;" class="btn btn-danger">c# dillere degil</a></label>
                            </div>';
                                    }

                                    ?>
                                    <?php

                                    if (  $row['asp'] ==1 )
                                    {
                                        echo '
                                <div class="checkbox">
                                <label>
                              
                                <input type="text" style="width: 25px;" checked name="asp"  value="0"> <a style="color: whitesmoke;" class="btn btn-success">asp dillere ekli</a> </label>
                                </div>';
                                    }
                                    else{
                                        echo '<div class="checkbox">
 
                                <label><input type="text" style="width: 25px;" name="asp"   value="1"> <a style="color: whitesmoke;" class="btn btn-danger">asp dillere degil</a></label>
                            </div>';
                                    }

                                    ?>
                                    <?php

                                    if (  $row['mysql'] ==1 )
                                    {
                                        echo '
                                <div class="checkbox">
                                <label>
                              
                                <input type="text" style="width: 25px;" checked name="mysql"  value="0"> <a style="color: whitesmoke;" class="btn btn-success">mysql dillere ekli</a> </label>
                                </div>';
                                    }
                                    else{
                                        echo '<div class="checkbox">
 
                                <label><input type="text" style="width: 25px;" name="mysql"   value="1"> <a style="color: whitesmoke;" class="btn btn-danger">mysql dillere degil</a></label>
                            </div>';
                                    }

                                    ?>
                                    <?php

                                    if (  $row['java'] ==1 )
                                    {
                                        echo '
                                <div class="checkbox">
                                <label>
                              
                                <input type="text" style="width: 25px;" checked name="java"  value="0"> <a style="color: whitesmoke;" class="btn btn-success">java dillere ekli</a> </label>
                                </div>';
                                    }
                                    else{
                                        echo '<div class="checkbox">
 
                                <label><input type="text" style="width: 25px;" name="java"   value="1"> <a style="color: whitesmoke;" class="btn btn-danger">java dillere degil</a></label>
                            </div>';
                                    }

                                    ?>
                                </div>
                            </div>






                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Cep Telefon</label>
                                    <input class="form-control"  name="ceptel" value="<?php echo $row['ceptel']; ?>" type="text" placeholder="Cep telefon giriniz" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Adres</label>
                                    <input class="form-control"  name="adres" value="<?php echo $row['adres']; ?>" type="text" placeholder="Adres giriniz" >
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Ulke</label>
                                    <input class="form-control"  name="ulke" value="<?php echo $row['ulke']; ?>" type="text" placeholder="Ulke" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Sehir </label>
                                    <input class="form-control"  name="sehir" value="<?php echo $row['sehir']; ?>" type="text" placeholder="sehir" >
                                </div>
                            </div>
                        </div>
                        <hr>
                        <label>Hakkımda Yazı</label>
                        <textarea class="ckeditor" name="hakkimda_yazi"><?php echo $row['hakkimda_yazi']; ?></textarea>
                        <hr>
                        <h3 style="margin-top: 15px;" class="text-left">Eğitim Bilgiler</h3>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Eğitim Seviyesi</label>
                                    <input class="form-control"  name="egitim_seviyesi" value="<?php echo $row['egitim_seviyesi']; ?>" type="text" placeholder="Eğitim Seviyesi giriniz" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Üniversite Adı</label>
                                    <input class="form-control"  name="uni_ad" value="<?php echo $row['uni_ad']; ?>"  type="text" placeholder="Üniversite giriniz" >
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Üniversite Bölüm</label>
                                    <input class="form-control"  name="uni_bolum" value="<?php echo $row['uni_bolum']; ?>" type="text" placeholder="Bölüm giriniz" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Üniversite Baslangic yil</label>
                                    <input class="form-control"  name="baslangic_yil" value="<?php echo $row['baslangic_yil']; ?>" type="date"  >
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Üniversite Mezuniyet yil</label>
                                    <input class="form-control"  name="mezuniyet_yil" value="<?php echo $row['mezuniyet_yil']; ?>" type="date"  >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Üniversite Ortalama</label>
                                    <input class="form-control"  name="ortalama" value="<?php echo $row['ortalama']; ?>" type="text" placeholder="ortalama giriniz" >
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Açıklama</label>
                                <textarea class="ckeditor"  name="aciklama"><?php echo $row['aciklama']; ?></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Uzmanlık Alan</label>
                                <textarea class="ckeditor"  name="uzmanlik_alan"><?php echo $row['uzmanlik_alan']; ?></textarea>
                            </div>
                        </div>
                        <hr>
                        <h3 style="margin-top: 15px;" class="text-left">Hobi</h3>
                        <hr>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Hobi</label>
                                <textarea class="ckeditor"  name="hobi"><?php echo $row['hobi']; ?></textarea>
                            </div>
                        </div>
                        <hr>
                        <h3 style="margin-top: 15px;" class="text-left">Kişisel Bilgiler</h3>
                        <hr>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Website</label>
                                    <input class="form-control" value="<?php echo $row['website']; ?>"  name="website" type="text" placeholder="Website giriniz"  >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">twitter Hesap</label>
                                    <input class="form-control" value="<?php echo $row['twitter_hesap']; ?>"  name="twitter_hesap" type="text" placeholder="twitter hesap" >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Sigara</label>
                                    <input class="form-control"  value="<?php echo $row['sigara']; ?>"  name="sigara" type="text" placeholder="sigara içme durumunuz ?" >
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Seyehat Durumnu</label>
                                    <input class="form-control"  value="<?php echo $row['seyehat_engel']; ?>" name="seyehat_engel" type="text" placeholder="Seyehat Durumunuzu giriniz"  >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Medeni Durum</label>
                                    <input class="form-control" value="<?php echo $row['medeni_durum']; ?>"  name="medeni_durum" type="text" placeholder="Medeni Durum" >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Mesai</label>
                                    <input class="form-control"  value="<?php echo $row['mesai']; ?>"  name="mesai" type="text" placeholder="Mesai durumunuz ?" >
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <input type="submit" class="btn btn-warning" name="save" value="submit">
                        </div>


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
<script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>

<script>
    var content = CKEDITOR.instances.CMSeditor.getData();
    editor.getData();
</script>
</body>


<!-- molla/index-1.html  22 Nov 2019 09:55:32 GMT -->
</html>