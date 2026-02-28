<?php
session_start();
include '../config/database.php';

if(isset($_POST['simpan'])){
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $jumlah = $_POST['jumlah'];
    $total = $harga * $jumlah;

    mysqli_query($conn,"INSERT INTO penjualan(nama_barang,harga,jumlah,total)
    VALUES('$nama','$harga','$jumlah','$total')");
    header("Location: penjualan.php");
}
?>
<link rel="stylesheet" href="../css/style.css">
<div class="container">
<div class="card">
<h2>Tambah Penjualan</h2>
<form method="POST">
<input type="text" name="nama" placeholder="Nama Barang" required>
<input type="number" name="harga" placeholder="Harga" required>
<input type="number" name="jumlah" placeholder="Jumlah" required>
<button name="simpan">Simpan</button>
</form>
</div>
</div>