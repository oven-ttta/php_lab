<?php
if (!isset($_COOKIE['user'])) {
    echo "Cookie expired or not set. Please login again.";
    exit;
}
?>

<html>
<body>
    <h2>Welcome</h2>
    <?php 
        echo "Hello, " . $_COOKIE['user']; 
    ?>

    <br><br>
    <a href="logout.php">Logout</a>
</body>
</html>