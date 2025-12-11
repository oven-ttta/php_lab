<?php
setcookie("user", "", time() - 3600);
header("Location: login_cookie.php");
?>