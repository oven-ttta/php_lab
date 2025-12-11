<html>
<body>
    <h2>Result</h2>

    <?php
        $login = $_POST['login'];
        $password = $_REQUEST['password']; 
        $language = $_POST['language'];
        $gender = $_REQUEST['gender'];
        $interest = $_POST['interest'];

        echo "Login: $login <br>";
        echo "Password: $password <br>";
        echo "Language: $language <br>";
        echo "Gender: $gender <br>";

        echo "Interest: ";
        foreach ($interest as $item) {
            echo $item . " ";
        }
    ?>
</body>
</html>