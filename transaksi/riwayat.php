<?php include "../config/database.php"; ?>
<link rel="stylesheet" href="../assets/style.css">

<div class="container">
<h2>RIWAYAT TRANSAKSI</h2>

<div class="search-box">
<form method="get">
    <input type="text" name="cari" placeholder="Cari nama pelanggan">
</form>
</div>

<table>
<tr>
    <th>Pelanggan</th>
    <th>Motor</th>
    <th>Tanggal</th>
    <th>Status</th>
</tr>

<?php
$cari = isset($_GET['cari']) ? $_GET['cari'] : '';
$q = mysqli_query($conn, "
SELECT t.*, p.nama, m.nama_motor
FROM transaksi t
JOIN pelanggan p ON t.id_pelanggan=p.id
JOIN motor m ON t.id_motor=m.id
WHERE p.nama LIKE '%$cari%'
");

while ($r = mysqli_fetch_assoc($q)) {
?>
<tr>
    <td><?= $r['nama'] ?></td>
    <td><?= $r['nama_motor'] ?></td>
    <td><?= $r['tanggal_sewa'] ?></td>
    <td><?= $r['status'] ?></td>
</tr>
<?php } ?>
</table>
</div>
