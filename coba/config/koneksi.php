<?php 

$host = "localhost";
$port = "3306";
$username = "root";
$password = "";
$db = "db_coba";

$koneksi = mysqli_connect($host, $username, $password, $db, $port);

if ($koneksi) {
    
} else {
    echo "Erorr: Koneksi Gagal";
    die();
}


?>