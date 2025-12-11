<?php
session_start();

if (isset($_POST['login'])) {
    $_SESSION['name'] = $_POST['name'];
}

if (isset($_GET['reset']) && $_GET['reset'] === 'name') {
    unset($_SESSION['name']);
    header('Location: From_Session.php');
    exit;
}

$displayName = $_SESSION['name'] ?? 'ยังไม่ login';
?>  
<!DOCTYPE html>
<html>
<head>
    <title>Session Demo</title>
</head>
<body>
    <?php echo "Name: " . $displayName . "<br>"; ?>
    <a href="Session.php">รีเฟรช Page</a> |
    <a href="Form.php">กลับไปที่ Form</a> |
    <a href="Cookie.php">ไปที่ Cookie</a> |
    <a href="From_Session.php">ไปที่ From Session</a> |
    <a href="?reset=name">ล้าง name</a>
</body>
</html>