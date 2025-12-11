<?php
session_start();

$_SESSION['login'] = $_POST['login'] ?? '';
$_SESSION['password'] = $_REQUEST['password'] ?? '';
$_SESSION['language'] = $_POST['language'] ?? '';
$_SESSION['gender'] = $_REQUEST['gender'] ?? '';
$_SESSION['interest'] = $_POST['interest'] ?? [];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
</head>
<body>
    <h2>Welcome</h2>
    <?php
        $login = htmlspecialchars($_SESSION['login']);
        $password = htmlspecialchars($_SESSION['password']);
        $language = htmlspecialchars($_SESSION['language']);
        $gender = htmlspecialchars($_SESSION['gender']);
        $interest = htmlspecialchars(implode(", ", (array)$_SESSION['interest']));
    ?>
    
    <p><strong>Login:</strong> <?php echo $login; ?></p>
    <p><strong>Password:</strong> <?php echo $password; ?></p>
    <p><strong>Language:</strong> <?php echo $language; ?></p>
    <p><strong>Gender:</strong> <?php echo $gender; ?></p>
    <p><strong>Interest:</strong> <?php echo $interest; ?></p>
    
    <a href="Form.php">Back to Form</a>
</body>
</html>
