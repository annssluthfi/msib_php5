<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <title>Form Mahasiswa</title>
</head>

<body>
    <h1 class="my-4" align="center">Form Nilai Ujian</h1>

    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <form class="my-5" action="TabelMahasiswa.php" method="post">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">NIM</label>
                        <input type="text" class="form-control" name="nim" id="nim" placeholder="Masukkan NIM">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nama Mahasiswa</label>
                        <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Kuliah</label>
                        <select class="form-select" name="kuliah" id="kuliah" aria-label="Default select example">
                            <option selected>Pilih Universitas</option>
                            <option value="Universitas Sriwijaya">Universitas Sriwijaya</option>
                            <option value="Universitas Indonesia">Universitas Indonesia</option>
                            <option value="Universitas Muhammadiyah">Universitas Muhammadiyah</option>
                            <option value="Universitas Padjajaran">Universitas Padjajaran</option>
                            <option value="Universitas Lampung">Universitas Lampung</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Mata Kuliah</label>
                        <select class="form-select" name="matkul" id="matkul" aria-label="Default select example">
                            <option selected>Pilih Mata Kuliah</option>
                            <option value="Sistem Pakar">Sistem Pakar</option>
                            <option value="Pemrosesan Bahasa Alami">Pemrosesan Bahasa Alami</option>
                            <option value="Jaringan Syaraf Tiruan">Jaringan Syaraf Tiruan</option>
                            <option value="Pemograman Web">Pemograman Web</option>
                            <option value="Pemograman Mobile">Pemograman Mobile</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nilai</label>
                        <input type="text" class="form-control" name="nilai" id="nilai" placeholder="Masukkan Nilai">
                    </div>

                    <button type="submit" class="btn btn-primary">Kirim</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
