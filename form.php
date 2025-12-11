<html>
<body>
    <h2>Register Form</h2>
    <form action="welcome.php" method="post">
        Login: <input type="text" name="login"><br><br>
        Password: <input type="password" name="password"><br><br>

        Language:
        <select name="language">
            <option value="Thai">Thai</option>
            <option value="English">English</option>
        </select>
        <br><br>

        Gender:
        <input type="radio" name="gender" value="Male"> Male
        <input type="radio" name="gender" value="Female"> Female
        <br><br>

        Interest:<br>
        <input type="checkbox" name="interest[]" value="Movies"> Movies<br>
        <input type="checkbox" name="interest[]" value="TV/Music"> TV/Music<br>
        <input type="checkbox" name="interest[]" value="Sports"> Sports<br>
        <input type="checkbox" name="interest[]" value="Travel"> Travel<br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>