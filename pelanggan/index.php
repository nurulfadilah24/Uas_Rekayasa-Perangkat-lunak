<?php include "../config/database.php"; ?>
<link rel="stylesheet" href="../assets/style.css">

<div class="container">
<h2>DATA PELANGGAN</h2>

<a href="tambah.php" class="btn">+ Tambah Pelanggan</a>

<div class="search-box">
<form method="get">
    <input type="text" name="cari" placeholder="Cari nama pelanggan">
</form>
</div>

<table>
<tr>
    <th>Nama</th>
    <th>Alamat</th>
    <th>Telepon</th>
</tr>

<?php
$cari = isset($_GET['cari']) ? $_GET['cari'] : '';
$q = mysqli_query($conn, "SELECT * FROM pelanggan 
    WHERE nama LIKE '%$cari%'");

while ($p = mysqli_fetch_assoc($q)) {
?>
<tr>
    <td><?= $p['nama'] ?></td>
    <td><?= $p['alamat'] ?></td>
    <td><?= $p['telepon'] ?></td>
</tr>
<?php } ?>
</table>
</div>
