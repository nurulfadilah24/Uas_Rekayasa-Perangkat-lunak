<?php
include "../config/database.php";
$data = mysqli_fetch_assoc(
    mysqli_query($conn, "SELECT * FROM motor WHERE id='$_GET[id]'")
);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Motor</title>
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body>

<div class="container">
<h2>EDIT DATA MOTOR</h2>

<form method="post">
    <label>Nama Motor</label>
    <input type="text" name="nama" value="<?= $data['nama_motor'] ?>" required>

    <label>Plat Nomor</label>
    <input type="text" name="plat" value="<?= $data['plat_nomor'] ?>" required>

    <label>Harga Sewa</label>
    <input type="number" name="harga" value="<?= $data['harga_sewa'] ?>" required>

    <label>Stok</label>
    <input type="number" name="stok" value="<?= $data['stok'] ?>" required>

    <button type="submit" name="update">Update</button>
</form>

<?php
if (isset($_POST['update'])) {
    mysqli_query($conn, "UPDATE motor SET
        nama_motor='$_POST[nama]',
        plat_nomor='$_POST[plat]',
        harga_sewa='$_POST[harga]',
        stok='$_POST[stok]'
        WHERE id='$_GET[id]'
    ");
    header("Location: index.php");
}
?>

<a href="index.php" class="btn">⬅ Kembali</a>
</div>

</body>
</html>
