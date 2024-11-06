<?php
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Penjualan</title>
</head>
<body>
    <table border="1">
        <caption>Data Penjualan</caption>
        <tr>
            <th>id</th>
            <th>tanggal penjualan</th>
            <th>nama</th>
            <th>harga</th>
            <th>jumlah terjual</th>
            <th>total penjualan</th>
        </tr>

<?php
$query = "SELECT * FROM table_barang";
$result = $mysqli->query($query);
$id = 0;
 while ($row = $result->fetch_assoc()) {
    $id++;
    ?>
    <tr>
            <td><?= $id;?></td>
            <td><?= $row['tanggal_penjualan']; ?></td>
            <td><?= $row['nama_produk']; ?></td>
            <td><?= $row['harga']; ?></td>
            <td><?= $row['jumlah_produk']; ?></td>
            <td><?= $row['total_produk']; ?></td>
        </tr>
    <?php 
 }
    ?>
    </table>
</body>
</html>