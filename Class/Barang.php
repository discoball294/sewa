<?php

class Barang
{
    private $conn;

    public $id_barang;
    public $id_pemilik;
    public $kategori;
    public $nama_barang;
    public $gambar;
    public $info_barang;
    public $harga_sewa;
    public $harga_beli;
    public $status;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function fetchLatest()
    {
        $query = "SELECT `id_barang`,`nama_barang`,`gambar`,`harga_sewa` FROM `barang` ORDER BY `id_barang` DESC LIMIT 0,4";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    public function fetchAll($start, $limit)
    {
        $query = "SELECT `id_barang`,`nama_barang`,`gambar`,`harga_sewa` FROM `barang` WHERE `status` = 1 LIMIT ?,?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("ii", $start, $limit);
        if ($stmt->execute()) {
            return $stmt;
        } else {
            return $stmt->error;
        }
    }

    public function fetchByKategori($start, $limit)
    {
        $query = "SELECT `id_barang`,`nama_barang`,`gambar`,`harga_sewa` FROM `barang` WHERE `kategori` = ? AND `status` = 1 LIMIT ?,?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("sii",$this->kategori, $start, $limit);
        if ($stmt->execute()) {
            return $stmt;
        } else {
            return $stmt->error;
        }
    }

    public function fetchSingle()
    {
        $query = "SELECT `barang`.`id_barang`, `detail_user`.`nama`, `barang`.`kategori`,`barang`.`nama_barang`,`barang`.`gambar`,`barang`.`info_barang`,`barang`.`harga_sewa`,`barang`.`harga_beli`,`barang`.`status` FROM `barang` LEFT JOIN `detail_user` ON `barang`.`id_pemilik` = `detail_user`.`id_pengguna` WHERE `id_barang` = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("i", $this->id_barang);
        $stmt->execute();
        return $stmt;
    }

}