<html>
<head>
<title>-- Pendataan Barang --</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="judul">
<h1>-- Toko Kita --</h1>
<h3>Sistem Penjualan Barang</h3>
</div>
<br/>
<a href="index.php">Lihat Semua Data</a>
<br/>
<h3>Edit Barang</h3>
<?php
include "koneksi.php";
$id = $_GET['id'];
$query_mysql = mysqli_query($conn, "SELECT * FROM barang_beli WHERE id='$id'")or die(mysql_error());
$nomor = 1;
while($data = mysqli_fetch_array($query_mysql)){
?>
<form action="update_beli.php" method="post">
<table>
<tr>
<td>Nama</td>
<td>:</td>
<td>
<input type="hidden" name="id" value="<?php echo $data['id'] ?>">
<input type="text" name="nama_barang" value="<?php echo $data['nama_barang'] ?>" readonly>
</td>
</tr>
<tr>
<td><p>Harga Jual</td>
<td>:</td>
<td><input name = "harga_beli" type = number value="<?php echo $data['harga_beli'] ?>"><br></td>
</tr>
<tr>
<td><p>Jumlah</td>
<td>:</td>
<td><input name = "jumlah" type = number value="<?php echo $data['jumlah'] ?>"><br></td>
</tr>
<tr>
<td></td>
<td></td>
<td><input type="submit" value="Simpan"></td> </tr>
</table>
</form>
<?php } ?>
</body>