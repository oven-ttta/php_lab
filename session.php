<?php
session_start();

if(isset($_SESSION['views']))
    $_SESSION['views'] = $_SESSION['views'] + 1;
else 
    $_SESSION['views'] = 1;

echo "Views = " . $_SESSION['views'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Session Demo</title>
</head>
<body>
    <h2>Session Demo</h2>
    <p>
        <?php echo "You have viewed this page " . $_SESSION['views'] . " times."; ?>
    </p>
    <br>
    <a href="Session.php">Refresh Page</a> | 
    <a href="Form.php">Back to Form</a>
</body>
</html>
