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
        
        $tanggal_transaksi = $_POST['tgl_transaksi'];
        $no_transaksi = $_POST['no_transaksi'];
        $jenis_transaksi = $_POST['jenis_transaksi'];
        $penjualan_id = $_POST['penjualan_id'];
        $id_barang = $_POST['id_barang'];
        $jumlah_transaksi = $_POST['jumlah_transaksi'];
        $id_member = $_POST['id_member'];
        $total = $_POST['total'];
        //menginput data ke database
        $a = mysqli_query($koneksi,"insert into transaksi values('','$tanggal_transaksi','$no_transaksi','$jenis_transaksi','$penjualan_id','$id_barang','$jumlah_transaksi','$id_member','$total')");
        if($a){
            //mengalihkan ke halaman kembali
            header("location:list_transaksi.php");
        }else{
            echo mysqli_error();
        }
    }
?>
<body>
    <h2>Pemograman 1 2023</h2>
    <br>
    <a href="list_transaksi.php">Kembali</a>
    <br>
    <h3>TAMBAH DATA TRANSAKSI</h3>
    <form method="POST">
        <table>
            <tr>
                <td>Tanggal Transaksi</td>
                <td><input type="date" name="tgl_transaksi"></td>
            </tr>
            <tr>
                <td>Nomor Transaksi</td>
                <td><input type="number" name="no_transaksi"></td>
            </tr>
            <tr>
                <td>Jenis Transaksi</td>
                <td><input type="text" name="jenis_transaksi"></td>
            </tr>
            <tr>
                <td>Penjualan id</td>
                <td><input type="text" name="penjualan_id"></td>
            </tr>
            <tr>
                <td>Id Barang</td>
                <td><input type="number" name="id_barang"></td>
            </tr>
            <tr>
                <td>Jumlah Transaksi</td>
                <td><input type="number" name="jumlah_transaksi"></td>
            </tr>
            <tr>
                <td>Member id</td>
                <td><input type="number" name="id_member"></td>
            </tr>
            <tr>
                <td>total</td>
                <td><input type="number" name="total"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="save"></td>
            </tr>
        </table>
    </form>
</body>
</html>