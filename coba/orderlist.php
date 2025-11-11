<?php 

include "config/koneksi.php";

if (isset($_GET['CustomerID'])) {
    $id = $_GET['CustomerID'];
} else {
    $id = null;
    echo "CustomerID belum dikirim melalui URL.";
}

$sql = "SELECT * FROM orders WHERE CustomerID='$id'";
$result = mysqli_query($koneksi, $sql);
$no = 1;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order List</title>
</head>
<body>
    <h2>Order List</h2>

    <table border="1px">
        <thead>
            <tr>
                <th>No</th>
                <th>Order ID</th>
                <th>Order Date</th>
                <th>Order Detail</th>
            </tr>
        </thead>
        <tbody>
            <?php if (mysqli_num_rows($result) > 0) : ?>
                <?php while ($row = mysqli_fetch_assoc($result)) : ?> 
                    <tr>
                        <th><?= $no++ ?></th>
                        <td><?= $row['OrderID']?></td>
                        <td><?= $row['OrderDate'] ?></td>
                        <td><a href="orderdetail.php?OrderID=<?= $row['OrderID'];?>">detail</a></td>
                    </tr>
                <?php endwhile; ?>
                <?php else : ?>
                    <tr>
                        <td colspan="4">Tidak ada Data</td>
                    </tr>
            <?php endif; ?>
        </tbody>
    </table>
    
</body>
</html>