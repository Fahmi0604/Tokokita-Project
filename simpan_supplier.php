<?php include 'koneksi.php'; 
$nama = $_POST['nama_supplier']; 
$telp = $_POST['no_telp']; 
$alamat =$_POST['alamat']; 
mysqli_query($conn, "INSERT INTO supplier VALUES( 0, '$nama' , '$telp' , '$alamat')");
header("location:index.php?pesan=input");
?>