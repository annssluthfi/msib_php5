<?php
require_once 'Mahasiswa.php';

if (isset($_POST['nim']) && isset($_POST['nama']) && isset($_POST['kuliah']) && isset($_POST['matkul']) && isset($_POST['nilai'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $kuliah = $_POST['kuliah'];
    $matkul = $_POST['matkul'];
    $nilai = $_POST['nilai'];
}

$ns1 = new Mahasiswa($nim, $nama, $kuliah, $matkul, $nilai);



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Nilai Ujian</title>
</head>

<body>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tabel Mahasiswa</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
            crossorigin="anonymous" />
    </head>

    <body>
        <div class="container">
            <h1 class="my-3" align="center">Daftar Nilai Ujian Mahasiswa</h1>
            <hr>
            <a href="ObjMahasiswa.php" class="btn btn-primary"><- Kembali</a>
            <table class="table my-5">
                <thead>
                    <tr>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Kuliah</th>
                        <th>Mata Kuliah</th>
                        <th>Nilai</th>
                        <th>Grade</th>
                        <th>Predikat</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <?= $ns1->nim; ?>
                        </td>
                        <td>
                            <?= $ns1->nama; ?>
                        </td>
                        <td>
                            <?= $ns1->kuliah; ?>
                        </td>
                        <td>
                            <?= $ns1->matkul; ?>
                        </td>
                        <td>
                            <?= $ns1->nilai; ?>
                        </td>
                        <td>
                            <?= $ns1->grade(); ?>
                        </td>
                        <td>
                            <?= $ns1->predikat(); ?>
                        </td>
                        <td>
                            <?= $ns1 -> status(); ?>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </body>

    </html>

</body>

</html>