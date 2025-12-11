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
    <?php
        $login = $_SESSION['login'];
        $password = $_SESSION['password'];
        $language = $_SESSION['language'];
        $gender = $_SESSION['gender'];
        $interest = implode(", ", (array)$_SESSION['interest']);
        $comment = $_SESSION['comments'];
    ?>
    
    <p><strong>Login:</strong> <?php echo $login; ?></p>
    <p><strong>Password:</strong> <?php echo $password; ?></p>
    <p><strong>Language:</strong> <?php echo $language; ?></p>
    <p><strong>Gender:</strong> <?php echo $gender; ?></p>
    <p><strong>Interest:</strong> <?php echo $interest; ?></p>
    <p><strong>Comments:</strong> <?php echo $comment?></p>
    
    <a href="Form.php">Back to Form</a>
</body>
</html>
