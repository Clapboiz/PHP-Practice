<?php
echo "about iterations <br>";

for ($i = 0; $i < 10; $i++) {
    echo "i = $i <br>";
};

//Check conditions before doing anything
echo "<br>";
$w = 1;
while ($w < 10) {
    echo "w = $w <br>";
    $w++;
}

//Doing something before checking conditions
echo "<br>";
$dw = 3;
// $dw = 7;
do {
    echo "dw = $dw <br>";
    $dw++;
} while ($dw <= 6);


$fruits = array("apple", "banana", "orange", "grape");
echo "<br>for: <br>";
for ($i = 0; $i < count($fruits); $i++) {
    echo "$fruits[$i] <br>";
}

echo "<br>foreach: <br>";
foreach ($fruits as $fruit) {
    echo $fruit . "<br>";
}

// To show index, you must use "" instead of ''
echo "<br>foreach with index: <br>";
foreach ($fruits as $index => $fruit) {
    echo "$index - $fruit <br>";
}
