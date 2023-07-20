<?php

//koneksi database
include 'koneksi.php';
//menangkap sebuah data yg dikirim
$nama_mahasiswa = $_POST['nama_mahasiswa'];
$nim = $_POST['nim'];
//mengimput data ke data base
mysqli_query($koneksi, "insert into mahasiswa value('$nim', 'nama_mhs', 'tgl_lahir', 'alamat', 'jenis_kelamin')");
//mengalihkan halaman kembali ke mahasiswa.php
header("location:mahasiswa.php");

?>