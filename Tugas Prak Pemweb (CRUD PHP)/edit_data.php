<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Speda_Edit_Mahasiswa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>  
</head>

<body>

<?php 

// import koneksi
require "config/connect.php";
// Ambil ID
$id = $_GET['id'];
// Query
$sql = "SELECT * FROM data_mahasiswa WHERE id='$id'";
$result = mysqli_query($connect, $sql);
$row = mysqli_fetch_assoc($result);

?>
    
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <!-- icon learning -->
            <img src="E_Learning.png" alt="E-Learning" width="30px" style="padding-right: 2px">
            <a class="navbar-brand" href="index.php">Speda</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <div style="padding-left: 20px;">
                    <a class="nav-link active" href="tambah_Mahasiswa.php">Tambah Mahasiswa</a>
                </div>
            </li>
        </ul>
        </div>
    </div>
</nav>

<!-- Container -->

 <div class="container mt-4">
        <h3>Update Data Mahasiswa</h3>
 </div>

<!-- Form -->
<div class="container mt-4">
    <form action="logic/update.php" method="POST">
      <!-- ID hidden -->
      <input type="hidden" name="id" value="<?= $row['id']; ?>" > 
      <div class="mb-3">
        <label for="nim" class="form-label">NIM</label>
        <input type="text" class="form-control" id="nim" placeholder="Masukkan NIM" name="nim" value="<?= $row['nim']; ?>">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Nama</label>
        <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama" name="nama" value="<?= $row['nama']; ?>">
      </div>
      <div class="mb-3 form-label">
        <input type="radio" class="form-check-input" id="laki" name="gender" value="<?= $row['gender'] = 'Laki-laki'; ?>" > 
        <label class="form-check-label" for="laki">Laki-Laki</label>
      </div>
      <div class="mb-3 form-label">
        <input type="radio" class="form-check-input" id="perempuan" name="gender" value="<?= $row['gender'] = 'Perempuan'; ?>">
        <label class="form-check-label" for="perempuan">Perempuan</label>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

</body>
</html>