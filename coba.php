<?php
if(isset($_POST['simpan'])){
    $idmhs = $_POST['id_mahasiswaUbah'];
    $nim = $_POST['nimUbah']; 
    $nama = $_POST['nama_mahasiswaUbah'];
    $tempat = $_POST['tempat_lahirUbah'];
    $tanggal = $_POST['tanggal_lahirUbah'];
    $fakultas = $_POST['fakultas_idUbah'];
    $jurusan = $_POST['jurusan_idUbah'];
    $ipk = $_POST['ipkUbah'];


    echo "<strong>ID:</strong> {$idmhs} <br>";
    echo "<strong>NIM:</strong> {$nim} <br>";
    echo "<strong>Nama:</strong> {$nama} <br>";
    echo "<strong>TTL:</strong> {$tempat}, ";
    echo "{$tanggal} <br>";
    echo "<strong>Fakultas:</strong> {$fakultas} <br>";
    echo "<strong>Jurusan:</strong> {$jurusan} <br>";
    echo "<strong>IPK:</strong> {$ipk} <br>";
}