<?php
include 'koneksi.php';
$id = $_GET['id'];
$nama;
$query_mysql = mysqli_query($conn, "SELECT * FROM barang WHERE id='$id'")or die(mysqli_error());

while($data = mysqli_fetch_array($query_mysql)){
    $nama = $data['barang']; 
    echo $nama;
}

if($nama != null){
    unlink("image/".$nama);
}



mysqli_query($conn, "DELETE FROM barang WHERE id='$id'")or die(mysql_error());
header("location:index2.php?pesan=hapus");
?>