<?php
    if (empty($_POST['nama']) || empty($_POST['email'])){
        header("location:redirect.php"); //mengarahkan ke redirect
    }
    else{
        echo "Nama : ".$_POST['nama']."<br>"; //Memunculkan nama yang diambil dari formlogin.php
        echo "Email : ".$_POST['email']."<br>"; //Memunculkan email yang diambil dari formlogin.php

        date_default_timezone_set('Asia/Jakarta'); //mengatur timezone
        echo date("m-F-Y, g:i:s a"); // menampilkan tanggal, bulan, tahun , serta waktu
    }
?>