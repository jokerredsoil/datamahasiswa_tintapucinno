<?php
require 'functions.php';

$mahasiswa = query("SELECT * FROM mahasiswa");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar fixed navbar-expand-lg navbar-dark bg-secondary">
        <div class="container">
            <a class="navbar-brand" href="#">Data Mahasiswa</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="tambah.php">Tambah Mahasiswa</a>
                    </li>

                </ul>

            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row mt-3">
            <div class="col">
                <h2>Data Mahasiswa</h2>
            </div>
        </div>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">NPM</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Jenis kelamin</th>
                    <th scope="col">Hobi</th>
                    <th scope="col">Tempat Lahir</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">Provinsi</th>
                </tr>
            </thead>

            <tbody>
                <?php $i = 1; ?> <?php foreach ($mahasiswa as $row) : ?>
                    <tr>
                        <td><?= $i++; ?></td>
                        <td><?= $row["nim"]; ?></td>
                        <td><?= $row["nama"]; ?></td>
                        <td><?= $row["alamat"]; ?></td>
                        <td><?= $row["jenis_kelamin"]; ?></td>
                        <td><?= $row["hobi"]; ?></td>
                        <td><?= $row["tempat_lahir"]; ?></td>
                        <td><?= $row["tanggal_lahir"]; ?></td>
                        <td><?= $row["provinsi"]; ?></td>
                        <td>
                            <a href="edit.php?id=<?= $row["id"]; ?>">Edit</a>
                            <a href="delete.php?id=<?= $row["id"]; ?>" onclick="return confirm ('apakah anda yakin menghapus data ini?')">Delete </a>
                        </td>
                    </tr>
                <?php endforeach; ?>

            </tbody>




        </table>

    </div>



    <script src=" https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>