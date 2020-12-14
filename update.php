<?php
include 'koneksi.php';
$id = $_POST['id'];
$gambar = $_POST['id'];
$nama = $_POST['nama'];
$jenis = $_POST['jenis'];
$suplier = $_POST['suplier'];
$modal =$_POST['modal'];
$harga = $_POST['harga'];
$jumlah = $_POST["jumlah"];
$nama_gambar = $_FILES['gambar']['name'];
$tmp_file = $_FILES['gambar']['tmp_name'];

if($nama_gambar!=null){

    $path = "image/".$nama_gambar;

    if (move_uploaded_file($tmp_file,  $path)) {
            
        mysqli_query($conn, "UPDATE barang SET gambar='$nama_gambar', nama=\"$nama\", jenis=\"$jenis\", suplier=\"$suplier\", modal='$modal', harga='$harga', jumlah='$jumlah' WHERE id='$id'");
    header("location:index2.php?pesan=update");

    } else {
        echo "Kemungkinan hacking!\n";
    }
}else {
    mysqli_query($conn, "UPDATE barang SET nama=\"$nama\", jenis=\"$jenis\", suplier=\"$suplier\", modal='$modal', harga='$harga', jumlah='$jumlah' WHERE id='$id'");
    header("location:index2.php?pesan=update");
}



?>