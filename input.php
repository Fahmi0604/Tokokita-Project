<html>
<head>
    <title>-- Toko Kita Pendataan Barang --</title>
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

    <a class="btn btn-primary" id="button" href="index2.php">Lihat Semua Data</a>
    <br/>

    <div class="card" >
        <div class="card-header">
        <h3>Input Barang</h3>
        </div>

        <div class="card-body">
        <form action="simpan.php" method="post" enctype="multipart/form-data">
            <table border="0">
                <tr>
                    <td><p>Nama</td>
                    <td>:</td>
                    <td><input name = "nama" type = text><br></td>
                </tr>
                <tr>
                    <td><p>Jenis Barang</td>
                    <td>:</td>
                    <td>
                    <select name = "jenis">
                    <option>Makanan
                    <option>Minuman
                    </select><br>
                    </td>
                </tr>

                <tr>
				<td><p>Supplier</td>
				<td>:</td>
				<td>									
				<select name="suplier">
					<?php 
					include 'koneksi.php'; 
					$supplier = mysqli_query($conn, "SELECT * FROM supplier");
					while($data=mysqli_fetch_array($supplier)){
						?>	
						<option value="<?php echo $data['nama_supplier']; ?>"><?php echo $data['nama_supplier'] ?></option>
						<?php 
					}
					?>
				</select>
				</td>
                </tr>
                
                <tr>
                    <td><p>Modal</td>
                    <td>:</td>
                    <td><input name = "modal" type = number><br></td>
                </tr>
                <tr>
                    <td><p>Harga Jual</td>
                    <td>:</td>
                    <td><input name = "harga" type = number><br></td>
                </tr>
                <tr>
                    <td><p>Jumlah</td>
                    <td>:</td>
                    <td><input name = "jumlah" type = number><br></td>
                </tr>
                <tr>
                    <td><p>Upload Gambar</td>
                    <td>:</td>
                    <td><input type="file" name="gambar"><br></td>
                </tr>
                <tr>
                    <td><p></td>
                    <td></td>
                    <td>
                    <input type = "submit" value= "Kirim" name="kirim">
                    <input type = "reset" value= "Reset" name="reset"><br>
                    </td>
                </tr>
            </table>
        <form>
        </div>
    </div>
</body>
</html>