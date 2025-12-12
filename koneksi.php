<?php
$host = "localhost"; // Alamat server database (biasanya localhost)
$usename = "root"; // Username login ke database
$password = ""; // Password untuk login (biasanya untuk localhost)
$dbname = "nama_database"; // Nama database yang ingin di akses

// membuat koneksi
$conn = new mysqli($shot, $username, $password, $dbname);

//mengecek koneksi
if ($conn->connect_error) {
    die("koneksi gagal : " . $conn->connect_error);
}
echo "koneksi berhasi!";
?>