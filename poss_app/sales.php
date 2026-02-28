<?php
include 'config/database.php';
if(!isset($_SESSION['user'])) header("Location: index.php");

$sales = $conn->query("SELECT * FROM sales ORDER BY id DESC");
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="assets/css/style.css">
<title>Penjualan</title>
</head>
<body>

<header>
<h2>Data Penjualan</h2>
<div>
<a href="dashboard.php">Dashboard</a>
<a href="sales_add.php">Tambah</a>
<a href="auth/logout.php">Logout</a>
</div>
</header>

<div class="container">
<table>
<tr>
<th>Produk</th>
<th>Qty</th>
<th>Harga</th>
<th>Total</th>
<th>Aksi</th>
</tr>

<?php while($row = $sales->fetch_assoc()): ?>
<tr>
<td><?= $row['product_name'] ?></td>
<td><?= $row['quantity'] ?></td>
<td><?= $row['price'] ?></td>
<td><?= $row['total'] ?></td>
<td>
<a href="sales_edit.php?id=<?= $row['id'] ?>">Edit</a>
<a href="sales_delete.php?id=<?= $row['id'] ?>">Hapus</a>
</td>
</tr>
<?php endwhile; ?>
</table>
</div>

</body>
</html>