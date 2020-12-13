<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>-- Pendataan Barang --</title>
<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<!-- <link rel="stylesheet" type="text/css" href="assets/js/jquery-ui/jquery-ui.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap.min.css">
	<script type="text/javasrcipt" src="assets/js/jquery_datatables.js"></script>
	<script type="text/javascript" src="assets/js/jquery.js"></script>
	<script type="text/javascript" src="assets/js/jquery.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.js"></script>
	<script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.js"></script>	 -->

	<!-- online source -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
    	$('#example').DataTable();
		} );
	</script>

</head>
<body>

<div class="judul">
<button class="openbtn" onclick="openNav()">&#9776;</button>
<h1>-- Toko Kita --</h1>
<br>
<h3>Sistem Penjualan Barang</h3>
</div>

<div class="main" id="main">

	<div id="mySidebar" class="sidebar">
	<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
	<a href="#">About</a>
	<a href="#">Services</a>
	<a href="#">Clients</a>
	<a href="#">Contact</a>
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

	<div class="card">
		<div class="card-header">
			<h3> Data Pembelian </h3>
		</div>
		<div class="card-body">
			<a class="btn btn-primary" href="input_beli.php">+ Tambah Pembelian</a>
			<br><br>
			
			<table border="1" id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
				<thead>
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
				</thead>

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
					<a class="btn btn-warning" href="edit_beli.php?id=<?php echo $data['id']; ?>">Edit</a> |
					<a class="btn btn-danger" href="hapus_beli.php?id=<?php echo $data['id']; ?>" onclick="return confirm('Anda Yakin Akan Menghapus')">Hapus</a>
					</td>
				</tr>

			<?php } ?>

			<tfoot>
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
			</tfoot>
			</table>
		</div>
	</div>

	<br/>
	<a class="tombol" href="input.php">+ Tambah Stok Barang</a>
	<a style="margin-bottom:10px" href="lap_barang.php" target="_blank" class="btn btn-default pull-right"><span class='glyphicon glyphicon-print'></span>  Cetak</a>
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

	<br><br><a class="tombol" href="input_supplier.php">+ Tambah Supplier</a>
	<h3>Data Penjualan</h3>

	<table border="1" class="table">
		<tr>
			<th>ID Supplier</th>
			<th>Nama Supplier</th>
			<th>No Telp</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>

	<?php
	include "koneksi.php";
	$query_mysql = mysqli_query($conn, "SELECT * FROM supplier ORDER BY id DESC")or die(mysql_error());
	$nomor = 1;
	while($data = mysqli_fetch_array($query_mysql)){
	?>
		<tr>
			<td><?php echo $data['id'] ?></td>
			<td><?php echo $data['nama_supplier']; ?></td>
			<td><?php echo $data['no_telp']; ?></td>
			<td><?php echo $data['alamat']; ?></td>
			<td>
			<a href="edit_supplier.php?id=<?php echo $data['id']; ?>">Edit</a> |
			<a href="hapus_supplier.php?id=<?php echo $data['id']; ?>" onclick="return confirm('Anda Yakin Akan Menghapus')">Hapus</a>
			</td>
		</tr>
	<?php } ?>
	</table>
</div>

<script>
function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>

</body>
</html>
