<?php
include '../config/database.php';
$id = $_GET['id'];
$data = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM penjualan WHERE id=$id"));

if(isset($_POST['update'])){
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $jumlah = $_POST['jumlah'];
    $total = $harga * $jumlah;

    mysqli_query($conn,"UPDATE penjualan SET
    nama_barang='$nama',
    harga='$harga',
    jumlah='$jumlah',
    total='$total'
    WHERE id=$id");

    header("Location: penjualan.php");
}
?>
<link rel="stylesheet" href="../css/style.css">
<div class="container">
<div class="card">
<h2>Edit Penjualan</h2>
<form method="POST">
<input type="text" name="nama" value="<?= $data['nama_barang'] ?>" required>
<input type="number" name="harga" value="<?= $data['harga'] ?>" required>
<input type="number" name="jumlah" value="<?= $data['jumlah'] ?>" required>
<button name="update">Update</button>
</form>
</div>
</div>