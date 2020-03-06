<div id="nav">
    <!-- Main Nav -->
    <div id="nav-fixed">
        <div class="container">
            <!-- logo -->
            <div class="nav-logo">
                <a href="index.php" class="logo"><img src="assets/img/logo.png" alt=""></a>
            </div>
            <!-- /logo -->

            <!-- nav -->
            <ul class="nav-menu nav navbar-nav">
                <?php
                $ambil = $koneksi->query("SELECT * FROM tb_kategori");
                while ($pecah = $ambil->fetch_object()) {
                ?>
                    <li class="cat-<?php echo $pecah->kategori_id ?>"><a href="index.php?page=kategori&id=<?php echo $pecah->kategori_id; ?>"><?php echo $pecah->kategori_nama; ?></a></li>
                <?php
                }
                ?>
            </ul>
            <!-- /nav -->

            <!-- search & aside toggle -->
            <div class="nav-btns">

                <button class="aside-btn"><i class="fa fa-bars"></i></button>
                <button class="search-btn"><i class="fa fa-search"></i></button>
                <div class="search-form">
                    <input class="search-input" type="text" name="search" placeholder="Enter Your Search ..." onkeydown="return cariBerita(event)">
                    <button name="search" class="search-close"><i class="fa fa-times"></i></button>
                </div>
                <script>
                    function cariBerita(e) { //kejadian
                        if (e.keyCode == 13) { //mendeteksi apa yg ditekan user & 13 adalah enter
                            var kata_kunci = document.getElementsByName("search")[0].value;
                            window.location.href = "index.php?search=" + kata_kunci;
                        }

                    }
                </script>


            </div>
            <!-- /search & aside toggle -->
        </div>
    </div>
    <!-- /Main Nav -->

    <!-- Aside Nav -->
    <div id="nav-aside">
        <!-- nav -->
        <div class="section-row">
            <ul class="nav-aside-menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="index.php?page=about">About Us</a></li>
                <li><a href="index.php?page=contact">Contacts</a></li>
                <li><a href="admin/login.php">Login</a></li>
            </ul>
        </div>
        <!-- /nav -->

        <!-- widget posts -->
        <!-- <div class="section-row">
            <h3>Recent Posts</h3>

            <div class="post post-widget">
                <a class="post-img" href="blog-post.html"><img src="./img/widget-2.jpg" alt=""></a>
                <div class="post-body">
                    <h3 class="post-title"><a href="blog-post.html">Pagedraw UI Builder Turns Your Website Design Mockup Into Code Automatically</a></h3>
                </div>
            </div>
        </div> -->
        <!-- /widget posts -->

        <!-- social links -->
        <div class="section-row">
            <h3>Follow us</h3>
            <ul class="nav-aside-social">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
            </ul>
        </div>
        <!-- /social links -->

        <!-- aside nav close -->
        <button class="nav-aside-close"><i class="fa fa-times"></i></button>
        <!-- /aside nav close -->
    </div>
    <!-- Aside Nav -->
</div>