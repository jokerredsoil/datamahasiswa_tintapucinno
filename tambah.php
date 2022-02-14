<?php
require 'functions.php';

if (isset($_POST["submit"])) {
    if (tambah($_POST) > 0) {
        echo " <script>
        alert('DATA BERHASIL DITAMBAHKAN!');
        document.location.href = 'index.php';
        </script> ";
    } else {
        echo " <script>
        alert('DATA GAGAL DITAMBAHKAN!');
        document.location.href = 'index.php';
        </script> ";
    }
}

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Tambah Data Mahasiswa</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
        <div class="container">
            <a class="navbar-brand" href="index.php">Back</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <div class="container ">
        <div class="row mt-3">
            <div class="col">
                <h2>Tambah Data Mahasiswa</h2>

            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="nim" class="form-label">nim</label>
                        <input type="number" class="form-control" id="nim" name="nim" required>

                    </div>

                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" required>

                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat </label>
                        <input type="textarea" class="form-control" id="alamat" name="alamat" required>

                    </div>
                    <div class="mb-3">
                        <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                        <br>
                        <input type="radio" class="custom-radio" id="jenis_kelamin" name="jenis_kelamin" value="L">Laki-laki
                        <input type="radio" class="custom-radio" id="jenis_kelamin" name="jenis_kelamin" value="P">Perempuan

                    </div>
                    <div class="mb-3" >
                        <label for="hobi" class="form-label">Hobi</label>
                        <br>
                        <input type="checkbox" class="form-check-inline" id="hobi" name="hobi[]"  value="berenang">berenang
                            <input type="checkbox" class="form-check-inline" id="hobi" name="hobi["  value="badminton">badminton
                        <input type="checkbox" class="form-check-inline" id="hobi" name="hobi[]"  value="gaming">gaming
                        <input type="checkbox" class="form-check-inline" id="hobi" name="hobi[]"  value="tidur">tidur
                        <input type="checkbox" class="form-check-inline" id="hobi" name="hobi[]"  value="coding">coding

                    </div>
                    <div class="mb-3">
                        <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                        <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" required>

                    </div>
                    <div class="mb-3">
                        <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
                    </div>
                    <div class="mb-3">
                        <label for="provinsi" class="form-label">Provinsi</label>
                        <input type="text" class="form-control" id="provinsi" name="provinsi" required >

                    </div>

                    <button type="submit" name="submit" class="btn btn-secondary">Tambah data</button>

                </form>

            </div>

        </div>

    </div>
<!-- edit harus tercheck senin implode -->
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>