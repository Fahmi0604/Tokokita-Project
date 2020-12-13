<?php
include 'koneksi.php';
$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM supplier WHERE id='$id'")or die(mysql_error());
header("location:index4.php?pesan=hapus");
?>