<?php
include "Class/Database.php";
include "Class/Barang.php";

$database = new Database();
$db = $database->getConnection();
$barang = new Barang($db);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Foundry Multi-purpose HTML Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/themify-icons.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/flexslider.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/lightbox.min.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/ytplayer.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/theme-gunmetal.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/custom.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all"/>
    <link
        href='http://fonts.googleapis.com/css?family=Lato:300,400%7CRaleway:100,400,300,500,600,700%7COpen+Sans:400,500,600'
        rel='stylesheet' type='text/css'>
</head>
<body class="scroll-assist">
<div class="nav-container">
    <a id="top"></a>
    <nav class="nav-centered">

        <div class="text-center">
            <a href="index.html">
                <img class="logo logo-light" alt="Foundry" src="img/logo-light.png"/>
                <img class="logo logo-dark" alt="Foundry" src="img/logo-dark.png"/>
            </a>
        </div>
        <div class="nav-bar text-center">
            <div class="module widget-handle mobile-toggle right visible-sm visible-xs">
                <i class="ti-menu"></i>
            </div>
            <div class="module-group text-left">
                <div class="module left">
                    <ul class="menu">
                        <li>
                            <a href="landing-page.php">
                                Home
                            </a>
                        </li>
                        <li class="has-dropdown">
                            <a href="product-list.php">
                                Kategori
                            </a>
                            <ul>
                                <li>
                                    <a href="#">
                                        Alat Berat
                                    </a>
                                </li>
                                <li class="has-dropdown">
                                    <a href="#">
                                        Alat Kantor
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="#">
                                                Komputer/Laptop
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="has-dropdown">
                                    <a href="#">
                                        Hobi
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="#">
                                                Fotografi
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Game
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Music
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Outdoor
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-dropdown">
                                    <a href="#">
                                        Kendaraan
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="#">
                                                Mobil
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Motor
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-dropdown">
                                    <a href="#">
                                        Properti
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="#">
                                                Rumah
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Kos
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Ruko
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Toko/Kios
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">
                                        Lain - lain
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                Shop
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Blog
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                About
                            </a>
                        </li>
                    </ul>
                </div>
                <!--end of menu module-->
                <div class="module widget-handle search-widget-handle left">
                    <div class="search">
                        <i class="ti-search"></i>
                        <span class="title">Search Site</span>
                    </div>
                    <div class="function">
                        <form class="search-form">
                            <input type="text" placeholder="Type Here"/>
                        </form>
                    </div>
                </div>

            </div>
            <!--end of module group-->
        </div>
    </nav>
</div>
<div class="main-container">
    <section class="image-slider slider-all-controls parallax controls-inside pt0 pb0">
        <ul class="slides">
            <li class="overlay image-bg pt240 pb240 pt-xs-120 pb-xs-120">
                <div class="background-image-holder">
                    <img alt="image" class="background-image" src="img/banner.jpg">
                </div>
                <div class="container">
                    <div class="row text-center">
                        <div class="col-md-12">
                            <h2 class="mb40 uppercase">Find and rent it.</h2>
                            <a class="btn btn-lg" href="#">Lihat produk</a>
                        </div>
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </li>
        </ul>
    </section>
    <section class="pt40 pb0">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h6 class="uppercase mb0">Hot Kategori</h6>
                </div>
            </div>
        </div>
    </section>
    <section class="pt40 pb0">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="image-tile inner-title title-center text-center">
                        <a href="#">
                            <img alt="Pic" src="img/hobi-banner.jpg"/>
                            <div class="title">
                                <h4 class="uppercase mb0">Sewa Kamera</h4>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="image-tile inner-title title-center text-center">
                        <a href="#">
                            <img alt="Pic" src="img/kendaraan.jpg"/>
                            <div class="title">
                                <h4 class="uppercase mb0">Sewa Kendaraan</h4>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="pt40 pb0">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="image-tile inner-title title-center text-center">
                        <a href="#">
                            <img alt="Pic" src="img/room.jpg"/>
                            <div class="title">
                                <h4 class="uppercase mb0">Kamar di Malang</h4>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="image-tile inner-title title-center text-center">
                        <a href="#">
                            <img alt="Pic" src="img/alat-kantor.jpg"/>
                            <div class="title">
                                <h4 class="uppercase mb0">Alat Kantor</h4>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="pt40 pb0">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h6 class="uppercase mb0">Produk baru di posting</h6>
                </div>
            </div>
        </div>
    </section>
    <section class="pt40 pb0">
        <div class="container">
            <div class="row">
                <?
                $stmt = $barang->fetchLatest();
                $stmt->bind_result($id_barang, $nama_barang, $gambar, $harga);
                while ($stmt->fetch()) {

                    ?>
                    <div class="col-md-3 col-sm-4">
                        <div class="image-tile outer-title text-center">
                            <a href="product.php?id=<? echo $id_barang?>">
                                <img alt="Pic" class="product-thumb" src="img/shop-product-1.jpg"/>
                            </a>
                            <div class="title">
                                <a href="product.php?id=<? echo $id_barang?>"><h5 class="mb0"><? echo $nama_barang ?></h5></a>
                                <span class="display-block mb16">Rp. <? echo number_format($harga, 0, ".", ".") ?></span>
                            </div>
                        </div>
                    </div>
                    <?
                }
                ?>
                <!--end three col-->
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>

    <section class="pt40 pb40">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 overflow-hidden">
                    <div class="col-sm-3 p0">
                        <a href="#">
                            <div class="bg-secondary pt96 pb96 text-center fade-on-hover">
                                <i class="ti-shopping-cart-full icon icon-sm mb8"></i>
                                <h6 class="uppercase mb0">Shop Range</h6>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-3 p0">
                        <a href="#">
                            <div class="bg-secondary pt96 pb96 text-center fade-on-hover">
                                <i class="ti-package icon icon-sm mb8"></i>
                                <h6 class="uppercase mb0">Shipping Info</h6>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-3 p0">
                        <a href="#">
                            <div class="bg-secondary pt96 pb96 text-center fade-on-hover">
                                <i class="ti-help-alt icon icon-sm mb8"></i>
                                <h6 class="uppercase mb0">FAQ</h6>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-3 p0">
                        <a href="#">
                            <div class="bg-secondary pt96 pb96 text-center fade-on-hover">
                                <i class="ti-receipt icon icon-sm mb8"></i>
                                <h6 class="uppercase mb0">Returns Policy</h6>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="pt40 pb40 bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 text-center pt8">
                    <ul class="list-inline social-list">
                        <li>
                            <a href="#">
                                <i class="ti-twitter-alt icon icon-sm"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="ti-facebook icon icon-sm"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="ti-dribbble icon icon-sm"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="ti-vimeo-alt icon icon-sm"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-6">
                    <form class="form-newsletter halves"
                          data-success="Thanks for your registration, we will be in touch shortly."
                          data-error="Please fill all fields correctly.">
                        <input type="text" name="email" class="mb0 validate-email validate-required  signup-email-field"
                               placeholder="Email Address"/>
                        <button type="submit" class="mb0">Subscribe</button>
                        <iframe
                            srcdoc="<!-- Begin MailChimp Signup Form --><link href=&quot;https://cdn-images.mailchimp.com/embedcode/classic-081711.css&quot; rel=&quot;stylesheet&quot; type=&quot;text/css&quot;><style type=&quot;text/css&quot;> #mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }   /* Add your own MailChimp form style overrides in your site stylesheet or in this style block.     We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */</style><div id=&quot;mc_embed_signup&quot;><form action=&quot;//mrare.us8.list-manage.com/subscribe/post?u=77142ece814d3cff52058a51f&amp;id=94d040322a&quot; method=&quot;post&quot; id=&quot;mc-embedded-subscribe-form&quot; name=&quot;mc-embedded-subscribe-form&quot; class=&quot;validate&quot; target=&quot;_blank&quot; novalidate>    <div id=&quot;mc_embed_signup_scroll&quot;>   <h2>Subscribe to our mailing list</h2><div class=&quot;indicates-required&quot;><span class=&quot;asterisk&quot;>*</span> indicates required</div><div class=&quot;mc-field-group&quot;>    <label for=&quot;mce-EMAIL&quot;>Email Address  <span class=&quot;asterisk&quot;>*</span></label>   <input type=&quot;email&quot; value=&quot;&quot; name=&quot;EMAIL&quot; class=&quot;required email&quot; id=&quot;mce-EMAIL&quot;></div><div class=&quot;mc-field-group&quot;>  <label for=&quot;mce-FNAME&quot;>First Name </label>    <input type=&quot;text&quot; value=&quot;&quot; name=&quot;FNAME&quot; class=&quot;&quot; id=&quot;mce-FNAME&quot;></div><div class=&quot;mc-field-group&quot;> <label for=&quot;mce-LNAME&quot;>Last Name </label> <input type=&quot;text&quot; value=&quot;&quot; name=&quot;LNAME&quot; class=&quot;&quot; id=&quot;mce-LNAME&quot;></div>   <div id=&quot;mce-responses&quot; class=&quot;clear&quot;>      <div class=&quot;response&quot; id=&quot;mce-error-response&quot; style=&quot;display:none&quot;></div>     <div class=&quot;response&quot; id=&quot;mce-success-response&quot; style=&quot;display:none&quot;></div>   </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->    <div style=&quot;position: absolute; left: -5000px;&quot;><input type=&quot;text&quot; name=&quot;b_77142ece814d3cff52058a51f_94d040322a&quot; tabindex=&quot;-1&quot; value=&quot;&quot;></div>    <div class=&quot;clear&quot;><input type=&quot;submit&quot; value=&quot;Subscribe&quot; name=&quot;subscribe&quot; id=&quot;mc-embedded-subscribe&quot; class=&quot;button&quot;></div>    </div></form></div><script type='text/javascript' src='https://s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script><!--End mc_embed_signup-->"
                            class="mail-list-form">
                        </iframe>
                    </form>
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>
    <footer class="footer-1 bg-secondary">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <img alt="Logo" class="logo" src="img/logo-dark.png"/>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h6 class="title">Recent Posts</h6>
                        <hr>
                        <ul class="link-list recent-posts">
                            <li>
                                <a href="#">Hugging pugs is super trendy</a>
                                <span class="date">February
                                            <span class="number">14, 2015</span>
                                        </span>
                            </li>
                            <li>
                                <a href="#">Spinning vinyl is oh so cool</a>
                                <span class="date">February
                                            <span class="number">9, 2015</span>
                                        </span>
                            </li>
                            <li>
                                <a href="#">Superior theme design by pros</a>
                                <span class="date">January
                                            <span class="number">27, 2015</span>
                                        </span>
                            </li>
                        </ul>
                    </div>
                    <!--end of widget-->
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h6 class="title">Latest Updates</h6>
                        <hr>
                        <div class="twitter-feed">
                            <div class="tweets-feed" data-feed-name="mrareweb">
                            </div>
                        </div>
                    </div>
                    <!--end of widget-->
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h6 class="title">Instagram</h6>
                        <hr>
                        <div class="instafeed" data-user-name="mrareweb">
                            <ul></ul>
                        </div>
                    </div>
                    <!--end of widget-->
                </div>
            </div>
            <!--end of row-->
            <div class="row">
                <div class="col-sm-6">
                    <span class="sub">&copy; Copyright 2016 - Medium Rare</span>
                </div>
                <div class="col-sm-6 text-right">
                    <ul class="list-inline social-list">
                        <li>
                            <a href="#">
                                <i class="ti-twitter-alt"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="ti-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="ti-dribbble"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="ti-vimeo-alt"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--end of container-->
        <a class="btn btn-sm fade-half back-to-top inner-link" href="#top">Top</a>
    </footer>
</div>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/flickr.js"></script>
<script src="js/flexslider.min.js"></script>
<script src="js/lightbox.min.js"></script>
<script src="js/masonry.min.js"></script>
<script src="js/twitterfetcher.min.js"></script>
<script src="js/spectragram.min.js"></script>
<script src="js/ytplayer.min.js"></script>
<script src="js/countdown.min.js"></script>
<script src="js/smooth-scroll.min.js"></script>
<script src="js/parallax.js"></script>
<script src="js/scripts.js"></script>
</body>
</html>