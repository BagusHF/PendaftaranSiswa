<?php

$server = "localhost";
$user = "root";
$password = "";
$nama_database = "pendaftaransiswa_bagus";

$db = mysqli_connect($server, $user, $password, $nama_database);

if(!$db){
    die("Gagal terhubung dengan database:" . mysqli_connect_error());
}

?>