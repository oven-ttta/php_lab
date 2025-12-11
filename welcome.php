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
    
    <p><strong>Login:</strong> <?php echo $_SESSION['login']; ?></p>
    <p><strong>Password:</strong> <?php echo $_SESSION['password']; ?></p>
    <p><strong>Language:</strong> <?php echo $_SESSION['language']; ?></p>
    <p><strong>Gender:</strong> <?php echo $_SESSION['gender']; ?></p>
    <p><strong>Interest:</strong> <?php echo implode(", ", (array)$_SESSION['interest']); ?></p>
    <p><strong>Comments:</strong> <?php echo $_SESSION['comments']; ?></p>
    
    <a href="Form.php">Back to Form</a>
</body>
</html>
