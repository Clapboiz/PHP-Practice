<?php
echo "<h1>About sessions</h1>";

//required if we user session
session_start();
if (isset($_POST['submit'])) {
    $userName = filter_input(
        INPUT_POST,
        'userName',
        FILTER_SANITIZE_SPECIAL_CHARS
    );
    $password = $_POST['password'];

    if ($userName == "Clap" && $password == "123456") {
        $_SESSION['userName'] = $userName;
        header('Location: ./dashboard.php');
    } else {
        echo "incorrect userName, password";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<!-- for in label will link with id in input -->
<!-- name send to browser must be _POST -->

<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <div>
            <label for="userName">userName:</label>
            <input type="text" id="userName" name="userName">
        </div>
        <div>
            <label for="password">password:</label>
            <input type="text" id="password" name="password">
        </div>
        <input type="submit" value="submit" name="submit">
    </form>
</body>

</html>