<?php
// koneksi ke database
$connect = mysqli_connect("localhost", "root", "", "dbuniversitas");

// read
function query($query)
{
    global $connect;
    $result = mysqli_query($connect, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

// fungsi tambah mahasiswa
function tambah($data)
{
    global $connect;

    $nim = mysqli_real_escape_string($connect, htmlspecialchars($data["nim"]));
    $nama =
        mysqli_real_escape_string($connect, htmlspecialchars($data["nama"]));
    $alamat =
        mysqli_real_escape_string($connect, htmlspecialchars($data["alamat"]));
    $jenis_kelamin =
        mysqli_real_escape_string($connect, htmlspecialchars($data["jenis_kelamin"]));
    $hobi =
        mysqli_real_escape_string($connect, htmlspecialchars($data["hobi"]));
    $tempat_lahir
        = mysqli_real_escape_string($connect, htmlspecialchars($data["tempat_lahir"]));
    $tanggal_lahir =
        mysqli_real_escape_string($connect, htmlspecialchars($data["tanggal_lahir"]));
    $provinsi =
        mysqli_real_escape_string($connect, htmlspecialchars($data["provinsi"]));
       

    $query = "INSERT INTO mahasiswa (nim, nama, alamat, jenis_kelamin, hobi, tempat_lahir, tanggal_lahir, provinsi ) VALUES ('$nim', '$nama', '$alamat', '$jenis_kelamin', '$hobi', '$tempat_lahir', '$tanggal_lahir', '$provinsi')";

die($query);
    
// checkbox kelamin, radiobutton hobi, dropdown provinsi
    mysqli_query($connect, $query);

    return mysqli_affected_rows($connect);
}

function delete($id)
{
    global $connect;
    mysqli_query($connect, "DELETE FROM mahasiswa WHERE id = $id");
    return mysqli_affected_rows($connect);
}

function edit($data)
{
    global $connect;

    // sanitasi data
    $id = $data["id"];

    $nim = mysqli_real_escape_string($connect, htmlspecialchars($data["nim"]));
    $nama =
        mysqli_real_escape_string($connect, htmlspecialchars($data["nama"]));
    $alamat =
        mysqli_real_escape_string($connect, htmlspecialchars($data["alamat"]));
    $jenis_kelamin =
        mysqli_real_escape_string($connect, htmlspecialchars($data["jenis_kelamin"]));
    $hobi =
        mysqli_real_escape_string($connect, htmlspecialchars($data["hobi"]));
    $tempat_lahir
        = mysqli_real_escape_string($connect, htmlspecialchars($data["tempat_lahir"]));
    $tanggal_lahir =
        mysqli_real_escape_string($connect, htmlspecialchars($data["tanggal_lahir"]));
    $provinsi =
        mysqli_real_escape_string($connect, htmlspecialchars($data["provinsi"]));

    // mengubah update dengan data baru
    $query = "UPDATE mahasiswa SET
    id = $id,
    nim = $nim,
    nama = '$nama',
    alamat = '$alamat',
    jenis_kelamin = '$jenis_kelamin',
    hobi = '$hobi',
    tempat_lahir = '$tempat_lahir',
    tanggal_lahir = '$tanggal_lahir',
    provinsi = '$provinsi'
    WHERE id = $id
    ";
    // die("UPDATE mahasiswa SET
    // nim = $nim,
    // nama = '$nama',
    // alamat = '$alamat',
    // jenis_kelamin = '$jenis_kelamin',
    // hobi = '$hobi',
    // tempat_lahir = '$tempat_lahir',
    // tanggal_lahir = '$tanggal_lahir',
    // provinsi = '$provinsi'
    // WHERE id = $id
    // ");
    mysqli_query($connect, $query);

    return mysqli_affected_rows($connect);
}
