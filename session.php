<?php
session_start();

if(isset($_SESSION['views']))
    $_SESSION['views'] = $_SESSION['views'] + 1;
else 
    $_SESSION['views'] = 1;

echo "Views = " . $_SESSION['views'];
?>

<html>
<body>
    <h2>Session Demo</h2>
    <p>
        <?php echo "You have viewed this page " . $_SESSION['views'] . " times."; ?>
    </p>
    <br>
    <a href="session.php">Refresh Page</a> | 
    <a href="session_destroy.php">Destroy Session</a>
</body>
</html>
