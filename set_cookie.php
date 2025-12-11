<?php
$expire = time() + (60*60*24*30);
setcookie("user", $_POST['username'], $expire);
header("Location: welcome_cookie.php");
?>