<?php
        echo "Nama : ".$_POST['nama']."<br>"; //Memunculkan nama yang diambil dari inputbiodata.php
        echo "NPM : ".$_POST['npm']."<br>"; //Memunculkan npm yang diambil dari inputbiodata.php
        echo "Asal Kota : ".$_POST['askot']."<br>"; //Memunculkan asal kota yang diambil dari inputbiodata.php
        echo "Program Studi : ".$_POST['prodi']."<br>"; //Memunculkan program studi yang diambil dari inputbiodata.php
        echo "Hobi : ".$_POST['hobi']."<br>"; //Memunculkan hobi yang diambil dari inputbiodata.php
        echo "Email : ".$_POST['email']."<br>"; //Memunculkan email yang diambil dari inputbiodata.php

        date_default_timezone_set('Asia/Jakarta'); //mengatur timezone
        echo date("m-F-Y, g:i:s a"); // menampilkan tanggal, bulan, tahun , serta waktu
?>