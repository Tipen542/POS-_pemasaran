<?php
session_start();
include '../config/database.php';
if(!isset($_SESSION['user'])) header("Location: ../auth/login.php");

$total = mysqli_fetch_assoc(mysqli_query($conn,"SELECT SUM(total) as total FROM penjualan"));
$count = mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(*) as jumlah FROM penjualan"));
?>
<link rel="stylesheet" href="../css/style.css">
<nav>
    <div class="logo">
        <img src="../assets/logo.png">
        BlackWhite Store
    </div>
    <div>
        <a href="dashboard.php">Dashboard</a>
        <a href="penjualan.php">Penjualan</a>
        <a href="../auth/logout.php">Logout</a>
    </div>
</nav>

<div class="container">
<h2>Selamat Datang, <?= $_SESSION['user'] ?> 👋</h2>

<div class="stat-box">
<h3>Total Penjualan</h3>
<p>Rp <?= $total['total'] ?? 0 ?></p>
</div>

<div class="stat-box">
<h3>Jumlah Transaksi</h3>
<p><?= $count['jumlah'] ?></p>
</div>
</div>