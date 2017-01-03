<?php
include "Class/Database.php";
include "Class/Barang.php";

$database = new Database();
$db = $database->getConnection();
$barang = new Barang($db);

$barang->id_barang = $_GET['id'];
$stmt = $barang->fetchSingle();
$stmt->bind_result($id_barang, $nama_pemilik, $kategori, $nama_barang, $gambar, $info_barang, $harga_sewa, $harga_beli, $status);
$stmt->fetch();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Sewa <? echo $nama_barang ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/themify-icons.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/flexslider.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/lightbox.min.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/ytplayer.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/theme.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/custom.css" rel="stylesheet" type="text/css" media="all"/>
    <link
        href='http://fonts.googleapis.com/css?family=Lato:300,400%7CRaleway:100,400,300,500,600,700%7COpen+Sans:400,500,600'
        rel='stylesheet' type='text/css'>
</head>
<body class="scroll-assist">
<div class="nav-container">
    <a id="top"></a>
    <? include "include/menu.php" ?>
</div>
<div class="main-container">

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="product-single">
                        <div class="row mb24 mb-xs-48">
                            <div class="col-md-5 col-sm-6">
                                <div class="image-slider slider-thumb-controls controls-inside">
                                    <span class="label">Disewakan</span>
                                    <ul class="slides">
                                        <li>
                                            <img alt="Image" src="img/shop-product-1.jpg"/>
                                        </li>
                                    </ul>
                                </div>
                                <!--end of image slider-->
                            </div>
                            <div class="col-sm-6">
                                <div class="description">
                                    <h4 class="uppercase"><? echo $nama_barang ?></h4>
                                    <div class="mb32 mb-xs-24">
                                        <span
                                            class="number price">Rp. <? echo number_format($harga_sewa, 0, ".", ".") ?></span>
                                    </div>
                                    <p>
                                        <? echo $info_barang ?>
                                    </p>
                                    <ul>
                                        <li>
                                            <strong>Penyedia:</strong> <a href=""><? echo $nama_pemilik ?></a>
                                        </li>
                                    </ul>
                                </div>
                                <hr class="mb48 mb-xs-24">
                                <form class="add-to-cart">
                                    <input type="submit" value="SEWA"/>
                                </form>
                            </div>
                        </div>
                        <!--end of row-->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="tabbed-content text-tabs">
                                    <ul class="tabs">
                                        <li class="active">
                                            <div class="tab-title">
                                                <span>Description</span>
                                            </div>
                                            <div class="tab-content">
                                                <p>
                                                    <? echo $info_barang ?>
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="tab-title">
                                                <span>Size Guide</span>
                                            </div>
                                            <div class="tab-content">
                                                <table class="table table-striped table-bordered">
                                                    <thead>
                                                    <tr>
                                                        <th>Size</th>
                                                        <th>Measurement</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <th scope="row">Small</th>
                                                        <td>
                                                            <span class="number">16"</span> Neck /
                                                            <span class="number">8"</span> Sleeve
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Medium</th>
                                                        <td>
                                                            <span class="number">18"</span> Neck /
                                                            <span class="number">9"</span> Sleeve
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Large</th>
                                                        <td>
                                                            <span class="number">20"</span> Neck /
                                                            <span class="number">10"</span> Sleeve
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="tab-title">
                                                <span>Ratings</span>
                                            </div>
                                            <div class="tab-content">
                                                <ul class="ratings">
                                                    <li>
                                                        <div class="user">
                                                            <ul class="list-inline star-rating">
                                                                <li>
                                                                    <i class="ti-star"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="ti-star"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="ti-star"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="ti-star"></i>
                                                                </li>
                                                            </ul>
                                                            <span class="bold-h6">Murray Rafferty</span>
                                                            <span class="date number">23/02/2015</span>
                                                        </div>
                                                        <p>
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                                            do eiusmod tempor incididunt ut labore et dolore magna
                                                            aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                                            ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                                            Duis aute irure dolor in reprehenderit in voluptate velit
                                                            esse cillum dolore eu fugiat nulla pariatur.
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <div class="user">
                                                            <ul class="list-inline star-rating">
                                                                <li>
                                                                    <i class="ti-star"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="ti-star"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="ti-star"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="ti-star"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="ti-star"></i>
                                                                </li>
                                                            </ul>
                                                            <span class="bold-h6">Claire Taurus</span>
                                                            <span class="date number">15/02/2015</span>
                                                        </div>
                                                        <p>
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                                            do eiusmod tempor incididunt ut labore et dolore magna
                                                            aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                                            ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                                            Duis aute irure dolor in reprehenderit in voluptate velit
                                                            esse cillum dolore eu fugiat nulla pariatur.
                                                        </p>
                                                    </li>
                                                </ul>
                                                <!--end of ratings-->
                                                <h6 class="uppercase">Leave A Rating</h6>
                                                <form class="ratings-form">
                                                    <div class="overflow-hidden">
                                                        <input type="text" placeholder="Your Name"/>
                                                        <input type="text" placeholder="Email Address"/>
                                                    </div>
                                                    <div class="select-option">
                                                        <i class="ti-angle-down"></i>
                                                        <select>
                                                            <option selected value="Default">Select A Rating</option>
                                                            <option value="1">1 Star</option>
                                                            <option value="2">2 Stars</option>
                                                            <option value="3">3 Stars</option>
                                                            <option value="4">4 Stars</option>
                                                            <option value="5">5 Stars</option>
                                                        </select>
                                                    </div>
                                                    <textarea placeholder="Comment" rows="3"></textarea>
                                                    <input type="submit" value="Leave Comment"/>
                                                </form>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!--end of text tabs-->
                            </div>
                        </div>
                        <!--end of row-->
                    </div>
                    <!--end of product single-->
                </div>
                <!--end of nine col-->
                <div class="col-md-3 hidden-sm">
                    <div class="widget">
                        <h6 class="title">Shop Categories</h6>
                        <hr>
                        <ul class="link-list">
                            <li>
                                <a href="#">Bags</a>
                            </li>
                            <li>
                                <a href="#">Accessories</a>
                            </li>
                            <li>
                                <a href="#">Shirts</a>
                            </li>
                            <li>
                                <a href="#">Trousers</a>
                            </li>
                        </ul>
                    </div>
                    <!--end of widget-->
                    <div class="widget">
                        <h6 class="title">Search Shop</h6>
                        <hr>
                        <form>
                            <input class="mb0" type="text" placeholder="Type Here"/>
                        </form>
                    </div>
                    <!--end of widget-->
                    <div class="widget">
                        <h6 class="title">Popular Items</h6>
                        <hr>
                        <ul class="cart-overview">
                            <li>
                                <a href="#">
                                    <img alt="Product" src="img/shop-product-7.jpg"/>
                                    <div class="description">
                                        <span class="product-title">Vladimir Flask</span>
                                        <span class="price number">$49.95</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img alt="Product" src="img/shop-product-13.jpg"/>
                                    <div class="description">
                                        <span class="product-title">Bradley Journal</span>
                                        <span class="price number">$29.95</span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!--end of widget-->
                    <div class="widget">
                        <h6 class="title">Returns Policy</h6>
                        <hr>
                        <p>
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem antium doloremque laudantium,
                            totam rem aperiam, eaque ipsa quae.
                        </p>
                    </div>
                    <!--end of widget-->
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>
    <section class="pt0">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="uppercase mb80 mb-xs-40">You May Also Like</h4>
                </div>
            </div>
            <!--end of row-->
            <div class="row">
                <div class="col-md-3 col-sm-4">
                    <div class="image-tile outer-title text-center">
                        <a href="#">
                            <img alt="Pic" class="product-thumb" src="img/shop-product-1.jpg"/>
                        </a>
                        <div class="title">
                            <h5 class="mb0">Adrian
                                <br/> LambsWool Cap</h5>
                            <span class="display-block mb16">$49.95</span>
                        </div>
                    </div>
                </div>
                <!--end three col-->
                <div class="col-md-3 col-sm-4">
                    <div class="image-tile outer-title text-center">
                        <a href="#">
                            <img alt="Pic" class="product-thumb" src="img/shop-product-2.jpg"/>
                        </a>
                        <div class="title">
                            <h5 class="mb0">Stanley
                                <br/> Leather Wallet</h5>
                            <span class="display-block mb16">$69.95</span>
                        </div>
                    </div>
                </div>
                <!--end three col-->
                <div class="col-md-3 col-sm-4">
                    <div class="image-tile outer-title text-center">
                        <a href="#">
                            <img alt="Pic" class="product-thumb" src="img/shop-product-7.jpg"/>
                        </a>
                        <div class="title">
                            <h5 class="mb0">Vladimir
                                <br/>Stainless Flask</h5>
                            <span class="display-block mb16">$49.95</span>
                        </div>
                    </div>
                </div>
                <!--end three col-->
                <div class="col-md-3 col-sm-4">
                    <div class="image-tile outer-title text-center">
                        <a href="#">
                            <img alt="Pic" class="product-thumb" src="img/shop-product-3.jpg"/>
                        </a>
                        <div class="title">
                            <h5 class="mb0">Luka
                                <br/>Vintage Camera</h5>
                            <span class="display-block mb16">$259</span>
                        </div>
                    </div>
                </div>
                <!--end three col-->
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>
    <footer class="footer-1 bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <img alt="Logo" class="logo" src="img/logo-light.png"/>
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