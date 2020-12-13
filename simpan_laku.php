<?php include 'koneksi.php'; 

$tanggal_jual = $_POST['tanggal_jual']; 
$nama_barang = $_POST['nama_barang']; 
$harga_jual = $_POST['harga_jual'];
$jumlah = $_POST["jumlah"];

$dt=mysqli_query($conn,"SELECT * from barang where nama='$nama_barang'");
$data=mysqli_fetch_array($dt);
$sisa=$data['jumlah']-$jumlah;
mysqli_query($conn,"UPDATE barang set jumlah='$sisa' where nama='$nama_barang'");

mysqli_query($conn, "INSERT INTO barang_laku VALUES(0,'$tanggal_jual','$nama_barang','$harga_jual','$jumlah')");
header("location:index3.php?pesan=input");
?>