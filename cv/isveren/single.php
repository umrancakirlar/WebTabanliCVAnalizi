<!DOCTYPE html>
<html lang="en">


<?php
include('../functions.php');
include('../includes/public_functions.php');
include('../database/conn.php');


if (!isveren()) {
    $_SESSION['msg'] = "You must log in first";
    header('location: ../login.php');
}

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['user']);
    header("location: ../login.php");
}

$id=$_REQUEST['id']; $query="SELECT * from cvs where id='".$id."'"; $result=mysqli_query($GLOBALS["___mysqli_ston"],$query) or die ( ((is_object($GLOBALS["___mysqli_ston"]))? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ?$___mysqli_res : true)));
$row = mysqli_fetch_assoc($result);
;?>




<!-- molla/index-1.html  22 Nov 2019 09:55:06 GMT -->
<head>
    <?php include('../theme/head.php') ?>

</head>

<body>
<div class="page-wrapper">
    <?php include('../theme/isverenheader.php') ?>


    <main class="main">
        <div style="margin-bottom: 100px;" id="main_container">
            <!-- HEADER -->
            <div id="header">
                <!-- LOGOTYPE/NAME -->
                <div class="header_logotype_container">
                    <h1 class="logotype_name"><?php echo $row['ad']; ?> <span class="purple"><?php echo $row['soyad']; ?></span></h1>
                    <h2 class="logotype_occupation"><?php echo $row['title']; ?></h2>
                </div>

            </div>
            <!-- LEFT COL -->
            <div id="left_col">
                <div class="profile_frame">
                    <div class="profile_picture"></div>
                    <!-- <img src="images/javier_latorre.jpg" alt="profile picture"> -->
                </div>
                <div class="hello_content">
                    <h2>Hello!</h2>
                    <p><?php echo $row['hakkimda_yazi']; ?></p>
                </div>
                <div class="hello_content">
                    <h2>Eğitimler</h2>
                    <p class="purple">Egitim Seviyesi:</p>
                    <p><?php echo $row['egitim_seviyesi']; ?></p>
                    <p class="purple">Okudugu Üniversite:</p>
                    <p><?php echo $row['uni_ad']; ?></p>
                    <p class="purple">Okudugu Bölüm:</p>
                    <p><?php echo $row['uni_bolum']; ?></p>
                    <p class="purple">Baslangıc Yil:</p>
                    <p><?php echo $row['baslangic_yil']; ?></p>
                    <p class="purple">Mezuniyet Yil:</p>
                    <p><?php echo $row['mezuniyet_yil']; ?></p>
                    <p class="purple">Not Ortalama:</p>
                    <p><?php echo $row['ortalama']; ?></p>
                </div>

                <div class="contact_details_content">
                    <h3>İletisim Detayları</h3>
                    <p class="purple">Ulke:</p>
                    <p><?php echo $row['ulke']; ?></p>
                    <p class="purple">Sehir:</p>
                    <p><?php echo $row['sehir']; ?></p>
                    <p class="purple">Phone:</p>
                    <p><?php echo $row['ceptel']; ?></p>
                    <p class="purple">Email:</p>
                    <p><?php echo $row['email']; ?></p>
                    <p class="purple">Adress:</p>
                    <?php echo $row['adres']; ?>
                </div>
                <a href="mailto:<?php echo $row['email']; ?>" class="send_message_button">
                    <span class="cut1"></span>
                    <span class="cut2"></span>
                    <span class="content">Send me a message <span class="fontawesome-double-angle-right"></span></span>
                </a>

            </div>
            <!-- PROFILE CONTENT -->
            <div id="content_container">

                <div class="block">
                    <h2>Hakkımda</h2>
                    <p class="purple">Sigara:</p>
                    <p><?php echo $row['sigara']; ?></p>
                    <p class="purple">Seyahat Engel:</p>
                    <p><?php echo $row['seyehat_engel']; ?></p>
                    <p class="purple">Medeni Durum:</p>
                    <p><?php echo $row['medeni_durum']; ?></p>
                    <p class="purple">Esnek Calısma Saati uyumu:</p>
                    <p><?php echo $row['mesai']; ?></p>
                    <p>
                        <?php echo $row['aciklama']; ?>
                    </p>
                </div>
                <div class="horizontal_line">
                    <div class="line_left"></div>
                    <div class="left_circle"></div>
                    <div class="central_circle"></div>
                    <div class="right_circle"></div>
                    <div class="line_right"></div>
                </div>
                <div class="last block">
                    <h2>Uzmanlıklar</h2>
                    <p>  <?php echo $row['uzmanlik_alan']; ?></p>

                </div>
                <div class="horizontal_line">
                    <div class="line_left"></div>
                    <div class="left_circle"></div>
                    <div class="central_circle"></div>
                    <div class="right_circle"></div>
                    <div class="line_right"></div>
                </div>
                <div class="last block">
                    <h2>Hobilerim</h2>
                    <p>  <?php echo $row['hobi']; ?></p>

                </div>
            </div>
            <div class="clear"></div>
            <!-- FOOTER -->

        </div>

        <style>
            @import url(http://weloveiconfonts.com/api/?family=entypo|fontawesome);
            /* entypo */
            [class*="entypo-"]:before {
                font-family: 'entypo', sans-serif;
            }
            /* fontawesome */
            [class*="fontawesome-"]:before {
                font-family: 'FontAwesome', sans-serif;
            }

            /* Utils */

            .clear {
                clear: both;
            }
            .purple {
                color: #837c9a;
            }

            .block {
                margin: 25px 30px;
            }
            .block h1 {
                margin-left: -5px;
                font-weight: 200;
            }

            .last.block {
                margin-bottom: 110px;
            }

            .horizontal_list {
                margin: 0;
                padding: 0;
                list-style-type: none;
            }
            .horizontal_list li {
                float: left;
            }
            .horizontal_list li:before {
                content: none;
            }
            .horizontal_list li {
                padding-left: 0;
                text-indent: 0;
            }

            .horizontal_line{
                margin: 34px 0 0 30px;
                height: 26px;
                position: relative;
            }
            .line_left,
            .line_right{
                border-top: 1px solid #434247;
                width: 305px;
                margin-top: 13px;
            }
            .line_left{
                float: left;
            }
            .line_right {
                float: right;
            }
            .left_circle,
            .central_circle,
            .right_circle {
                background: rgb(69,68,73);
                background: rgba(255,255,255, 0.15);
                position: absolute;
                border-radius: 50px;
            }
            .left_circle,
            .right_circle {
                width: 13px;
                height: 13px;
                top: 7px;
            }
            .left_circle{
                left: 314px;
            }
            .central_circle{
                width: 26px;
                height: 26px;
                top: 0px;
                left: 322px;
            }
            .right_circle{
                left: 343px;
            }

            /* Main tags */

            body {
                background: url(http://subtlepatterns2015.subtlepatterns.netdna-cdn.com/patterns/dark_wall.png) repeat;
                margin: 0;
            }

            h1,h2,h3, h4 {
                font-family: 'Lato', Helvetica, sans-serif;
                font-weight: 300;
                color: #48DA9B;
            }


            blockquote {
                font-style: italic;
                margin: 25px 0;
                padding-left: 20px;
                border-left: 2px solid #48DA9B;
            }

            a:focus {
                outline: none;
            }

            /* Containers size */

            #main_container {
                width: 960px;
                margin: 0 auto;
            }
            #header {
                height: 130px;
                border-bottom: 1px solid #403F44;
            }
            .header_logotype_container {
                width: 260px;
                height: 130px;
                border-right: 1px solid #403F44;
                float: left;
            }
            .header_menu_container {
                height: 130px;
                width: 699px;
                float: left;
            }
            .header_menu_container a {
                font-family: 'Lato', Helvetica, sans-serif;
            }
            #left_col {
                width: 260px;
                float: left;
            }
            #content_container {
                width: 699px;
                border-left: 1px solid #403F44;
                float: left;
            }
            #footer {
                width: 960px;
                height: 60px;
                border-top: 1px solid #403F44;
                display: inline-block;
            }

            /* HEADER */

            .logotype_name{
                text-transform: uppercase;
                font-size: 32px;
                margin: 43px 0 0;
            }
            .logotype_occupation{
                text-transform: uppercase;
                margin-top: 5px;
                color: #5ce2af;
                font-size: 14px;
                letter-spacing: 2px;
                padding-left: 7px;
            }

            .download_print_buttons {
                width: 225px;
                height: 45px;
                float: right;
            }
            .download_print_buttons a {
                text-decoration: none;
                font-size: 12px;
                font-family: 'Lato', Helvetica, sans-serif;
                font-style: italic;
                line-height: 45px;
                padding: 16px 17px;
                background: #353638;
            }


            .header_menu {
                width: 699px;
                margin-top: 40px;
                margin-left: 5px;
            }

            .header_menu a.no_border{
                border-left: none;
            }
            .header_menu a:hover {
                color: #837c9a;
            }

            /* LEFT NAV */

            #left_nav h2 {
                margin: 0;
                font-size: 24px;
            }

            .profile_frame{
                width: 230px;
                height: 260px;
                background: black;
                border: 1px solid #403F44;
                margin-top: 30px;
            }
            .profile_picture{
                width: 210px;
                height: 240px;
                margin:10px;
                background: url(//s3-us-west-2.amazonaws.com/s.cdpn.io/86033/profile/profile-512_3.jpg) 100% /210px no-repeat;
            }

            .hello_content,
            .contact_details_content {
                margin-top: 25px;
            }

            .hello_content{
                width: 230px;
            }
            .contact_details_content h2 + p.purple{
                margin-top: 10px;
            }
            .contact_details_content p{
                margin: 0;
            }
            .contact_details_content p.purple{
                margin-top: 25px;
            }

            .send_message_button,
            .special_button {
                margin-top: 25px;
                display: block;
                background: #48DA9B;
                width: 230px;
                height: 50px;
                position: relative;
                z-index: 1;
            }
            .cut1:after {
                content: "";
                position: absolute;
                bottom: -19px;
                left: -20px;
                width: 30px;
                height: 30px;
                z-index: 9;
                background: url(http://subtlepatterns2015.subtlepatterns.netdna-cdn.com/patterns/dark_wall.png) repeat;
                transform: rotate(45deg);
            }
            .cut2:before {
                content: "";
                position: absolute;
                top: -19px;
                right: -20px;
                width: 30px;
                height: 30px;
                z-index: 9;
                background: url(http://subtlepatterns2015.subtlepatterns.netdna-cdn.com/patterns/dark_wall.png) repeat;
                transform: rotate(45deg);
            }
            .content {
                text-align: center;
                color: #04080b;
                width: 100%;
                height: 40px;
                position: absolute;
                z-index: 2;
                font: 18px 'Lato', Arial, sans-serif;
                margin: 0;
                padding: 16px 0 0;
                top: -4px;
                bottom: 10px;
                border-top: 1px solid #403F44;
                border-bottom: 1px solid #403F44;
            }
            .send_message_button:hover,
            .special_button:hover {
                background: #29C782;
            }

            .get_social_content {
                margin-top: 15px;
            }
            .get_social_content h2{
                margin-bottom: 8px;
            }
            .social_icons {
                margin-left: -8px;
            }
            .social_icons a {
                font-size: 35px;
                text-decoration: none;
                color: #000507;
                padding: 0;
                padding: 0 5px;
            }



            /* Profile Content */

            .profile_quote {
                position: relative;
                /* margin-left: 5px; */
            }
            .profile_quote p {
                font-size: 17px;
                width: 455px;
            }
            .profile_quote  .entypo-quote {
                color: #3d3a41;
                font-size: 80px;
                font-style: normal;
                position: absolute;
                top: -20px;
                right: 70px;
                cursor: default;
            }

            .philosophy_content {
                margin-top: 20px;
            }
            .philosophy_content p {
                margin: 0;
                width: 370px;
                float: left;
            }
            .philosophy_content ul {
                float: left;
                padding-left: 40px;
            }
        </style>
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