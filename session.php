<?php
session_start();

if (isset($_POST['name'])) {
    $_SESSION['name'] = $_POST['name'];
}

if (isset($_GET['reset']) && $_GET['reset'] === 'name') {
    unset($_SESSION['name']);
    header('Location: Session.php');
    exit;
}

$displayName = $_SESSION['name'] ?? 'Guest';
$inputValue = $_SESSION['name'] ?? '';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Session Demo</title>
</head>
<body>
    <?php echo "Name: " . $displayName . "<br>"; ?>
    <form action="Session.php" method="post">
    Name: <input type="text" name="name" value="<?php echo $inputValue; ?>">
    <input type="submit" value="Submit">
    </form>
    <a href="Session.php">รีเฟรช Page</a> |
    <a href="Form.php">กลับไปที่ Form</a> |
    <a href="Cookie.php">ไปที่ Cookie</a> |
    <a href="?reset=name">ล้าง name</a>
</body>
</html>