<?php
    if (isset($_POST['name'])) {
        $name = $_POST['name'];
        $expire=time()+60*60*24*30;
        setcookie("username", $name, $expire);
        header("Location: Cookie.php");
    }
?>
<html>
<head>
    <title>Form Cookie</title>
</head>
<body>
    <h2>Form Cookie</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        Login: <input type="text" name="name">
        <input type="submit" value="Submit">
    </form>
</body>
</html>