<?php
session_start();

// Method 1: Destroy specific session variable
// unset($_SESSION['views']);

// Method 2: Destroy entire session
session_destroy();

?>

<html>
<body>
    <h2>Session Destroyed</h2>
    <p>The session has been destroyed.</p>
    <br>
    <a href="session.php">Go Back to Session Page</a>
</body>
</html>
