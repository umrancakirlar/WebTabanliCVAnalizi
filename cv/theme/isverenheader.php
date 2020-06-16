

<header class="header header-intro-clearance header-3">
    <div class="header-top">
        <div class="container">
            <div class="header-left">
                <a href="tel:#"><i class="icon-phone"></i>Call: +0123 456 789</a>
            </div><!-- End .header-left -->

            <div class="header-right">


            </div><!-- End .header-right -->

        </div><!-- End .container -->
    </div><!-- End .header-top -->

    <div class="header-middle">
        <div class="container">
            <div class="header-left">
                <button class="mobile-menu-toggler">
                    <span class="sr-only">Toggle mobile menu</span>
                    <i class="icon-bars"></i>
                </button>

                <a href="/index.php" class="logo">
                    <img src="../assets/images/demos/demo-3/logo.png" alt="Molla Logo" width="105" height="25">
                </a>
            </div><!-- End .header-left -->

            <div class="header-center">

                <div class="header-search header-search-extended header-search-visible d-none d-lg-block">

                    <form action="/isveren/sonuc.php" method="get">
                        <div class="header-search-wrapper search-wrapper-wide">
                            <label for="q" class="sr-only">Search</label>
                            <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
                            <input type="search" class="form-control" name="q" id="q" placeholder="Eleman Ara" required>
                        </div><!-- End .header-search-wrapper -->
                    </form>
                </div><!-- End .header-search -->
            </div>

            <div class="header-right">
                <div>Hoşgeldin <?php echo $_SESSION['user']['first_name'] ?></div>
                <div class="account">
                    <a href="/logout.php" title="My account">
                        <div class="icon">
                            <i style="color: whitesmoke;" class="icon-user"></i>
                        </div>
                        <p style="color: whitesmoke;">Çıkış</p>
                    </a>
                </div><!-- End .compare-dropdown -->
            </div><!-- End .header-right -->
        </div><!-- End .container -->
    </div><!-- End .header-middle -->

    <div class="header-bottom sticky-header">
        <div class="container">
            <div class="header-left">

            </div><!-- End .header-left -->

            <div class="header-center">
                <nav class="main-nav">
                    <ul class="menu sf-arrows">
                        <li class="megamenu-container ">
                            <a href="/isveren/ozgecmisincele.php">Özgeçmiş İncele</a>

                        </li>
                        <li class="megamenu-container ">
                            <a href="/isveren/ozgecmisfiltre.php">Özgeçmiş Filtre</a>

                        </li>
                    </ul><!-- End .menu -->
                </nav><!-- End .main-nav -->
            </div><!-- End .header-center -->

            <div class="header-right">
                <i class="la la-lightbulb-o"></i><p>Hemen üye olun<span class="highlight"> Anında İş bulun</span></p>
            </div>
        </div><!-- End .container -->
    </div><!-- End .header-bottom -->
</header>