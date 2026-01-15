<?php include "../config/database.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Transaksi Sewa Motor</title>
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body>

<div class="container">
<h2>TRANSAKSI SEWA MOTOR</h2>

<form method="post">

    <label>Pelanggan</label>
    <select name="pelanggan" required>
        <option value="">-- Pilih Pelanggan --</option>
        <?php
        $p = mysqli_query($conn, "SELECT * FROM pelanggan");
        while ($pl = mysqli_fetch_assoc($p)) {
            echo "<option value='$pl[id]'>$pl[nama]</option>";
        }
        ?>
    </select>

    <label>Motor</label>
    <select name="motor" required>
        <option value="">-- Pilih Motor --</option>
        <?php
        $m = mysqli_query($conn, "SELECT * FROM motor WHERE stok > 0");
        while ($mo = mysqli_fetch_assoc($m)) {
            echo "<option value='$mo[id]'>$mo[nama_motor]</option>";
        }
        ?>
    </select>

    <label>Tanggal Sewa</label>
    <input type="date" name="tgl" required>

    <button type="submit" name="simpan">Sewa Motor</button>
</form>

<?php
if (isset($_POST['simpan'])) {
    mysqli_query($conn, "INSERT INTO transaksi VALUES (
        NULL,
        '$_POST[motor]',
        '$_POST[pelanggan]',
        '$_POST[tgl]',
        'Disewa'
    )");

    mysqli_query($conn, "UPDATE motor SET stok = stok - 1 WHERE id='$_POST[motor]'");
    echo "<p style='color:green;text-align:center;'>Motor berhasil disewa</p>";
}
?>

<a href="../index.php" class="btn">⬅ Kembali ke Menu</a>
</div>

</body>
</html>
