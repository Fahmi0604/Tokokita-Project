<?php
include 'koneksi.php';
$id = $_POST['id'];
$nama = $_POST['nama_supplier'];
$notelp = $_POST['no_telp'];
$alamat = $_POST["alamat"];

mysqli_query($conn, "UPDATE supplier SET nama_supplier='$nama',no_telp='$notelp', alamat='$alamat' WHERE id='$id'");
header("location:index4.php?pesan=update");
?>