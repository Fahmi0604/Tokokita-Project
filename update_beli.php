<?php
include 'koneksi.php';
$id = $_POST['id'];
$nama_barang = $_POST['nama_barang'];
$harga_beli = $_POST['harga_beli'];
$jumlah = $_POST["jumlah"];
$diskon = $_POST['diskon'];

$hitung_diskon = ($harga_beli * $jumlah) * $diskon / 100;

$total_harga = ($harga_beli * $jumlah) - $hitung_diskon;

mysqli_query($conn, "UPDATE barang_beli SET nama_barang='$nama_barang',harga_beli='$harga_beli', jumlah='$jumlah', diskon='$diskon', total_harga='$total_harga' WHERE id='$id'");
header("location:index.php?pesan=update");
?>