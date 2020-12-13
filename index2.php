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
	<a href="index.php">Data Pembelian</a>
	<a href="index2.php">Data Barang</a>
	<a href="index3.php">Data Penjualan</a>
    <a href="index4.php">Data Supplier</a>
    <a style="margin-bottom:10px" href="lap_barang.php" target="_blank" ><span class='glyphicon glyphicon-print'></span>  Cetak</a>
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
			<h3> Data Barang </h3>
		</div>
		<div class="card-body">
            <a class="btn btn-primary" href="input.php">+ Tambah Stok Barang</a>
            <br><br>
            
            <table border="1" id="example" class="table table-striped table-bordered">
                <thead>
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
                </thead>
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
                    <a class="btn btn-warning" href="edit.php?id=<?php echo $data['id']; ?>">Edit</a> |
                    <a class="btn btn-danger" href="hapus.php?id=<?php echo $data['id']; ?>" onclick="return confirm('Anda Yakin Akan Menghapus')">Hapus</a>
                    </td>
                </tr>
            <?php } ?>

                <tfoot>
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
                </tfoot>

            </table>
		</div>
	</div>
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
