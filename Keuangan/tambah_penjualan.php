<!DOCTYPE html>
<html>
<head>
    <title>Tambah Transaksi</title>
</head>
<?php
    //koneksi database
    include 'koneksi.php';
    //menangkap data yang dikirim dari form
    if(!empty($_POST['save'])){  
        $tgl_penjualan = $_POST['tgl_penjualan'];
        $nama_member = $_POST['nama_member'];
        $total_harga = $_POST['total_harga'];
        //menginput data ke database
        $a = mysqli_query($koneksi,"insert into penjualan values('','$tgl_penjualan','$nama_member','$total_harga','$tgl_penjualan')");
        if($a){
            //mengalihkan halaman kembali
            header("location:list_penjualan.php");
        }else{
            echo mysqli_error();
        }
    }
?>
<body>
    <h2>Pemrograman 1 2023</h2>
    <br>
    <a href="list_penjualan.php">Kembali</a>
    <br>
    <h3>TAMBAH DATA PENJUALAN</h3>
    <form method="POST">
        <table>
            <tr>
                <td>Tanggal Penjualan</td>
                <td><input type="date" name="tgl_penjualan"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama_member"></td>
            </tr>
            <tr>
                <td>Total Harga</td>
                <td><input type="number" name="total_harga"></td>
            </tr>
                <td></td>
                <td><input type="submit" name="save"></td>
            </tr>
        </table>
    </form>
</body>
</html>