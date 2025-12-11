<?php
session_start();

    if (isset($_POST['name'])) {
        $_SESSION['name'] = $_POST['name'];
    } elseif (isset($_SESSION['name'])) {
        header("Location: Session.php");
        exit();
    }
?>  
<!DOCTYPE html>
<html>
<head>
    <title>Session Demo</title>
</head>
<body>
   Name: <?php echo $_SESSION['name'] ?>
</body>
</html>