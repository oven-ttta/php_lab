<?php
session_start();

if(isset($_SESSION['views'])) {
    $_SESSION['views']++;
} else {
    $_SESSION['views'] = 1;
}

if(isset($_GET['reset']) && $_GET['reset'] === 'views') {
    unset($_SESSION['views']);
    header("Location: Session.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Session Demo</title>
</head>
<body>
    <p>You have viewed this page <?php echo $_SESSION['views']; ?> times.</p>
    
    <br>
    
    <a href="Session.php">Refresh Page</a> | 
    <a href="Form.php">Back to Form</a> | 
    <a href="Cookie.php">Go to Cookie</a> | 
    <a href="?reset=views">Reset Views</a>
</body>
</html>