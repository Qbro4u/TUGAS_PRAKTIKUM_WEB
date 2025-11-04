<?php 

// Panggil Koneksi
include '../config/connect.php';

// Ambil Data
$id = $_GET['id'];

// Query
$sql = "DELETE FROM data_mahasiswa WHERE id='$id'";
$result = mysqli_query($connect, $sql);

if ($result) {
    header("Location: ../index.php");
} else {
    echo "Error : Gagal Hapus";
    die();
    header("Location: ../index.php?status=gagal");
}

?>