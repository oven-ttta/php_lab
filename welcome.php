<?php
session_start();

$login = $_POST['login'];
$password = $_REQUEST['password']; 
$language = $_POST['language'];
$gender = $_REQUEST['gender'];
$interest = $_POST['interest'];

$_SESSION['login'] = $login;
$_SESSION['password'] = $password;
$_SESSION['language'] = $language;
$_SESSION['gender'] = $gender;
$_SESSION['interest'] = $interest;
?>

<html>

<body>
    <h2>Welcome</h2>
    <?php
        echo "Hello, " . $_SESSION['login'] . "<br>";
        echo "Password: " . $_SESSION['password'] . "<br>";
        echo "Language: " . $_SESSION['language'] . "<br>";
        echo "Gender: " . $_SESSION['gender'] . "<br>";
        echo "Interest: " . implode(", ", $_SESSION['interest']) . "<br>";
    ?>
</body>

</html>