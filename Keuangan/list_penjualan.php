<!DOCTYPE html>
<html>
<head>
    <title>List Transaksi</title>
</head>
<body>
    <h2>Pemograman 1 2023</h2>
    <br>
    <a href="../Home.html">Home</a>
    <br>
    <a href="tambah_penjualan.php">+ Tambah Penjualan</a>
    <br>
    <table border="1">
        <tr>
            <th>Id</th>
            <th>Tanggal Penjualan</th>
            <th>Nama Pelanggan</th>
            <th>Total Harga</th>
            <th>opsi</th>
        </tr>
        <?php
            include 'koneksi.php';
            $no = 1;
            $data = mysqli_query($koneksi,"Select * From penjualan");
            while($d = mysqli_fetch_array($data)){
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $d['tgl_penjualan'];?></td>
            <td><?php echo $d['nama_member'];?></td>
            <td><?php echo $d['total_harga'];?></td>
            <td>
                <a href="edit_penjualan.php?id=<?php echo $d; ?>">Edit</a>
                <a href="hapus_penjualan.php?id=<?php echo $d; ?>">Hapus</a>
            </td>
        </tr>
        <?php
            }
            ?>
    </table>
</body>
</html>