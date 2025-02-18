<?php
include "koneksi.php";

$judul = $_POST['judul'];
$pengarang = $_POST['pengarang'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];

$sql = "INSERT INTO buku (judul, pengarang, harga, stok) VALUES ('$judul','$pengarang','$harga','$stok')";

$query = mysqli_query($koneksi, $sql);
if ($query) {
    header("location:index.php?simpan=sukses");
} else {
    header("location:index.php?simpan=gagal");
}
?>