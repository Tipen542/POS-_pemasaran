<?php
include 'config/database.php';
$id = $_GET['id'];
$conn->query("DELETE FROM sales WHERE id=$id");
header("Location: sales.php");
?>