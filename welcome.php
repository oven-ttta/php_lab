<?php
session_start();

if (isset($_POST['username'])) {
    $_SESSION['username'] = $_POST['username'];
}

if (!isset($_SESSION['username'])) {
    echo "Session expired. Please login again.";
    exit;
}
?>

<html>
<body>
    <h2>Welcome</h2>
    <?php
        echo "Hello, " . $_SESSION['username'];
    ?>
</body>
</html>