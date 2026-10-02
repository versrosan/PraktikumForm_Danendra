<?php
    
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "belajar_php";

    $db = mysqli_connect($hostname, $username, $password, $database);
    if(!$db){
        die("Koneksi Gagal: " . mysqli_connect_error());
    } 
    echo "Berhasil Dibuat!";
?>