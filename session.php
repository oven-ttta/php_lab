<?php
session_start();
    if (isset($_SESSION['username'])) {
        $displayName = $_SESSION['username'];
    } else {
        $displayName = "Guest";
    }
?>  
<!DOCTYPE html>
<html>
<head>
    <title>Session Demo</title>
</head>
<body>
    <?php echo "Name: " . $displayName . "<br>"; ?>
</body>
</html>