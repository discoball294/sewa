<?php
ob_start();
?>
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
$username = $_POST["user"];
$password = $_POST["pass"];
$query = 'SELECT * FROM user';
$data = $db->query($query);

$row = $data->fetch_assoc();
foreach ($data as $row) {
    if ($username == $row['username'] && $password == $row['password']) {
        session_start();
        $_SESSION['username'] = $row['username'];
            echo "<script>
                        swal({
                            title: \"Login Sukses!\",
                            text: \"Selamat Datang $username\",
                            type: \"success\"
                         },
                    function () {
                        window.location.href = 'home.php';
                    });
                        </script>";
        
    } 
}
?>
</body>
</html>