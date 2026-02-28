<?php
session_start();
include '../config/database.php';
if(!isset($_SESSION['user'])) header("Location: ../auth/login.php");

$data = mysqli_query($conn,"SELECT * FROM penjualan ORDER BY id DESC");
?>
<link rel="stylesheet" href="../css/style.css">
<nav>
<a href="dashboard.php">Dashboard</a>
<a href="penjualan.php">Penjualan</a>
<a href="tambah.php">Tambah</a>
<a href="../auth/logout.php">Logout</a>
</nav>

<div class="container">
<div class="card">
<h2>Data Penjualan</h2>
<table class="table">
<tr>
<th>Barang</th>
<th>Harga</th>
<th>Jumlah</th>
<th>Total</th>
<th>Aksi</th>
</tr>
<?php while($row = mysqli_fetch_assoc($data)) { ?>
<tr>
<td><?= $row['nama_barang'] ?></td>
<td><?= $row['harga'] ?></td>
<td><?= $row['jumlah'] ?></td>
<td><?= $row['total'] ?></td>
<td>
<a href="edit.php?id=<?= $row['id'] ?>">Edit</a> |
<a href="hapus.php?id=<?= $row['id'] ?>">Hapus</a>
</td>
</tr>
<?php } ?>
</table>
</div>
</div>