<?php
echo "about supper global";
echo "<br>";

print_r($_SERVER);
echo "<br>";
print_r($_GET);
echo "<br>";
print_r($_POST);
echo "<br>";

//isset() is used to check whether a variable has been set (exists) or not.
if (isset($_GET['name'])) {
    echo $_GET['name'];
    echo "<br>";
}

if (isset($_GET['age'])) {
    echo $_GET['age'];
    echo "<br>";
}

// coalescing operator, the favorite way of almsot developers similar isset() function
$name = $_POST['name'] ?? '';
$age = $_POST['age'] ?? '';

echo $name;
echo "<br>";
echo $age;
echo "<br>";
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
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name">
        </div>
        <div>
            <label for="age">Age:</label>
            <input type="text" id="age" name="age">
        </div>
        <input type="submit" value="submit" name="submit0">
    </form>
</body>

</html>