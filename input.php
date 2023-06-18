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
    <h1>Input Data</h1>
    <div class="container">
        <form id="form_biodata" action="input_proses.php" method="post">
            <fieldset>
                <legend>Input Data Siswa</legend>
                <p>
                    <label for="nisn">NISN : </label>
                    <input type="text" name="nisn" id="nisn" placeholder="12345678">
        </p>
        <p>
            <label for="nama">Nama : </label>
            <input type="text" name="nama" id="nama">
        </p>
        <p>
            <Label for="Kelas">Kelas : </label>
            <input type="text" name="kelas" id="kelas">
        </p>
        <p>
            <label for = "jurusan">Jurusan : </label>
            <input type="text" name="jurusan" id="jurusan" placeholder = "Rekayasa Perangkat Lunak">
        </p>
        <p>
        <label for = "alamat">Alamat : </label>
            <input type="text" name="alamat" id="alamat">
        </p>

        </fieldset>
        <p>
            <input type="submit" name="input" value="Tambah Data">
        </p>
        </form>
        </div>
        </body>
        </html>