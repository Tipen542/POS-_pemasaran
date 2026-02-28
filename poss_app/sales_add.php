<?php
include 'config/database.php';
if($_POST){
    $product = $_POST['product_name'];
    $qty = $_POST['quantity'];
    $price = $_POST['price'];
    $total = $qty * $price;

    $conn->query("INSERT INTO sales (product_name, quantity, price, total) 
    VALUES ('$product', '$qty', '$price', '$total')");
    header("Location: sales.php");
}
?>

<form method="POST">
<input name="product_name" placeholder="Nama Produk" required>
<input name="quantity" type="number" placeholder="Qty" required>
<input name="price" type="number" placeholder="Harga" required>
<button type="submit">Simpan</button>
</form>