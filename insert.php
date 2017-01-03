<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- CSS  -->
    <script src="assets/js/sweetalert.min.js"></script>
    <link rel="stylesheet" href="assets/css/sweetalert.css">
    
</head>
<body>

    
    <?php
require_once "Class/Database.php";
require_once "Class/function.php";
    session_start();
    
$nama = $_POST['nama'];
$telp = $_POST['telp'];
$alamat = $_POST['alamat'];
$lat = $_POST['lat'];
$lng = $_POST['lng'];

$sql = "INSERT INTO detail_user VALUES ('2' , '$nama', '$telp', '$alamat', 'info', '$lat','$lng','user','pass')";

if (mysqli_query($db, $sql)) {
            echo "<script>
                    swal({
                        title: \"Sukses!\",
                        text: \"Data Kendaraan Anda Berhasil Ditambah\",
                        type: \"success\"
                    },
                    function () {
                        window.location.href = 'home.php';
                    });
                    </script>";
                    } else echo "<script>
                    swal({
                        title: \"Gagal!\",
                        text: \"Data Kendaraan Sudah Terdaftar\",
                        type: \"error\"
                    },
                    function () {
                        window.location.href = 'home.php';
                    });
                    </script>";
mysqli_close($db);
?>
</body>
</html>
