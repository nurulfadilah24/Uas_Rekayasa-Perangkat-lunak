<?php include "../config/database.php"; ?>

<link rel="stylesheet" href="../assets/style.css">

<div class="container">
<h2>DATA MOTOR</h2>

<a href="tambah.php" class="btn">+ Tambah Motor</a>

<div class="search-box">
<form method="get">
    <input type="text" name="cari" placeholder="Cari nama / plat motor">
</form>
</div>

<table>
<tr>
    <th>Nama</th>
    <th>Plat</th>
    <th>Harga</th>
    <th>Stok</th>
    <th>Aksi</th>
</tr>

<?php
$cari = isset($_GET['cari']) ? $_GET['cari'] : '';
$query = "SELECT * FROM motor 
          WHERE nama_motor LIKE '%$cari%' 
          OR plat_nomor LIKE '%$cari%'";

$data = mysqli_query($conn, $query);

while ($m = mysqli_fetch_assoc($data)) {
?>
<tr>
    <td><?= $m['nama_motor'] ?></td>
    <td><?= $m['plat_nomor'] ?></td>
    <td>Rp <?= number_format($m['harga_sewa']) ?></td>
    <td><?= $m['stok'] ?></td>
    <td>
        <a class="btn btn-warning" href="edit.php?id=<?= $m['id'] ?>">Edit</a>
        <a class="btn btn-danger" href="hapus.php?id=<?= $m['id'] ?>"
           onclick="return confirm('Hapus data?')">Hapus</a>
    </td>
</tr>
<?php } ?>
</table>
</div>
