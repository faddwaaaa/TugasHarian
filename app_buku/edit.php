<?php
include "koneksi.php";

$no = $_GET['no'];
$sql = "SELECT * FROM buku WHERE no = '$no' ";
$query = mysqli_query($koneksi, $sql);

while($buku = mysqli_fetch_assoc($query)) {

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>
<body>
    <h1>Edit Data</h1>
    <form action="proses_edit.php" method="POST">
        <input type="hidden" name="no" value="<?= $buku['no']; ?>">
        <label>Judul</label>
        <input type="text" name="judul" value="<?= $buku['judul']; ?>"><br>
        <label>Pengarang</label>
        <input type="text" name="pengarang" value="<?= $buku['pengarang']; ?>"><br>
        <label>Harga</label>
        <input type="number" name="harga" value="<?= $buku['harga']; ?>"><br>
        <label>Stok</label>
        <input type="number" name="stok" value="<?= $buku['stok']; ?>"><br>
        <input type="submit" value="Simpan" name="simpan">
    </form>
</body>
</html>

<?php
}
?>