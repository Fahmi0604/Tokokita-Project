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
$query_mysql = mysqli_query($conn, "SELECT * FROM barang WHERE id='$id'")or die(mysql_error());
$nomor = 1;
while($data = mysqli_fetch_array($query_mysql)){
?>
<form action="update.php" method="post">
<table>
<tr>
<td>Nama</td>
<td>:</td>
<td>
<input type="hidden" name="id" value="<?php echo $data['id'] ?>">
<input type="text" name="nama" value="<?php echo $data['nama'] ?>">
</td>
</tr>
<tr>
<td>Jenis Barang</td>
<td>:</td>
<td><select name="jenis" id="jenis">
<option value="">-- Pilih --</option>
<option value="Makanan"<?php if ($data['jenis']=="Makanan") { echo "selected=\"selected\""; } ?>>Makanan
</option>
<option value="Minuman"<?php if ($data['jenis']=="Minuman") { echo "selected=\"selected\""; } ?>>Minuman</option>
</select></td>
</tr>
<tr>
<td>Suplier</td>
<td>:</td>
<td>
<input type="text" name="suplier" value="<?php echo $data['suplier'] ?>">
</td>
</tr>
<tr>
<td><p>Modal</td>
<td>:</td>
<td><input name = "modal" type = number value="<?php echo $data['modal'] ?>"><br></td>
</tr>
<tr>
<td><p>Harga Jual</td>
<td>:</td>
<td><input name = "harga" type = number value="<?php echo $data['harga'] ?>"><br></td>
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