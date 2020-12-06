<?php

function Koneksi()
{
    return mysqli_connect('localhost', 'root', '', 'db_mahasiswa');
}

function Index($query)
{
    $koneksi = Koneksi();
    $result = mysqli_query($koneksi, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function Add($data)
{
    $koneksi = Koneksi();
    $nim = $data['nim']; 
    $nama = $data['nama_mahasiswa'];
    $tempat = $data['tempat_lahir'];
    $tanggal = $data['tanggal_lahir'];
    $fakultas = $data['fakultas_id'];
    $jurusan = $data['jurusan_id'];
    $ipk = $data['ipk'];

    $query = "INSERT INTO tb_mahasiswa(nim, nama_mahasiswa, tempat_lahir, tanggal_lahir, fakultas_id, jurusan_id, ipk) VALUES ('$nim','$nama','$tempat','$tanggal','$fakultas','$jurusan',$ipk)";
    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}

function Update($data)
{
    $koneksi = Koneksi();
    $idmhs = $data['id_mahasiswaUbah'];
    $nim = $data['nimUbah']; 
    $nama = $data['nama_mahasiswaUbah'];
    $tempat = $data['tempat_lahirUbah'];
    $tanggal = $data['tanggal_lahirUbah'];
    $fakultas = $data['fakultas_idUbah'];
    $jurusan = $data['jurusan_idUbah'];
    $ipk = $data['ipkUbah'];

    $query = "UPDATE tb_mahasiswa SET nim = '$nim', nama_mahasiswa = '$nama', tempat_lahir = '$tempat', tanggal_lahir = '$tanggal', fakultas_id = '$fakultas', jurusan_id ='$jurusan',ipk = '$ipk' WHERE id_mahasiswa = $idmhs";
    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}

function Delete($id)
{
    $koneksi = Koneksi();
    $query = "DELETE FROM tb_mahasiswa WHERE id_mahasiswa = $id";
    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
}


