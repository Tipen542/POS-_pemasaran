<?php
include '../config/database.php';

if(isset($_POST['register'])){

    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    mysqli_query($conn, "INSERT INTO users (username, password) VALUES ('$username','$password')");

    $_SESSION['success'] = "Registrasi berhasil! Silakan login.";
    header("Location: login.php");
    exit();
}

?>
<link rel="stylesheet" href="../css/style.css">
<div class="container">
<div class="card">
<h2>Register</h2>
<form method="POST">
<input type="text" name="username" placeholder="Username" required>
<input type="password" name="password" placeholder="Password" required>
<button name="register">Daftar</button>
</form>
</div>
</div>