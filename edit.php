<?php
include 'koneksi.php';

if (isset($_GET['id'])) {
    $id = ($_GET['id']);

    $query = "SELECT * FROM biodata WHERE id='$id'";
    $result = mysqli_query($link, $query);

    if(!$result){
        die ("Query Error: ".mysqli_errno($link).
        " - ".mysqli_error($link));
    }

    $data = mysqli_fetch_assoc($result);
    $nisn = $data['nisn'];
    $nama = $data['nama'];
    $kelas = $data['kelas'];
    $jurusan = $data['alamat'];
    $alamat = $data['alamat'];

} else {
    header("location:index.php");
}

?>
<!DOCTYPE html>
<html>
    <head>
        <style>
            h1{
                text-align: center;
            }
            .container{
                width: 400px;
                margin: auto;
            }
        </style>
    </head>
    <body>
        <h1>Edit Data</h1>
        <div class="container">
            <form id="form_biodata" action="edit_proses.php" method="post">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <fieldset>
                <legend>Edit Data Mahasiswa</legend>
                <p>
                    <label for="nisn">NISN : </label>
                    <input type="text" name="nisn" id="nisn" placeholder="12345678" value="<?php echo $nisn ?>">
        </p>
        <p>
            <label for="nama">Nama : </label>
            <input type="text" name="nama" id="nama" value="<?php echo $nama ?>">
        </p>
        <p>
            <Label for="Kelas">Kelas : </label>
            <input type="text" name="kelas" id="kelas" value="<?php echo $kelas ?>">
        </p>
        <p>
            <label for = "jurusan">Jurusan : </label>
            <input type="text" name="jurusan" id="jurusan" placeholder = "Rekayasa Perangkat Lunak" value="<?php echo $jurusan ?>">>
        </p>
        <p>
        <label for = "alamat">Alamat : </label>
            <input type="text" name="alamat" id="alamat" value="<?php echo $alamat ?>">
        </p>
        <p>
                    <input type="submit" name="edit" value="Update Data">
                </p>
            </form>
        </div>
    </body>
</html>