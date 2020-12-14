<html>
<head>
    <title>-- Pendataan Barang --</title>
    <link rel="stylesheet" type="text/css" href="style_edit.css">
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

        <a class="btn btn-primary" href="index2.php">Lihat Semua Data</a>
        <br/>

        <div class="card">
            <div class="card-header">
            <h3>Edit Barang</h3>
            </div>

            <div class="card-body">
                <?php
                include "koneksi.php";
                $id = $_GET['id'];
                $query_mysql = mysqli_query($conn, "SELECT * FROM barang WHERE id='$id'")or die(mysql_error());
                $nomor = 1;
                while($data = mysqli_fetch_array($query_mysql)){
                ?>
                <form action="update.php" method="post" enctype="multipart/form-data">
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
                    <td>Supplier</td>
                    <td>:</td>
                    <td>
                    <select name="suplier">
                        <?php 
                        include 'koneksi.php'; 
                        $supplier = mysqli_query($conn, "SELECT * FROM supplier");
                        while($data1=mysqli_fetch_array($supplier)){
                            ?>	
                            <option value="<?php echo $data1['nama_supplier']; ?>"><?php echo $data1['nama_supplier'] ?></option>
                            <?php 
                        }
                        ?>
                    </select>
                    </td>
                </tr>
                <tr>
                <td><p>Modal</td>
                <td>:</td>
                <td><input name="modal" type ="number" value="<?php echo $data['modal'] ?>"><br></td>
                </tr>
                <tr>
                <td><p>Harga Jual</td>
                <td>:</td>
                <td><input name="harga" type ="number" value="<?php echo $data['harga'] ?>"><br></td>
                </tr>
                <tr>
                <td><p>Jumlah</td>
                <td>:</td>
                <td><input name="jumlah" type ="number" value="<?php echo $data['jumlah'] ?>"><br></td>
                </tr>
                <tr>
                <td>Upload Gambar</td>
                <td>:</td>
                <td>
                <input type="file" name="gambar" value="<?php echo $data['gambar'] ?>">
                </td>
                </tr>
                <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="Simpan"></td> </tr>
                </table>
                </form>
            </div>
        </div>
        <?php } ?>
</body>