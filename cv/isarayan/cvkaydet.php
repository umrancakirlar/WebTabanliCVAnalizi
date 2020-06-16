<?php
include('../functions.php');

if (!isarayan()) {
    $_SESSION['msg'] = "You must log in first";
    header('location: ../login.php');
}

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['user']);
    header("location: ../login.php");
}

?>
<?php


try{
    $pdo = new PDO("mysql:host=localhost;dbname=cv", "root", "");
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    die("ERROR: Could not connect. " . $e->getMessage());
}

// Attempt insert query execution
try{
    $userid = $_SESSION['user']['id'];

        $pdo_statement=$pdo->prepare("update cvs set
        category='" . $_POST[ 'category' ] . "',
        ad='" . $_POST[ 'ad' ] . "', soyad='" . $_POST[ 'soyad' ]. "', title='".$_POST['title']."',email='" . $_POST[ 'email' ] . "',ceptel='" . $_POST[ 'ceptel' ] . "',adres='" . $_POST[ 'adres' ] . "',
         hakkimda_yazi='" . $_POST[ 'hakkimda_yazi' ] . "',egitim_seviyesi='" . $_POST[ 'egitim_seviyesi' ] . "',ulke='" . $_POST[ 'ulke' ] . "',sehir='" . $_POST[ 'sehir' ] . "',uni_ad='" . $_POST[ 'uni_ad' ] . "',uni_bolum='" . $_POST[ 'uni_bolum' ] . "',
         baslangic_yil='" . $_POST[ 'baslangic_yil' ] . "',mezuniyet_yil='" . $_POST[ 'mezuniyet_yil' ] . "',ortalama='" . $_POST[ 'ortalama' ] . "',aciklama='" . $_POST[ 'aciklama' ] . "',uzmanlik_alan='" . $_POST[ 'uzmanlik_alan' ] . "'
        ,hobi='" . $_POST[ 'hobi' ] . "',website='" . $_POST[ 'website' ] . "',twitter_hesap='" . $_POST[ 'twitter_hesap' ] . "',sigara='" . $_POST[ 'sigara' ] . "',seyehat_engel='" . $_POST[ 'seyehat_engel' ] . "'
        ,medeni_durum='" . $_POST[ 'medeni_durum' ] . "',mesai='" . $_POST[ 'mesai' ] . "',php='" . $_POST[ 'php' ] . "',asp='" . $_POST[ 'asp' ] . "',csharp='" . $_POST[ 'csharp' ] . "',mysql='" . $_POST[ 'mysql' ] . "'
        ,java='" . $_POST[ 'java' ] . "'
         where user_id=" .$userid);
        $result = $pdo_statement->execute();
        if($result) {
            header('location: ../isarayan/ozgecmis.php');
        }

} catch(PDOException $e){
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}

// Close connection
unset($pdo);

?>