<?php<?php<?php<?php<?php

session_start();

session_start();

$login = $_POST['login'];

$password = $_REQUEST['password']; session_start();

$language = $_POST['language'];

$gender = $_REQUEST['gender'];$login = $_POST['login'];

$interest = $_POST['interest'];

$password = $_REQUEST['password']; session_start();session_start();

$_SESSION['login'] = $login;

$_SESSION['password'] = $password;$language = $_POST['language'];

$_SESSION['language'] = $language;

$_SESSION['gender'] = $gender;$gender = $_REQUEST['gender'];$login = $_POST['login'];

$_SESSION['interest'] = $interest;

?>$interest = $_POST['interest'];



<html>$password = $_REQUEST['password']; 

<body>

    <h2>Welcome</h2>$_SESSION['login'] = $login;

    <?php

        echo "Hello, " . $_SESSION['login'] . "<br>";$_SESSION['password'] = $password;$language = $_POST['language'];

        echo "Password: " . $_SESSION['password'] . "<br>";

        echo "Language: " . $_SESSION['language'] . "<br>";$_SESSION['language'] = $language;

        echo "Gender: " . $_SESSION['gender'] . "<br>";

        echo "Interest: " . implode(", ", $_SESSION['interest']) . "<br>";$_SESSION['gender'] = $gender;$gender = $_REQUEST['gender'];$login = $_POST['login'];$login = $_POST['login'];

    ?>

    $_SESSION['interest'] = $interest;

    <br><br>

    <a href="Form.php">Back to Form</a>?>$interest = $_POST['interest'];

</body>

</html>


<html>$password = $_REQUEST['password']; $password = $_REQUEST['password']; 

<body>

    <h2>Welcome</h2>$_SESSION['login'] = $login;

    <?php

        echo "Hello, " . $_SESSION['login'] . "<br>";$_SESSION['password'] = $password;$language = $_POST['language'];$language = $_POST['language'];

        echo "Password: " . $_SESSION['password'] . "<br>";

        echo "Language: " . $_SESSION['language'] . "<br>";$_SESSION['language'] = $language;

        echo "Gender: " . $_SESSION['gender'] . "<br>";

        echo "Interest: " . implode(", ", $_SESSION['interest']) . "<br>";$_SESSION['gender'] = $gender;$gender = $_REQUEST['gender'];$gender = $_REQUEST['gender'];

    ?>

    $_SESSION['interest'] = $interest;

    <br><br>

    <a href="Form.php">Back to Form</a>?>$interest = $_POST['interest'];$interest = $_POST['interest'];

</body>

</html>


<html>



<body>$_SESSION['login'] = $login;$_SESSION['login'] = $login;

    <h2>Welcome</h2>

    <?php$_SESSION['password'] = $password;$_SESSION['password'] = $password;

        echo "Hello, " . $_SESSION['login'] . "<br>";

        echo "Password: " . $_SESSION['password'] . "<br>";$_SESSION['language'] = $language;$_SESSION['language'] = $language;

        echo "Language: " . $_SESSION['language'] . "<br>";

        echo "Gender: " . $_SESSION['gender'] . "<br>";$_SESSION['gender'] = $gender;$_SESSION['gender'] = $gender;

        echo "Interest: " . implode(", ", $_SESSION['interest']) . "<br>";

    ?>$_SESSION['interest'] = $interest;$_SESSION['interest'] = $interest;

    

    <br><br>?>?>

    <a href="Form.php">Back to Form</a>

</body>



</html><html><html>




<body><body>

    <h2>Welcome</h2>    <h2>Welcome</h2>

    <?php    <?php

        echo "Hello, " . $_SESSION['login'] . "<br>";        echo "Hello, " . $_SESSION['login'] . "<br>";

        echo "Password: " . $_SESSION['password'] . "<br>";        echo "Password: " . $_SESSION['password'] . "<br>";

        echo "Language: " . $_SESSION['language'] . "<br>";        echo "Language: " . $_SESSION['language'] . "<br>";

        echo "Gender: " . $_SESSION['gender'] . "<br>";        echo "Gender: " . $_SESSION['gender'] . "<br>";

        echo "Interest: " . implode(", ", $_SESSION['interest']) . "<br>";        echo "Interest: " . implode(", ", $_SESSION['interest']) . "<br>";

    ?>    ?>

    </body>

    <br><br>

    <a href="Form.php">Back to Form</a></html>
</body>

</html>
