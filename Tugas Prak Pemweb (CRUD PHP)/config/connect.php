<?php 

$host = "localhost"; //127.0.0.1
$port = 3306 ; // ! Opsional !
$username = "root"; 
$password = "";
$database = "mahasiswa";

// MYSQL Handshake
$connect = new mysqli($host, $username, $password, $database, $port);

// Control Handler
if ($connect) {
    
}else{
    echo "Koneksi mati bro";
    die;
}

?>