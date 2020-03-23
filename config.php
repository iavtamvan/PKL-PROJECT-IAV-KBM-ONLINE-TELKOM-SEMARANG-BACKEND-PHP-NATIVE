<?php

$server = "localhost";
$user = "root";
$password = "1234567890";
$nama_database = "kbm_online";

$db = mysqli_connect($server, $user, $password, $nama_database);

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

?>
