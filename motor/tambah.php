<?php
include "../config/database.php";

if (isset($_POST['simpan'])) {
    $nama  = $_POST['nama_motor'];
    $plat  = $_POST['plat_nomor'];
    $harga = $_POST['harga_sewa'];
    $stok  = $_POST['stok'];

    mysqli_query($conn, "INSERT INTO motor 
        (nama_motor, plat_nomor, harga_sewa, stok)
        VALUES ('$nama', '$plat', '$harga', '$stok')
    ");

    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Motor</title>
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body>

<div class="container">
    <h2>Tambah Data Motor</h2>

    <form method="POST">
        <label>Nama Motor</label>
        <input type="text" name="nama_motor" required>

        <label>Plat Nomor</label>
        <input type="text" name="plat_nomor" required>

        <label>Harga Sewa / Hari</label>
        <input type="number" name="harga_sewa" required>

        <label>Stok</label>
        <input type="number" name="stok" required>

        <button type="submit" name="simpan" class="btn btn-primary">
            Simpan
        </button>

        <a href="index.php" class="btn btn-danger">
            Batal
        </a>
    </form>
</div>

</body>
</html>
