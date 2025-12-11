<?php
session_start();

$_SESSION['login'] = $_POST['login'] ?? '';
$_SESSION['password'] = $_POST['password'] ?? '';
$_SESSION['language'] = $_POST['language'] ?? '';
$_SESSION['gender'] = $_POST['gender'] ?? '';
$_SESSION['interest'] = $_POST['interest'] ?? [];
$_SESSION['comments'] = $_POST['comments'] ?? '';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
</head>
<body>
    <h2>Welcome</h2>
    
    <p><b>Login:</b> <?php echo $_SESSION['login']; ?></p>
    <p><b>Password:</b> <?php echo $_SESSION['password']; ?></p>
    <p><b>Language:</b> <?php echo $_SESSION['language']; ?></p>
    <p><b>Gender:</b> <?php echo $_SESSION['gender']; ?></p>
    <p><b>Interest:</b> <?php echo implode(", ", (array)$_SESSION['interest']); ?></p>
    <p><b>Comments:</b> <?php echo $_SESSION['comments']; ?></p>
    
    <a href="Form.php">Back to Form</a>
    <a href="Session.php">Go to Session</a>
</body>
</html>
