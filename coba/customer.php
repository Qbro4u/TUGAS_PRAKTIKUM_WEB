<?php 

include "config/koneksi.php";

$sql = "SELECT * FROM customers";
$result = mysqli_query($koneksi, $sql);

$no = 1;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Customer</title>
</head>
<body>
    <h3>DAFTAR CUSTOMER</h3>
    <table border="1px">
        <thead>
            <tr>
                <th>No</th>
                <th>Customer ID</th>
                <th>Company Name</th>
                <th>Action</th>
            </tr>
            
        </thead>
        <tbody>
            <?php if (mysqli_num_rows($result) > 0) : ?>
                <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $row['CustomerID'] ?></td>
                        <td><?= $row['CompanyName'] ?></td>
                        <td><a href="orderlist.php?CustomerID=<?= $row['CustomerID'];?>">Order</a></td>
                    </tr>
                <?php endwhile;?>
            <?php endif;?>
        </tbody>

    </table>
</body>
</html>