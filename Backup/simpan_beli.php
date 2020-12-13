<?php include 'koneksi.php'; 

$tanggal_beli = $_POST['tanggal_beli']; 
$nama_barang = $_POST['nama_barang']; 
$harga_beli = $_POST['harga_beli'];
$jumlah = $_POST["jumlah"];
$diskon = $_POST["diskon"];

$dt=mysqli_query($conn,"SELECT * from barang where nama='$nama_barang'");
$data=mysqli_fetch_array($dt);
$sisa=$data['jumlah'] + $jumlah;
mysqli_query($conn,"UPDATE barang set jumlah='$sisa' where nama='$nama_barang'");

$hitung_diskon = ($harga_beli * $jumlah) * $diskon / 100;

$total_harga = ($harga_beli * $jumlah) - $hitung_diskon;

mysqli_query($conn, "INSERT INTO barang_beli VALUES(0,'$tanggal_beli','$nama_barang','$harga_beli','$jumlah','$diskon','$total_harga')");
header("location:index.php?pesan=input");
?>