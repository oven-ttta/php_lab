<?php
session_start();

$_SESSION['login'] = $_POST['login'] ?? '';
$_SESSION['password'] = $_POST['password'] ?? '';
$_SESSION['language'] = $_POST['language'] ?? '';
$_SESSION['gender'] = $_POST['gender'] ?? '';
$_SESSION['interest'] = $_POST['interest'] ?? [];
$_SESSION['comments'] = $_POST['comments'] ?? '';

echo "<b>Login:</b> " . $_SESSION['login'] . "<br>";
echo "<b>Password:</b> " . $_SESSION['password'] . "<br>";
echo "<b>Language:</b> " . $_SESSION['language'] . "<br>";
echo "<b>Gender:</b> " . $_SESSION['gender'] . "<br>";
echo "<b>Interest:</b> " . implode(",", $_SESSION['interest']) . "<br>";
echo "<b>Comments:</b> " . $_SESSION['comments'] . "<br>";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
</head>
<body>
    <a href="Form.php">กลับไปที่ Form</a>
    <a href="Session.php">ไปที่ Session</a>
</body>
</html>
