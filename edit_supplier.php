<html>
<head>
    <title>-- Pendataan Supplier --</title>
    <link rel="stylesheet" type="text/css" href="style_input.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
</head>
<body>
    <div class="judul">
        <h1>-- Toko Kita --</h1>
        <br>
        <h3>Sistem Penjualan Barang</h3>
    </div>
    
    <br/>
    <a class="btn btn-primary" href="index4.php">Lihat Semua Data</a>
    <br/>

    <div class="card">
        <div class="card-header">
            <h3>Edit Barang</h3>
        </div>

        <div class="card-body">

            <?php
            include "koneksi.php";
            $id = $_GET['id'];
            $query_mysql = mysqli_query($conn, "SELECT * FROM supplier WHERE id='$id'")or die(mysql_error());
            $nomor = 1;
            while($data = mysqli_fetch_array($query_mysql)){
            ?>

            <form action="update_supplier.php" method="post">
                <table>
                    <tr>
                        <td>Nama Supplier</td>
                        <td>:</td>
                        <td>
                        <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                        <input type="text" name="nama_supplier" value="<?php echo $data['nama_supplier'] ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>No Telp</td>
                        <td>:</td>
                        <td>
                        <input type="text" name="no_telp" value="<?php echo $data['no_telp'] ?>">
                        </td>
                    </tr>
                    <tr>
                        <td><p>Alamat</td>
                        <td>:</td>
                        <td><input name = "alamat" type = textarea value="<?php echo $data['alamat'] ?>"><br></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td><input type="submit" value="Simpan"></td>
                    </tr>
                </table>
            </form>
            <?php } ?>
        </div>
    </div>
    
</body>