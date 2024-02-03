<?php
echo "this is file about variables" . '<br>';

$name = "clap";
$age = 18;

echo $name . "<br>";
// echo "${name} is ${age} years old"; //should not use this way
echo "$name is $age years old" . '<br>' . "<br>";

echo "1" + "2" . "<br>";
$sum = "1" + "2";
var_dump($sum);

// define("CONSTANT_NAME", "value_of_constant"); only constant names have no $ in front of name
define("SERVER_NAME", "localhost");
define("DATABASE_NAME", "test");
echo "<br> server: " . SERVER_NAME . ", database: " . DATABASE_NAME;
