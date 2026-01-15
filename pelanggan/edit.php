<?php
include "../config/database.php";
$data = mysqli_fetch_assoc(
    mysqli_query($conn, "SELECT * FROM pelanggan WHERE id='$_GET[id]'")
);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Pelanggan</title>
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body>

<div class="container">
<h2>EDIT DATA PELANGGAN</h2>

<form method="post">
    <label>Nama</label>
    <input type="text" name="nama" value="<?= $data['nama'] ?>" required>

    <label>Alamat</label>
    <textarea name="alamat" required><?= $data['alamat'] ?></textarea>

    <label>Telepon</label>
    <input type="text" name="telepon" value="<?= $data['telepon'] ?>" required>

    <button type="submit" name="update">Update</button>
</form>

<?php
if (isset($_POST['update'])) {
    mysqli_query($conn, "UPDATE pelanggan SET
        nama='$_POST[nama]',
        alamat='$_POST[alamat]',
        telepon='$_POST[telepon]'
        WHERE id='$_GET[id]'
    ");
    header("Location: index.php");
}
?>

<a href="index.php" class="btn">⬅ Kembali</a>
</div>

</body>
</html>
