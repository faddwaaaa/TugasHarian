<?php
include "koneksi.php";

$no = $_POST['no'];
$judul = $_POST['judul'];
$pengarang = $_POST['pengarang'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];

$sql = "UPDATE buku SET judul = '$judul', pengarang = '$pengarang', harga = '$harga', stok = '$stok' WHERE no = '$no' ";

$query = mysqli_query($koneksi, $sql);

if ($query) {
    header("location:index.php?edit=sukses");
} else {
    header("location:index.php?edit=gagal");
}
?>