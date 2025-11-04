<?php 

include "../config/connect.php";

// nangkap datanya
$id = $_POST['id'];
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$gender = $_POST['gender'];

$sql = "UPDATE data_mahasiswa SET nim='$nim', nama='$nama', jenis_kelamin='$gender' WHERE id='$id'";
$result = mysqli_query($connect, $sql);

if ($result) {
    header("Location: ../index.php");
} else {
    echo "Erorr : Gagal";
}


?>