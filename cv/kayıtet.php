<?php
//veritabanı bağlantımızı yaptık
include('config.php');
//veritabanı bağlantısı sağlanmaz ise hata verdirdik


//kayit.php de ki formdan gelen kuladi ve sifre post verilerini $kuladi ve $sifre değişkenlerine eşitledik
$kuladi = $_POST['email'];
$sifre = md5($_POST['password']);

//Kayıt işlemini gerçekleştiriyoruz veritabanındaki kullaniciadi ve sifre yi formdan gelen değişkene atadığımız verilere eşitliyoruz
$kayit = "INSERT INTO users(email, password,role) VALUES ('$kuladi','$sifre','isarayan')";

$sonuc=mysqli_query($conn,$kayit);


header('location: login.php');

?>