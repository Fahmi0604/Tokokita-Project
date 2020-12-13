<html>
<head>
    <title>-- Pendataan Supplier --</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="judul">
        <h1>-- Toko Kita --</h1>
        <h3>Sistem Penjualan Barang</h3>
    </div>
    
    <br/>
    <a href="index4.php">Lihat Semua Data</a>
    <br/>
    <h3>Edit Barang</h3>

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
</body>