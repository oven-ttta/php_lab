<?php
if (isset($_GET['logout'])) {
    setcookie("user", "", time() - 3600);
    header("Location: Cookie.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['username'])) {
    setcookie("user", $_POST['username'], time() + 3600);
    header("Location: Cookie.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Cookie Demo</title>
</head>
<body>
    <h2>Cookie Demo</h2>
    
    <?php if (isset($_COOKIE['user'])): ?>
        <p>Welcome, <?= $_COOKIE['user'] ?></p>
        <button onclick="location.href='?logout=true'">Logout</button>
        <a href="Form.php">กลับไปที่ Form</a>
    <?php else: ?>
        <form method="POST">
            <label>Username: <input type="text" name="username" required></label>
            <button type="submit">Login</button>
        </form>
    <?php endif; ?>
    
    <a href="Form.php">กลับไปที่ Form</a>
</body>
</html>
