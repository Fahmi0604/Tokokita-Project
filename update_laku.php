<?php
include 'koneksi.php';
$id = $_POST['id'];
$nama_barang = $_POST['nama_barang'];
$harga_jual = $_POST['harga_jual'];
$jumlah = $_POST["jumlah"];

mysqli_query($conn, "UPDATE barang_laku SET nama_barang='$nama_barang',harga_jual='$harga_jual', jumlah='$jumlah' WHERE id='$id'");
header("location:index3.php?pesan=update");
?>