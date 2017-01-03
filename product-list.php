<?php
include "Class/Database.php";
include "Class/Barang.php";

$database = new Database();
$db = $database->getConnection();
$barang = new Barang($db);
$kategori = "";
if (empty($_GET['kategori'])) {
    $kategori = "all";
} else {
    $kategori = $_GET['kategori'];
}
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
    <link href="css/theme.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/custom.css" rel="stylesheet" type="text/css" media="all"/>
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400%7CRaleway:100,400,300,500,600,700%7COpen+Sans:400,500,600'
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
                <div class="col-md-9 col-md-push-3">
                    <div class="row">

                    </div>
                    <!--end of row-->
                    <div class="row">
                        <div class="col-sm-12">
                            <hr>
                        </div>
                    </div>
                    <!--end of row-->
                    <div class="row masonry">
                        <?
                        $num_rec_per_page = 12 ;
                        $counter = 0;
                        if (isset($_GET["page"])) {
                            $page = $_GET["page"];
                        } else {
                            $page = 1;
                        };
                        $start_from = ($page - 1) * $num_rec_per_page;
                        if ($kategori == "all") {
                            $stmt = $barang->fetchAll($start_from, $num_rec_per_page);
                        } else {
                            $barang->kategori = $kategori;
                            $stmt = $barang->fetchByKategori($start_from, $num_rec_per_page);
                        }
                        $stmt->bind_result($id_barang, $nama_barang, $gambar, $harga_sewa);
                        while ($stmt->fetch()) {
                            ?>
                            <div class="col-md-4 col-sm-4 masonry-item col-xs-12">
                                <div class="image-tile outer-title text-center">
                                    <a href="product.php?id=<? echo $id_barang?>">
                                        <img alt="Pic" class="product-thumb" src="img/shop-product-1.jpg"/>
                                    </a>
                                    <div class="title">
                                        <h5 class="mb0"> <a href="product.php?id=<? echo $id_barang?>"><? echo $nama_barang ?></a> </h5>
                                        <span class="display-block mb16"><? echo number_format($harga_sewa, 0, ".", ".") ?></span>
                                    </div>
                                </div>
                            </div>
                            <!--end three col-->
                            <?
                            $counter++;
                        }
                        ?>
                    </div>
                    <!--end of row-->
                    <div class="text-center mt40">
                        <ul class="pagination">
                            <li>
                                <a href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li class="active">
                                <a href="#">1</a>
                            </li>
                            <li>
                                <a href="#">2</a>
                            </li>
                            <li>
                                <a href="#">3</a>
                            </li>
                            <li>
                                <a href="#">4</a>
                            </li>
                            <li>
                                <a href="#">5</a>
                            </li>
                            <li>
                                <a href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--end of nine col-->
                <div class="col-md-3 col-md-pull-9 hidden-sm">
                    <div class="widget">
                        <h6 class="title">Shop Categories</h6>
                        <hr>
                        <ul class="link-list">
                            <li>
                                <a href="#">Alat Berat</a>
                            </li>
                            <li>
                                <a href="#">Alat Kantor</a>
                            </li>
                            <li>
                                <a href="#">Hobi</a>
                            </li>
                            <li>
                                <a href="#">Kendaraan</a>
                            </li>
                            <li>
                                <a href="#">Properti</a>
                            </li>
                            <li>
                                <a href="#">Lain - lain</a>
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
                <!--end of sidebar-->
            </div>
            <!--end of container row-->
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