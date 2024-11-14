<?php

$server = "localhost";
$user = "admin";
$password = "06Tabah04?";
$nama_database = "pendaftran_siswa";

$db = mysqli_connect($server, $user, $password, $nama_database);

if (!$db) {
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

?>