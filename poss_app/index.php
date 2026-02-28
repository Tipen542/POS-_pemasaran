<?php include 'config/database.php'; ?>
<!DOCTYPE html>
<html>
<head>
<title>POS App</title>
<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<header>
    <h2>POS APP</h2>
    <div>
        <?php if(isset($_SESSION['user'])): ?>
            <a href="dashboard.php">Dashboard</a>
            <a href="auth/logout.php">Logout</a>
        <?php else: ?>
            <button onclick="showLogin()">Login</button>
            <button onclick="showRegister()">Signup</button>
        <?php endif; ?>
    </div>
</header>

<div class="container">
    <h1>My Account</h1>
    <div class="card">
        <h3>Enjoy Special Discounts and Stay Connected</h3>
        <p>Get access to exclusive discounts while keeping track of your orders.</p>
    </div>
</div>

<!-- LOGIN MODAL -->
<div id="loginModal" class="modal">
    <div class="modal-content">
        <span onclick="closeModal()" class="close">&times;</span>
        <h2>LOGIN</h2>
        <form action="auth/login.php" method="POST">
            <input type="email" name="email" placeholder="Your email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
    </div>
</div>

<!-- REGISTER MODAL -->
<div id="registerModal" class="modal">
    <div class="modal-content">
        <span onclick="closeModal()" class="close">&times;</span>
        <h2>REGISTER</h2>
        <form action="auth/register.php" method="POST">
            <input type="text" name="full_name" placeholder="Full Name" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Register</button>
        </form>
    </div>
</div>

<script>
function showLogin(){ document.getElementById('loginModal').style.display='block'; }
function showRegister(){ document.getElementById('registerModal').style.display='block'; }
function closeModal(){ 
    document.getElementById('loginModal').style.display='none';
    document.getElementById('registerModal').style.display='none';
}
</script>

</body>
</html>