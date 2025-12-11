<?php
session_start();

if (isset($_POST['login'])) {
    $_SESSION['login'] = $_POST['login'];
}

if (isset($_GET['reset']) && $_GET['reset'] === 'login') {
    unset($_SESSION['login']);
    header('Location: Session.php');
    exit;
}

$displayName = $_SESSION['login'] ?? 'Guest';
$inputValue = $_SESSION['login'] ?? '';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Session Demo</title>
</head>
<body>
    <?php echo "Name: " . $displayName . "<br>"; ?>
    <form action="Session.php" method="post">
    Login: <input type="text" name="login" value="<?php echo $inputValue; ?>">
    <input type="submit" value="Submit">
    </form>
    <a href="Session.php">รีเฟรช Page</a> |
    <a href="Form.php">กลับไปที่ Form</a> |
    <a href="Cookie.php">ไปที่ Cookie</a> |
    <a href="?reset=login">ล้าง login</a>
</body>
</html>