<?php
$expire = time() + (60*60*24*30);
setcookie("user", "Alex Porter", $expire);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cookie Demo</title>
</head>
<body>
    <h2>Cookie Demo</h2>
    
    <h3>Setting Cookie:</h3>
    <p>Cookie 'user' has been set with value: "Alex Porter"</p>
    <p>Cookie will expire in 30 days</p>
    
    <h3>Displaying Cookie:</h3>
    <?php
    if (isset($_COOKIE['user'])) {
        echo "Hello, " . $_COOKIE['user'] . "<br>";
    } else {
        echo "Cookie not set yet<br>";
    }
    ?>
    
    <h3>Deleting Cookie:</h3>
    <p>To delete the cookie, use: <code>setcookie("user", "", time() - 3600);</code></p>
    
    <br><br>
    <button onclick="location.href='Form.php'">Back to Form</button>
</body>
</html>
