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
<h3>Input Barang Laku</h3>
<form action="simpan_laku.php" method="post">
<table border="0">
<tr>
<td><p>Tgl Jual</td>
<td>:</td>
<td><input name = "tanggal_jual" type = date><br></td>
</tr>
<tr>
	<td>Nama Barang</td>
	<td>:</td>
	<td>									
	<select name="nama_barang">
		<?php 
		include 'koneksi.php'; 
		$brg=mysqli_query($conn, "SELECT * FROM barang");
		while($data=mysqli_fetch_array($brg)){
			?>	
			<option value="<?php echo $data['nama']; ?>"><?php echo $data['nama'] ?></option>
			<?php 
		}
		?>
	</select>
</td>
</tr>
<tr>
<td><p>Harga Jual</td>
<td>:</td>
<td><input name = "harga_jual" type = number><br></td>
</tr>
<tr>
<td><p>Jumlah</td>
<td>:</td>
<td><input name = "jumlah" type = number><br></td>
</tr>
<tr>
<td><p></td>
<td></td>
<td>
<input type = "submit" value= "Simpan" name="simpan">
<input type = "reset" value= "Reset" name="reset"><br>
</td>
</tr>
</table>
<form>
</body>
</html>