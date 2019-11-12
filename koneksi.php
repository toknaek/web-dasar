<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$database = 'toko';

$con = mysqli_connect($host, $user, $pass, $database);

if (!$con) {
	die("<h1>Koneksi Gagal: " . mysqli_connect_error(). "</h1>");
}



?>