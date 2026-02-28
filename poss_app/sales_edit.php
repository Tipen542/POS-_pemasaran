<?php
include 'config/database.php';
$id = $_GET['id'];

if($_POST){
    $product = $_POST['product_name'];
    $qty = $_POST['quantity'];
    $price = $_POST['price'];
    $total = $qty * $price;

    $conn->query("UPDATE sales SET 
    product_name='$product',
    quantity='$qty',
    price='$price',
    total='$total'
    WHERE id=$id");

    header("Location: sales.php");
}

$data = $conn->query("SELECT * FROM sales WHERE id=$id")->fetch_assoc();
?>

<form method="POST">
<input name="product_name" value="<?= $data['product_name'] ?>">
<input name="quantity" type="number" value="<?= $data['quantity'] ?>">
<input name="price" type="number" value="<?= $data['price'] ?>">
<button type="submit">Update</button>
</form>