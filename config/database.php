<?php
$host     = "localhost";
$username = "pqpeyvxm_user";
$password = "adnWvuhG9H@hF@4";
$database = "pqpeyvxm_sewa_motor";

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
