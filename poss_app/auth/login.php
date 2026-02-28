<?php
session_start();
include '../config/database.php';

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $data = mysqli_query($conn,"SELECT * FROM users WHERE username='$username'");
    $user = mysqli_fetch_assoc($data);

    if($user && password_verify($password,$user['password'])){
        $_SESSION['user'] = $user['username'];
        header("Location: ../pages/dashboard.php");
    } else {
        $error = "Username atau Password salah!";
    }
}
?>
<link rel="stylesheet" href="../css/style.css">
<div class="container">
<div class="card">
<h2>Login</h2>

<?php if(isset($error)) : ?>
    <div class="alert-error" id="errorBox">
        ❌ <?php echo $error; ?>
    </div>
<?php endif; ?>

<form method="POST">
<input type="text" name="username" placeholder="Username" required>
<input type="password" name="password" placeholder="Password" required>
<button name="login">Login</button>

</form>
<script>
setTimeout(function() {
    var errorBox = document.getElementById("errorBox");
    if (errorBox) {
        errorBox.style.opacity = "0";
        errorBox.style.transition = "0.5s";
        setTimeout(function(){
            errorBox.style.display = "none";
        }, 500);
    }
}, 3000);
</script>
</div>
</div>