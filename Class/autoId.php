<?php
require "Database.php";
function AutoID()
{
    global $db;
    $querycount="SELECT count(kode_tipepegawai) as LastID FROM tipe_pegawai";
    $result=$db->query($querycount) or die($db->error());
    $row=$result->fetch_assoc();
    return $row['LastID'];
}

function IdPegawai($num) {
    $num=$num+1; switch (strlen($num))
    {
        case 1 : $NoId = "TP000".$num; break;
        case 2 : $NoId = "TP00".$num; break;
        case 3 : $NoId = "TP0".$num; break;
        default: $NoId = $num;
    }
    return $NoId;
}
echo IdPegawai(autoID());
?>

<?php
function autoIdStatus()
{
    global $db;
    $querycount="SELECT count(kode_statuspegawai) as LastID FROM status_pegawai";
    $result=$db->query($querycount) or die($db->error());
    $row=$result->fetch_assoc();
    return $row['LastID'];
}

function IdStatusPegawai($num) {
    $num=$num+1; switch (strlen($num))
    {
        case 1 : $NoIdStatus = "S000".$num; break;
        case 2 : $NoIdStatus = "S00".$num; break;
        case 3 : $NoIdStatus = "S0".$num; break;
        default: $NoIdStatus = $num;
    }
    return $NoIdStatus;
}
echo IdStatusPegawai(autoIdStatus());
?>

<?php
function autoIdJabatan()
{
    global $db;
    $querycount="SELECT count(kode_jabatan) as LastID FROM jabatan";
    $result=$db->query($querycount) or die($db->error());
    $row=$result->fetch_assoc();
    return $row['LastID'];
}

function IdJabatan($num) {
    $num=$num+1; switch (strlen($num))
    {
        case 1 : $NoIdJabatan = "J00".$num; break;
        case 2 : $NoIdJabatan = "J0".$num; break;
        default: $NoIdJabatan = $num;
    }
    return $NoIdJabatan;
}
echo IdJabatanAkademik(autoIdjabatanakademik());
?>

<?php
function autoIdJabatanakademik()
{
    global $db;
    $querycount="SELECT count(kode_jabatanakademik) as LastID FROM jabatan_akademik";
    $result=$db->query($querycount) or die($db->error());
    $row=$result->fetch_assoc();
    return $row['LastID'];
}

function IdJabatanAkademik($num) {
    $num=$num+1; switch (strlen($num))
    {
        case 1 : $NoIdJabatanAkademik = "JA00".$num; break;
        case 2 : $NoIdJabatanAkademik = "JA0".$num; break;
        default: $NoIdJabatanAkademik = $num;
    }
    return $NoIdJabatanAkademik;
}
echo IdJabatan(autoIdjabatanakademik());
?>


<?php
function DetailID()
{
    global $db;
    $querycount="SELECT count(id) as LastID FROM detail_pegawai";
    $result=$db->query($querycount) or die($db->error());
    $row=$result->fetch_assoc();
    return $row['LastID'];
}

function IdDetail($num) {
    $num=$num+1; switch (strlen($num))
    {
        case 1 : $NoId = "PGW000".$num; break;
        case 2 : $NoId = "PGW00".$num; break;
        case 3 : $NoId = "PGW0".$num; break;
        default: $NoId = $num;
    }
    return $NoId;
}
echo IdDetail(DetailID());
?>