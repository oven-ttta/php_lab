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
    echo $_SESSION['views']."<br>";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Session Demo</title>
</head>
<body>
    <a href="Session.php">รีเฟรช Page</a> | 
    <a href="Form.php">กลับไปที่ Form</a> | 
    <a href="Cookie.php">ไปที่ Cookie</a> | 
    <a href="?reset=views">ล้าง Views</a>
</body>
</html>