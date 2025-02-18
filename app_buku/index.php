<?php
include "koneksi.php"; 
$sql = "SELECT * FROM buku";
$query = mysqli_query($koneksi, $sql)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Buku</title>
</head>
<body>
    <h1>Data Buku</h1>

    <table border="1">
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Pengarang</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Aksi</th>
        </tr>

        <?php
        while($buku = mysqli_fetch_assoc($query)) {
            echo "<tr>";
            echo "<td>" . $buku['no'] . "</td>";
            echo "<td>" . $buku['judul'] . "</td>";
            echo "<td>" . $buku['pengarang'] . "</td>";
            echo "<td>" . $buku['harga'] . "</td>";
            echo "<td>" . $buku['stok'] . "</td>";
            echo "<td>";
        }
        ?>

    </table>
</body>
</html>