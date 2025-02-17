<?php
include "koneksi.php";
$no = $_GET['no'];
$sql = "SELECT * FROM barang WHERE no = '$no'";
$query = mysqli_query($koneksi, $sql);

while ($barang = mysqli_fetch_assoc($query)) {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Edit Data</h1>
     
    <form action="proses_edit.php" method = "GET">

        <input type="hidden" name="no" value="<?= $barang['no'] ?>" >

        <label for="">Nama</label>
        <input type="text" name="nama" value="<?= $barang['nama'] ?>"><br>

        <label for="">Harga</label>
        <input type="number" name="harga" value="<?= $barang['harga'] ?>"><br>

        <label for="">Stok</label>
        <input type="number" name="stok" value="<?= $barang['stok'] ?>"><br>
        <input type="submit" value="Edit">
    </form>
</body>
</html>
<?php } ?>