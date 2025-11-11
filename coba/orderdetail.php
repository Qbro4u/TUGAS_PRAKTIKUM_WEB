<?php 

include "config/koneksi.php";

$id = $_GET['OrderID'];
$sql = "SELECT orderdetails.*, products.ProductName, products.UnitPrice
        FROM orderdetails
        INNER JOIN products ON orderdetails.ProductID = products.ProductID
        WHERE orderdetails.OrderID = '$id'";
$result = mysqli_query($koneksi, $sql);
$no = 1;
$total = 0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Details</title>
</head>
<body>
    <h3>Order Details</h3>
    <table border="1px">
        <thead>
            <tr>
                <th>No</th>
                <th>Order ID</th>
                <th>Product Name</th>
                <th>Unit Price</th>
                <th>Quantity</th>
                <th>Discount</th>
                <th>Sub Total</th>
                <th>Total Harga</th>
            </tr>
        </thead>
        <tbody>
            <?php if (mysqli_num_rows($result) > 0 ) : ?>
                <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                    <tr>
                       <th><?= $no++ ?></th> 
                       <td><?= $row['ProductID']?></td>
                       <td><?= $row['ProductName']?></td>
                       <td><?= $row['UnitPrice']?></td>
                       <td><?= $row['Quantity']?></td>
                       <td><?= $row['Discount']?></td>
                       <?php $subtotal = $row['UnitPrice'] * $row['Quantity'] - (($row['UnitPrice'] * $row['Quantity']) * $row['Discount']) ?>
                       <td><?= $subtotal?></td>
                       <td><?= $total+= $subtotal?></td>
                    </tr>
                <?php endwhile; ?>
            <?php endif; ?>
        </tbody>
    </table>
</body>
</html>