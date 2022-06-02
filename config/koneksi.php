<?php

$host = "localhost";
$user = "root";
$pass = "";
$db ="latihan1";
$conn = mysqli_connect($host, $user, $pass, $db);
if ($conn == false)
{
    echo "koneksi ke server berhasil.";
    die();
} #else echo "koneksi berhasil";
$sql = 'SELECT * FROM data_barang';
$result = mysqli_query($conn, $sql);
?>