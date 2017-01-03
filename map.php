<?php
session_start();
require_once "Class/Database.php";
require_once "Class/function.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">

    <meta name="author" content="ilmu-detil.blogspot.com">
    <title>Multi Marker Map </title>
    <!-- Bagian css -->

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    

    <!-- Bagian js -->
    <script src='assets/js/jquery-3.1.1.min.js'></script>       
    
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- akhir dari Bagian js -->
    <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
    
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
    
</head>
<body onload="initialize()">
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">
          </a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-left">
                
            </ul>
        </div>
    </div>
</nav>
</br></br></br></br>
<!--- Bagian Judul-->   
<div class="container" style="margin-top:10px">
    <div class="row">
        <div class="col-md-8">
<!--
            <table>
<tr>
<th>No</th>
<th>nama_barang</th>
<th>gambar</th>
<th>info_barang</th>
<th>harga_sewa</th>
<th>harga_beli</th>
<th>status</th>
</tr>
<tr>
            <?php
                require_once "Class/Database.php";
                require_once "Class/function.php";
                
     $queri="Select * From barang" ;  //menampikan SEMUA data dari tabel siswa

$hasil=MySQL_query ($queri);    //fungsi untuk SQL

// perintah untuk membaca dan mengambil data dalam bentuk array
while ($data = mysql_fetch_array ($hasil)){
$id = $data['id_barang'];
 echo "    
        <tr>
        <td>".$data['nama_barang']."</td>
        <td>".$data['gambar']."</td>
        <td>".$data['info_barang']."</td>
        <td>".$data['harga_sewa']."</td>
        <td>".$data['harga_beli']."</td>
        <td>".$data['status']."</td>
        
        </tr> 
        ";
        
} 
?>
            
            
        </div>
    </div>
-->
</div>
<div class="container" style="margin-top:10px"> 

    <div class="row">
        <div class="col-md-8">
            <div style="width: 1135px; height: 700px;" class="panel panel-default">
                <div class="panel-heading">Marker Google Maps</div>
                    <div class="panel-body">
                        <div id="map-canvas" style="width: 1100px; height: 600px;"></div>
                    </div>
            </div>
        </div>  
    </div>
</div>  
</body>
</html>