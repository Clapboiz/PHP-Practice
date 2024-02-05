<?php
//required if we user session
session_start();
if (isset($_SESSION['userName'])) {
    echo "welcome to dashboardPage";
    echo "<br>";
    echo "username: " . $_SESSION['userName'];
    echo "<br>";
    echo "<a href = './logout.php'>Log out </a>";
} else {
    echo "welcome guest to dashboardPage";
    echo "<br>";
    echo "<a href = './sessions.php'>Back to login </a>";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>This is dashboard</h1>
</body>

</html>