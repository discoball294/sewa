<?php
/**
 * Created by PhpStorm.
 * User: LUK
 * Date: 7/2/2016
 * Time: 12:45 PM
 */
class Database{
    private $host = "localhost";
    private $db_name = "sewa";
    private $username = "root";
    private $password = "root";
    public $conn;

    public function getConnection(){
        $this->conn = null;
        try{
            $this->conn = new mysqli($this->host, $this->username, $this->password, $this->db_name);
        }catch(mysqli_sql_exception $exception){
            echo "Connection error: " . $exception->getMessage();
        }
        return $this->conn;
    }
}