<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Form Session</title>
</head>
<body>
    <h2>Form Session</h2>
    <form action="Session.php" method="post">
        Login: <input type="text" name="name" value="<?php echo isset($_SESSION['name']) ? $_SESSION['name'] : ''; ?>">
        <input type="submit" value="Submit">
    </form>
    <a href="Session.php">รีเฟรช Page</a> |
    <a href="Cookie.php">ไปที่ Cookie</a> |
    <a href="Form.php">กลับไปที่ Form</a> |
    <a href="?reset=name">ล้าง name</a>
</body>
</html>