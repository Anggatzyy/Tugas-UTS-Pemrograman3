<!DOCTYPE html>
<html>
<head>
    <title>Tambah User</title>
</head>
<?php
    //koneksi database
    include 'koneksi.php';
    //menangkap data yang dikirim dari form
    if(!empty($_POST['save'])){

        $nama = $_POST['nama'];
        $password = $_POST['Password'];
        $level = $_POST['level'];
        $status = $_POST['status'];
        //menginput data ke database
        $a = mysqli_query($koneksi,"insert into user values('','$nama','$password','$level','$status')");
        if($a){
            //mengalihkan halaman kembali
            header("location:list_user.php");
        }else{
            echo mysqli_error();
        }
    }
?>

<body>
    <h2>Pemograman 3 2023</h2>
    <br>
    <a href="list_user.php">Kembali</a>
    <br><br>
    <h3>TAMBAH DATA USER</h3>
    <form method="POST">
        <table>
            <tr>
                <td>Nama</td>
                <td><Input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td>Level</td>
                <td><select name="level" id="">
                    <option value="">-----Pilih</option>
                    <option value="1">Admin</option>
                    <option value="2">Staff</option>
                    <option value="3">Supervisor</option>
                    <option value="4">Manager</option>
                </select>
            </td>
            </tr>
            <tr>
                <td>Status</td>
                <td><select name="status" id="">
                    <option value="">-----Pilih</option>
                    <option value="1">Aktif</option>
                    <option value="0">Tidak Aktif</option>
                </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="save"></td>
            </tr>
        </table>
    </form>
</body>
</html>