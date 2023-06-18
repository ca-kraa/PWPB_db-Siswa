<?php

include 'koneksi.php';

if (isset($_POST['input'])) {

    $nisn = $_POST['nisn'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['alamat'];
    $alamat = $_POST['alamat'];

    $query = "INSERT INTO biodata VAlUES (NULL ,'$nisn','$nama','$kelas','$jurusan','$alamat' )";
    $result = mysqli_query($link, $query);

    if(!$result){
        die ("Query gagal dijalankan: " .mysqli_errno($link).
        " - ".mysqli_error($link));
    }
}

header("location:index.php")
?>