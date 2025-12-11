<?php
    if (isset($_COOKIE['username'])) {
        $displayName = $_COOKIE['username'];
    } else {
        $displayName = "Guest";
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Cookie Demo</title>
</head>
<body>
    <?php echo "Name: " . $displayName . "<br>"; ?>
</body>
</html>