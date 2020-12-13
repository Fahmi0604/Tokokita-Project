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
<?php
if(isset($_GET['pesan'])){
$pesan = $_GET['pesan'];
if($pesan == "input"){
echo "Data berhasil di input.";
}else if($pesan == "update"){
echo "Data berhasil di update.";
}else if($pesan == "hapus"){
echo "Data berhasil di hapus.";
}
}
?>
<br><br><a class="tombol" href="input_beli.php">+ Tambah Pembelian</a>
<h3>Data Pembelian</h3>
<table border="1" class="table">
<tr>
<th>No</th>
<th>Tgl Beli</th>
<th>Nama Barang</th>
<th>Harga Beli</th>
<th>Jumlah</th>
<th>Diskon</th>
<th>Total Harga</th>
<th>Opsi</th>
</tr>
<?php
include "koneksi.php";
$query_mysql = mysqli_query($conn, "SELECT * FROM barang_beli ORDER BY id DESC")or die(mysql_error());
$nomor = 1;
while($data = mysqli_fetch_array($query_mysql)){
?>
<tr>
<td><?php echo $nomor++; ?></td>
<td><?php echo date("d-m-Y", strtotime($data['tanggal_beli'])); ?></td>
<td><?php echo $data['nama_barang']; ?></td>
<td><?php echo $data['harga_beli']; ?></td>
<td><?php echo $data['jumlah']; ?></td>
<td><?php echo $data['diskon']; ?></td>
<td><?php echo number_format($data['total_harga']); ?></td>
<td>
<a href="edit_beli.php?id=<?php echo $data['id']; ?>">Edit</a> |
<a href="hapus_beli.php?id=<?php echo $data['id']; ?>" onclick="return confirm('Anda Yakin Akan Menghapus')">Hapus</a>
</td>
</tr>
<?php } ?>
</table>
<br/>
<a class="tombol" href="input.php">+ Tambah Stok Barang</a>
<h3>Data Stok Barang</h3>
<table border="1" class="table">
<tr>
<th>No</th>
<th>Nama Barang</th>
<th>Jenis</th>
<th>Supplier</th>
<th>Modal</th>
<th>Harga Jual</th>
<th>Jumlah</th>
<th>Opsi</th>
</tr>
<?php
include "koneksi.php";
$query_mysql = mysqli_query($conn, "SELECT * FROM barang ORDER BY id DESC")or die(mysql_error());
$nomor = 1;
while($data = mysqli_fetch_array($query_mysql)){
?>
<tr>
<td><?php echo $nomor++; ?></td>
<td><?php echo $data['nama']; ?></td>
<td><?php echo $data['jenis']; ?></td>
<td><?php echo $data['suplier']; ?></td>
<td><?php echo $data['modal']; ?></td>
<td><?php echo $data['harga']; ?></td>
<td><?php echo $data['jumlah']; ?></td>
<td>
<a href="edit.php?id=<?php echo $data['id']; ?>">Edit</a> |
<a href="hapus.php?id=<?php echo $data['id']; ?>" onclick="return confirm('Anda Yakin Akan Menghapus')">Hapus</a>
</td>
</tr>
<?php } ?>
</table>
<br><br><a class="tombol" href="input_laku.php">+ Tambah Penjualan</a>
<h3>Data Penjualan</h3>
<table border="1" class="table">
<tr>
<th>No</th>
<th>Tgl Jual</th>
<th>Nama Barang</th>
<th>Harga Jual</th>
<th>Jumlah</th>
<th>Opsi</th>
</tr>
<?php
include "koneksi.php";
$query_mysql = mysqli_query($conn, "SELECT * FROM barang_laku ORDER BY id DESC")or die(mysql_error());
$nomor = 1;
while($data = mysqli_fetch_array($query_mysql)){
?>
<tr>
<td><?php echo $nomor++; ?></td>
<td><?php echo date("d-m-Y", strtotime($data['tanggal_jual'])); ?></td>
<td><?php echo $data['nama_barang']; ?></td>
<td><?php echo $data['harga_jual']; ?></td>
<td><?php echo $data['jumlah']; ?></td>
<td>
<a href="edit_laku.php?id=<?php echo $data['id']; ?>">Edit</a> |
<a href="hapus_laku.php?id=<?php echo $data['id']; ?>" onclick="return confirm('Anda Yakin Akan Menghapus')">Hapus</a>
</td>
</tr>
<?php } ?>
</table>
</body>
</html>
