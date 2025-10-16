<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "mahasiswa";

$conn = new mysqli($host, $user, $pass, $db); // koneksi ke database 'mahasiswa'
if ($conn->connect_error) die("Koneksi gagal: " . $conn->connect_error); // validasi koneksi
?>
