<?php
echo "about conditional <br>";

$hours = date("H");
echo $hours . "<br>";

if ($hours > 0 && $hours < 13) {
    echo "Good morning";
} else if ($hours > 13 && $hours <= 17) {
    echo "Good afternoon";
} else {
    echo "Good night";
}

$array = [
    "1", "2", "3", "4", "5", "6",
];

if (empty($array)) {
    echo "<br> <br> Not found objects <br>";
} else {
    echo "<br> <br> Some objects found! <br>";
}

// Ternary Operator in PHP
$number = 10;

$result = ($number > 5) ? "this number > 5" : "this number <= 5";

echo $result;

$favouriteColors = "Black";
switch ($favouriteColors) {
    case "red":
        echo "<br> You choose red <br>";
        break;
    case "blue":
        echo "<br> You choose blue <br>";
        break;
    default:
        echo "<br> No one <br>";
}
