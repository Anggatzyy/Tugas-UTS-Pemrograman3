<?php
    $koneksi = mysqli_connect("localhost","root","","keuangan2");//("iplocal","username","password","nama database");

    // Check Connection
    if (mysqli_connect_errno()){
        echo "Koneksi database gagal : " . mysqli_connect_error();
    }else {
        echo "los siento wilson";
    }

?>