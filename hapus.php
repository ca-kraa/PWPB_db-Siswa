<?php

include("koneksi.php");

if (isset($_GET["id"])){
    $id = $_GET["id"];

    $query = "DELETE FROM biodata WHERE id = '$id' ";
    $hasil_query = mysqli_query($link, $query);

    if(!$hasil_query){
        die ("Gagal Menghapus Data : " .mysqli_errno($link).
        " - " .mysqli_error($link));
    }
}

header("location:index.php")
?>