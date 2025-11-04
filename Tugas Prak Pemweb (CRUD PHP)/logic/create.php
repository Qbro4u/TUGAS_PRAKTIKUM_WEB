<?php 

// Manggil connect.php
include "../config/connect.php";

// Nangkan Datanya
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$gender = $_POST['gender'];

$sql = "INSERT INTO data_mahasiswa (nim, nama, jenis_kelamin) VALUES ('$nim', '$nama', '$gender')";
$result = mysqli_query($connect, $sql);
if ($result) {
    header("Location: ../index.php");
} else{
    echo "Erorr : $stmt->error";
}

?>