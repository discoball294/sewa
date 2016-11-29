<?php
require_once "config/connect.php";
require_once "config/function.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <title>Hero Sakti Motor Gemilang Website By Materialize</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="assets/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>

    <link href="assets/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
    <script src="assets/js/sweetalert.min.js"></script> 
    <link rel="stylesheet" type="text/css" href="assets/css/sweetalert.css">
    
   
    <script type="text/javascript" src="assets/js/jquery-3.1.1.min.js"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>

    <script>
        
    
      function initialize() {
          
        // Variabel untuk menyimpan informasi (desc)
        var infoWindow = new google.maps.InfoWindow
           
        
        ;
        
        //  Variabel untuk menyimpan peta Roadmap
        var malang = {lat: -7.174807, lng: 112.744993};
        
        // Pembuatan petanya
        var map = new google.maps.Map(document.getElementById('map-canvas'),{ zoom: 4,
    center: malang});
        var image = 'https://pt.my-ip.club/images/beachflag.png';

        
              
        // Variabel untuk menyimpan batas kordinat
        var bounds = new google.maps.LatLngBounds();

        // Pengambilan data dari database
        <?php
            $query = mysqli_query($db,"select nama,no_telp,alamat,info,lat,lng  from detail_user");
            while ($data = mysqli_fetch_array($query))
            {
                $nama = $data['nama'];
                $no_telp = $data['no_telp'];
                $alamat = $data['alamat'];
                $info = $data['info'];
                $lat = $data['lat'];
                $lon = $data['lng'];
                
                echo ("addMarker($lat, $lon, '<label>Pemilik :   &nbsp</label><b>$nama</b><br><label>Telepon :   &nbsp</label>$no_telp<br><label>Alamat :   &nbsp</label>$alamat<br><label>Informasi :   &nbsp</label>$info');\n");                        
            }
          ?>
    

        // Proses membuat marker 
        function addMarker(lat, lng, info) {
            var lokasi = new google.maps.LatLng(lat, lng);
            bounds.extend(lokasi);
            var marker = new google.maps.Marker({
                map: map,
                position: lokasi,
                icon: image
            });       
            map.fitBounds(bounds);
            bindInfoWindow(marker, map, infoWindow, info);
         }

        // Menampilkan informasi pada masing-masing marker yang diklik
        function bindInfoWindow(marker, map, infoWindow, html) {
          google.maps.event.addListener(marker, 'click', function() {
            infoWindow.setContent(html);
            infoWindow.open(map, marker);
            map.setZoom(16);
            map.setCenter(marker.getPosition());
          });
        }
 
        }
      google.maps.event.addDomListener(window, 'load', initialize);
    
    </script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBOnchancvaUlaDwG-DYyTeq2wMuzEx9kU&signed_in=true&callback=initMap" async defer>
    </script>

</head>
<body onload="initialize()">

<nav class="cyan" role="navigation">
    <div class="nav-wrapper container">
      <a href="#!" class="brand-logo white-text">Logo</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse white-text"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li>
      </li>
        <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">Javascript</a></li>
        <li><a href="mobile.html">Mobile</a></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><a href="sass.html" class="center">Sass</a></li>
        <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">Javascript</a></li>
        <li><a href="mobile.html">Mobile</a></li>
      </ul>
    </div>
  </nav>
<div class="slider">
    <ul class="slides">
      <li>
        <img class="responsive-img" src="http://si.wsj.net/public/resources/images/BN-FW134_INstud_G_20141204080459.jpg"> <!-- random image -->
        
      </li>
      <li>
        <img class="responsive-img" src="https://scontent-sin6-1.xx.fbcdn.net/v/t1.0-9/13680863_169489116804331_868549027072613969_n.jpg?oh=dd4edc370eb56db5108035909b50537a&oe=58CBD858"> <!-- random image -->
        <div class="caption center-align">
          <h3 class="black">Slide</h3>
          <h5 class="black">Image Placed Here</h5>
        </div>
      </li>
      <li>
        <img class="responsive-img" src="https://scontent-sin6-1.xx.fbcdn.net/v/t1.0-9/13620834_169488916804351_5655875780476207409_n.jpg?oh=c8809aca280eb9220ef839b18af2f5d3&oe=58B593C9"> <!-- random image -->
        <div class="caption left-align">
          <h3>Slide</h3>
          <h5 class="light grey-text text-lighten-3">Image Placed Here</h5>
        </div>
      </li>
      
      <li>
        <img class="responsive-img" src="http://mediamalang.com/wp-content/uploads/2015/05/i552.photobucket.com_.jpg"> <!-- random image -->
        <div class="caption right-align">
          <h3>Slide</h3>
          <h5 class="light grey-text text-lighten-3">Image Placed Here</h5>
        </div>
      </li>
      
    </ul>
  </div>

  <div id="why" class="container">
      <div id="because-I-do-everything" class="section section__bigflow">
        
        <h2 class="center">Why use this website?</h2>
        <p class="flow-text">Ipsum nulla voluptas dicta nulla laudantium non. Aperiam hic facere officiis iusto iste. Maiores ipsam deserunt temporibus excepturi repudiandae vero minus temporibus. Minus ipsa nesciunt nulla corporis debitis veritatis ex? </p>
        
      </div>
    </div>

 <!-- #More Grid -->
    <div class="container">
      <div class="section section__more-grid">
        <!-- Start of Three -->
        <div class="row">
          <h2 class="center">6 Reasons Right Here</h2>
          <div class="col s12 m12 l4">
            <div class="icon-block">
              <h2 class="center"><i class="material-icons">home</i></h2>
              <h5 class="center">Point #1</h5>
              <p class="light">Ipsum soluta magnam debitis similique facilis! Illo eius veritatis dolor repudiandae illum consequatur quia quaerat. Sed fugiat sequi a placeat deserunt. Atque possimus pariatur accusantium dolores iusto, quo doloremque alias. </p>
            </div>
          </div>
          <div class="col s12 m12 l4">
            <div class="icon-block">
              <h2 class="center"><i class="material-icons">add</i></h2>
              <h5 class="center">Point #2</h5>
              <p class="light">Ipsum soluta magnam debitis similique facilis! Illo eius veritatis dolor repudiandae illum consequatur quia quaerat. Sed fugiat sequi a placeat deserunt. Atque possimus pariatur accusantium dolores iusto, quo doloremque alias. </p>
            </div>
          </div>
          <div class="col s12 m12 l4">
            <div class="icon-block">
              <h2 class="center"><i class="material-icons">phone</i></h2>
              <h5 class="center">Point #3</h5>
              <p class="light">Ipsum soluta magnam debitis similique facilis! Illo eius veritatis dolor repudiandae illum consequatur quia quaerat. Sed fugiat sequi a placeat deserunt. Atque possimus pariatur accusantium dolores iusto, quo doloremque alias. </p>
            </div>
          </div>
        </div> 
        <!-- End of Three -->
        <div class="row">
          <div class="col s12 m12 l4">
            <div class="icon-block">
              <h2 class="center"><i class="material-icons">thumb_up</i></h2>
              <h5 class="center">Point #4</h5>
              <p class="light">Ipsum soluta magnam debitis similique facilis! Illo eius veritatis dolor repudiandae illum consequatur quia quaerat. Sed fugiat sequi a placeat deserunt. Atque possimus pariatur accusantium dolores iusto, quo doloremque alias. </p>
            </div>
          </div>
          <div class="col s12 m12 l4">
            <div class="icon-block">
              <h2 class="center"><i class="material-icons">search</i></h2>
              <h5 class="center">Point #5</h5>
              <p class="light">Ipsum soluta magnam debitis similique facilis! Illo eius veritatis dolor repudiandae illum consequatur quia quaerat. Sed fugiat sequi a placeat deserunt. Atque possimus pariatur accusantium dolores iusto, quo doloremque alias. </p>
            </div>
          </div>
          <div class="col s12 m12 l4">
            <div class="icon-block">
              <h2 class="center"><i class="material-icons">my_location</i></h2>
              <h5 class="center">Point #6</h5>
              <p class="light">Ipsum soluta magnam debitis similique facilis! Illo eius veritatis dolor repudiandae illum consequatur quia quaerat. Sed fugiat sequi a placeat deserunt. Atque possimus pariatur accusantium dolores iusto, quo doloremque alias. </p>
            </div>
          </div>
        </div>
        <!-- End of Six (Row) -->
      </div>
    </div>



<div class="container">
    <div class="section">
        <h2 class="header center waves-teal black-text">Our Service</h2>
        <!--   Icon Section   -->
        <div class="row">
            <div  class="col s12 m6 l6">
                <div class="center promo promo-example">
                    <img src="http://pasarmalang.laskarhijau.org/assets/logo/user.PNG" class="responsive-img"></img>
                    <h3 class="promo-caption">Pengguna</h3>
                    <p class="light center">Pengguna dalam kota dapat mengakses informasi harga barang kebutuhan sehari-hari dan dapat mempersiapkan daftar belanjaan beserta harga yang valid, sedangkan bagi pengguna yang berada di luar kota, mereka dapat mendapat informasi letak dari pasar trradisional yang berada di Malang</p>
                </div>
            </div>
            <div class="col s12 m6 l6">
                <div class="center promo promo-example">
                    <img src="http://pasarmalang.laskarhijau.org/assets/logo/seller.PNG" class="responsive-img"></img>
                    <h3 class="promo-caption">Distributor</h3>
                    <p class="light center">Sebagai Distributor yang akan menjual kembali ke daerah-daerah yang jauh dari pasar induk, mereka dapat mengakses informasi harga secara cepat dan mudah.</p>
                </div>
            </div>
          </div>
    </div>
</div>

<div class="container">
    <div class="section">

        <div class="row">
            <div class="col s12 center">
                <h1 class="center brown-text"><i class="large material-icons">my_location</i></h1>
                <h4>Our Location</h4>
                <div id="map-canvas" style="width: 100%; height: 600px;"></div>
                    </div>    
            </div>
        </div>

    </div>
</div>


<div id="faq" class="section section__faq">
      <div class="container">

        <h2 class="center">FAQs</h2>
        <ul class="collapsible center" data-collapsible="accordion">
          <li>
            <div class="collapsible-header"><p class="flow-text">Beep.</p></div>
            <div class="collapsible-body"><p>Beep.</p></div>
          </li>
          <li>
            <div class="collapsible-header"><p class="flow-text">Beep.</p></div>
            <div class="collapsible-body"><p>Beep.</p></div>
          </li>
          <li>
            <div class="collapsible-header"><p class="flow-text">Beep.</p></div>
            <div class="collapsible-body"><p>Beep.</p></div>
          </li>
        </ul>
      
      </div>
    </div>

<footer class="page-footer teal">
    <div class="container">
        <div class="row">
            <div class="col l5 s12">
                <h5 class="white-text">EZ Rent</h5>
                <p class="grey-text text-lighten-4">Ipsum soluta magnam debitis similique facilis! Illo eius veritatis dolor repudiandae illum consequatur quia quaerat. Sed fugiat sequi a placeat deserunt. Atque possimus pariatur accusantium dolores iusto, quo doloremque alias.</p>
            </div>
            <div class="col l3 s12">
                <h5 class="white-text">Alamat</h5>
                <ul>
                    <p class="grey-text text-lighten-4"> Jl. Villa Puncak Tidar blok N-01</p>
                </ul>
                <ul><p class="grey-text text-lighten-4">(0341) 327750</p></ul>
            </div>
            <div class="col l3 s12">
                <h5 class="white-text">Social Media</h5>
                <ul>
                    <li>
                        <a style="text-decoration: none;" class="white-text"
                           href="https://www.facebook.com/suzukimotorindonesia/?fref=tsv"><i class="fa fa-facebook-square small"></i>
                            Facebook
                        </a>

                    </li>
                    <li>
                        <a style="text-decoration: none;" class="white-text"
                           href="https://www.facebook.com/suzukimotorindonesia/?fref=tsv"><i class="fa fa-instagram small"></i>
                            Instagram
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            Made by <a class="brown-text text-lighten-3" href="http://materializecss.com">Materialize</a>
        </div>
    </div>
</footer>


<!--  Scripts-->
<script src="assets/js/jquery-3.1.1.min.js"></script>
<script src="assets/js/materialize.js"></script>
<script src="assets/js/init.js"></script>
<div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
    <a href="#modal4" class="btn-floating btn-large pink modal-trigger">
        <i class="large material-icons tooltipped" data-position="left" data-delay="50" data-tooltip="Track History Motorcycle by License Plate">live_help</i>
    </a>
    <ul>
        <li><a href="mailto:farichrr@gmail.com?Subject=Hello%20Developer" target="_top" class="btn-floating blue"><i class="material-icons tooltipped" data-position="left" data-delay="50" data-tooltip="Contact Developer">perm_identity</i></a></li>
        <li><a href="#modal5" target="_top" class="btn-floating green modal-trigger">
                <i class="material-icons tooltipped" data-position="left" data-delay="50" data-tooltip="Estimasi Kredit">view_list</i>
            </a></li>
    </ul>
</div>

<!-- Modal Structure -->
<div id="modal1" class="modal">
    <div class="modal-content">
        <h4>Login</h4>
        <div class="row">
            <form class="col s12" method="post" action="login.php">
                <div class="row">
                    <div class="input-field col s6">
                        <i class="material-icons prefix">account_circle</i>
                        <input name="username" id="icon_prefix" type="text" class="validate" required >
                        <label for="icon_prefix">Username</label>
                    </div>
                    <div class="input-field col s6">
                        <i class="material-icons prefix">lock</i>
                        <input id="icon_telephone" type="password" class="validate" name="password" required>
                        <label for="icon_telephone">Password</label>
                    </div>
                    
                    
                </div>
                <div class="modal-footer">
                  <button type="submit" class="waves-effect waves-green right btn">Login</button>
                    
                        <a href="resetpass.php" class=" waves-effect waves-green btn-flat">Reset Password</a>
                    
                </div>
            </form>
        </div>
    </div>
    
</div>

<!-- Modal Structure -->
<div id="modal2" class="modal">
    <div class="modal-content">
        <h4>Sign Up</h4>
        <div class="row">
            <form class="col s12" action="daftar.php" method="post">
                <div class="row">
                    <div class="input-field col s6">
                        <input id="ktp" type="number" class="validate" length="15" name="ktp" size="15" required autofocus>
                        <label for="ktp">Nomor KTP</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="nama" type="text" class="validate" size="30" name="nama">
                        <label for="nama">Nama</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="username" type="text" class="validate" name="username" required>
                        <label for="Username">Username</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="password" type="password" class="validate" size="30" name="password" required>
                        <label for="password">Password</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="phone" type="number" name="phone" length="12" class="validate input_text" required>
                        <label for="phone">Phone</label>
                    </div><br>
                    <div class="g-recaptcha col s12" data-sitekey="6LeAkRUTAAAAAJqBhjZT7KK4R2Vu3pp-96wrTfDG"></div>
                </div>

                <button class="waves-effect waves-light btn right" type="submit">Sign Up</button>
            </form>
        </div>
    </div>
    <div class="modal-footer">

    </div>
</div>
    
    <!-- Modal Structure -->
<div id="modal5" class="modal">
    <div class="modal-content">
        <h4>Simulasi Kredit</h4>
        <div class="row">
            <form class="col s12" action="simulasikredit.php" method="post">
                <div class="row">
                    <div class="input-field col s12">
                        <input id="dp" type="number" class="validate" size="30" name="dp" autofocus required>
                        <label for="dp">Uang Muka</label>
                    </div>
                    <div class="input-field col s12 m6">
                        <select class="icons" name="produk">
                            <optgroup label="Sport">
                                <option  value="50000000" data-icon="img/c1.png" class="left circle">Inazuma 250</option>
                                <option  value="18000000" data-icon="img/sport2.png" class="left circle">Thunder 125</option>
                            </optgroup>
                            <optgroup label="Underbone">
                                <option  value="21500000" data-icon="img/sm.png" class="left circle">Satria F150 GP</option>
                                <option  value="21000000" data-icon="img/s11.png" class="left circle">Satria F150 SE</option>
                                <option  value="19500000" data-icon="img/s3.png" class="left circle">Satria F150 S</option>
                                <option  value="18800000" data-icon="img/s2.png" class="left circle">Satria F150</option>
                            </optgroup>
                            <optgroup label="Matic">
                                <option  value="15000000" data-icon="img/s5.png" class="left circle">Address 115 GP</option>
                            </optgroup>
                             <optgroup label="Cub">
                                <option  value="17000000" data-icon="img/sy2.png" class="left circle">Satria F115 GP</option>
                            </optgroup>
                        </select>
                            <label>Pilih Produk</label>
                    </div>
                    <div class="input-field col s12 m6">
                        <select name="tahun">
                                <option value="12">1 Tahun</option>
                                <option value="24">2 Tahun</option>
                                <option value="36">3 Tahun</option>
                        </select>
                            <label>Pilih Tahun</label>
                    </div>                    
                <button class="waves-effect waves-light btn right" type="submit">Kalkulasi</button>
                </div>
        </form>       
    </div>
</div>
    </div>    
<!-- Modal Structure -->
<div id="modal4" class="modal">
    <div class="modal-content">
        <h4>Cari Track Record Motor dengan plat nomor</h4>
        <div class="row">
            <form class="col s12" method="post" action="cari_motor.php">
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">label_outline</i>
                        <input name="nopol" id="nopol" type="text" class="validate" required >
                        <label for="nopol">No Polisi</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn waves-effect waves-light" type="submit"><i class="material-icons right">search</i>Cari</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>$(document).ready(function () {
        // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
        $('.modal-trigger').leanModal();
    });</script>
<script>$(document).ready(function () {
        $('input#input_text, textarea#textarea1').characterCounter();
    });</script>
    <script>
        // Initialize collapse button
  $(".button-collapse").sideNav();
  // Initialize collapsible (uncomment the line below if you use the dropdown variation)
  //$('.collapsible').collapsible();
    </script>
    <script>$(document).ready(function() {
    $('select').material_select();
  });</script>
      <script>$(document).ready(function(){
      $('.slider').slider({full_width: true});
    });</script>


</body>
</html>
