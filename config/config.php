<?php
$koneksi = mysqli_connect('localhost', 'root', '', 'db_mahasiswa');
if(mysqli_connect_error())
{
	echo "Koneksi database gagal : ".mysqli_connect_error();
}
?>