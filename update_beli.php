<?php
include 'koneksi.php';
$id = $_POST['id'];
$nama_barang = $_POST['nama_barang'];
$harga_beli = $_POST['harga_beli'];
$jumlah = $_POST["jumlah"];

mysqli_query($conn, "UPDATE barang_beli SET nama_barang='$nama_barang',harga_beli='$harga_beli', jumlah='$jumlah' WHERE id='$id'");
header("location:index.php?pesan=update");
?>