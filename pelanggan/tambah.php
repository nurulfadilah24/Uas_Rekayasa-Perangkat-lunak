<?php
include "../config/database.php";

if (isset($_POST['simpan'])) {
    mysqli_query($conn, "INSERT INTO motor VALUES (
        NULL,
        '$_POST[nama_motor]',
        '$_POST[plat_nomor]',
        '$_POST[harga_sewa]',
        '$_POST[stok]'
    )");

    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Motor</title>

    <!-- INLINE CSS PAKSA MUNCUL -->
    <style>
        body {
            font-family: Arial;
            background: #f4f6f9;
        }
        .container {
            width: 500px;
            margin: 50px auto;
            background: white;
            padding: 20px;
            border: 2px solid black;
        }
        input, textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
        }
        button {
            display: block;
            background: red;
            color: white;
            padding: 12px;
            font-size: 16px;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>TAMBAH MOTOR</h2>

    <form method="post">
        <input type="text" name="nama_motor" placeholder="Nama Motor">
        <input type="text" name="plat_nomor" placeholder="Plat Nomor">
        <input type="number" name="harga_sewa" placeholder="Harga">
        <input type="number" name="stok" placeholder="Stok">

        <button type="submit" name="simpan">
            SIMPAN MOTOR
        </button>
    </form>
</div>

</body>
</html>
