<?php

$host = 'localhost';
$username = 'root';
$password = '';
$database = 'pwebpr';

$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) { 
    die('Koneksi Database Gagal : '.$conn->connect_error);
}
?>
