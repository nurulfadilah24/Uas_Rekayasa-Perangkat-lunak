<?php
include '../config/database.php';

if (isset($_POST['simpan'])) {
    $nama  = $_POST['nama_motor'];
    $plat  = $_POST['plat_nomor'];
    $harga = $_POST['harga_sewa'];
    $stok  = $_POST['stok'];

    mysqli_query($conn, "INSERT INTO motor VALUES (
        NULL, '$nama', '$plat', '$harga', '$stok'
    )");

    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
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

        <button type="submit" name="simpan">Simpan</button>
        <a href="index.php" class="btn btn-danger">Batal</a>
    </form>
</div>

</body>
</html>
