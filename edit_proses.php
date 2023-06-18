<?php
if (isset($_POST['edit'])) {
    include("koneksi.php");

    $id = $_POST['id'];
    $nisn = $_POST['nisn'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['alamat'];
    $alamat = $_POST['alamat'];

    $query  = "UPDATE biodata SET ";
    $query .= "nisn = '$nisn', nama = '$nama', ";
    $query .= "kelas = '$kelas', ";
    $query .= "jurusan = '$jurusan', alamat = '$alamat' ";
    $query .= "WHERE id = '$id' ";

    $result = mysqli_query($link, $query);


    if(!$result){
        die ("Query gagal dijalankan: ".mysqli_errno($link).
        " - ".mysqli_error($link));
    }
}


header("location:index.php");
?>