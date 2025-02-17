<?php
include "koneksi.php";
$username = $_POST['username'];
$password = $_POST['password'];
$sql = "SELECT * From user WHERE username = '$username' and password ='$password'";

$query = mysqli_query($koneksi, $sql);
$check = mysqli_num_rows($query);
if ($check>0) {
    header ("location:index.php?login=sukses");
} else {
    header ("location:login.php?login=gagal");
}
?>