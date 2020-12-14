<?php include 'koneksi.php'; 
$nama = $_POST['nama']; 
$jenis = $_POST['jenis']; 
$suplier = $_POST['suplier']; 
$modal =$_POST['modal']; 
$harga = $_POST['harga'];
$jumlah = $_POST["jumlah"];
$nama_gambar = $_FILES['gambar']['name'];
$tmp_file = $_FILES['gambar']['tmp_name'];

$nama_gambar2 = "default.jpg";

if($nama_gambar != null) {
    
    $path = "image/".$nama_gambar;

    if (move_uploaded_file($tmp_file,  $path)) {
        
        mysqli_query($conn, "INSERT INTO barang VALUES(0,'$nama_gambar','$nama','$jenis','$suplier','$modal','$harga','$jumlah')");
        header("location:index2.php?pesan=input"); // Redirectke halaman index.php

    } else {
        echo "Kemungkinan hacking!\n";
    }
}else {
    
    mysqli_query($conn, "INSERT INTO barang VALUES(0, '$nama_gambar2', '$nama','$jenis','$suplier','$modal','$harga','$jumlah')");
    header("location:index2.php?pesan=input");

}


?>