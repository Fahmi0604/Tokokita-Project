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
    <a href="index.php">Lihat Semua Data</a>
    <br/>

    <h3>Input Barang</h3>
    <form action="simpan_supplier.php" method="post">
        <table border="0">
            <tr>
                <td><p>Nama Supplier</td>
                <td>:</td>
                <td><input name = "nama_supplier" type = text><br></td>
            </tr>  
            <tr>
                <td><p>No Telp</td>
                <td>:</td>
                <td><input name = "no_telp" type = text><br></td>
            </tr>
            <tr>
                <td><p>Alamat</td>
                <td>:</td>
                <td><input name = "alamat" type = textarea ><br></td>
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
</body>
</html>