<?php
     include 'koneksi.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <style>
            table{
                width: 840px;
                margin: auto;
            }
            h1{
                text-align: center;
            }
            </style>
        </head>
    <body>
        <h1>Tabel Biodata Siswa</h1>
        <center><a href="input.php">Input Data &Gt; </a></center>
        <br/>
        <table border="1">
            <tr>
                <th>No</th>
                <th>NISN</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Jurusan</th>
                <th>Alamat</th>
                <th>Pilihan</th>
        </tr>
        <?php

        $query = "SELECT * FROM biodata ORDER BY nisn ASC";
        $result = mysqli_query($link, $query);
        
        if(!$result){
            die ("Query Error : " .mysqli_errno($link).
            " - " .mysqli_error($link));
        }

        $no = 1;
        while($data = mysqli_fetch_assoc($result))
        {
            echo "<tr>";
            echo "<td>$no</td>";
            echo "<td>$data[nisn]</td>";
            echo "<td>$data[nama]</td>";
            echo "<td>$data[kelas]</td>";
            echo "<td>$data[jurusan]</td>";
            echo "<td>$data[alamat]</td>";

            echo '<td>
            <a href="edit.php?id='.$data['id'].'">Edit</a> /
            <a href="hapus.php?id='.$data['id'].'"
            onclick="return confirm(\'Anda Yakin Akan Menghapus Data?\')">Hapus</a>
            </td>';
            echo "</tr>";
            $no++;
        }
        ?>
        </table>
    </body>
    </html>