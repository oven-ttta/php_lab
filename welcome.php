<?php
session_start();

$_SESSION['login'] = $_REQUEST['login'] ?? '';
$_SESSION['language'] = $_REQUEST['language'] ?? '';
$_SESSION['gender'] = $_REQUEST['gender'] ?? '';
$_SESSION['interest'] = $_REQUEST['interest'] ?? [];
$_SESSION['comments'] = $_REQUEST['comments'] ?? '';

echo "<b>Login:</b> " . $_SESSION['login'] . "<br>";
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
