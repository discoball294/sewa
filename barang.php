<?php
    require_once "Class/Database.php";
    require_once "Class/function.php";

    $sql = "SELECT * FROM barang";
    if($sql === FALSE) { 
    die(mysql_error()); // TODO: better error handling
    }

while($row = mysql_fetch_array($result))
{
    echo $row['id_barang'];
}
?>