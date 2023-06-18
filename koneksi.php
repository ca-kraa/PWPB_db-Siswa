<?php

$host = "localhost";
$user = "root";
$pass = "";
$name = "db_siswa";
$link = mysqli_connect($host,$user,$pass,$name);

if (!$link){
    die ("Koneksi Dengan Database Gagal : " .mysqli_connect_errno().
    " - " .mysqli_connect_error());
}
?>