<?php
    if (isset($_COOKIE['username'])) {
        $name = $_COOKIE['username'];
    } else {
       header("Location: Form_Cookie.php");
       exit();
    }
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['logout'])) {
            setcookie("username", "", time() - 3600);
            header("Location: Form_Cookie.php");
            exit();
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Cookie Demo</title>  
</head>
<body>
    
    <?php echo "Name: " . $name ?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <input type="submit" value="Logout" name="logout">
    </form>

</body>
</html>