<?php
echo "about functions <br>";

function Hello($name)
{
    echo "Hello " . $name;
};
Hello("Clap <br>");

function sum($a, $b)
{
    return $a + $b;
};
echo sum(10, 3) . "<br>";

//some function available in php
$name = ["clap", "clap2k3", "PCL"];

echo "Number of items is: " . count($name) . "<br>";

// Search item Exists in array
var_dump(in_array("Lindan", $name));
//insert at the end of the list
array_push($name, "Lap");
echo "<br>";
var_dump($name);

// insert at the begin of the list
array_unshift($name, "starting");
echo "<br>";
var_dump($name);

//remove an index items and not rewite index number
unset($name[2]);
echo "<br>";
var_dump($name);

//remove the last item of list
array_pop($name);

//remove the first item of list
array_shift($name);
echo "<br>";
var_dump($name);

//chunk an array (means: split array into multiple arrays)
$arr_Chunk = array_chunk($name, 2);
echo "<br>";
var_dump($arr_Chunk);

$arr1 = [1, 2, 3];
$arr2 = ["X", "Y", "Z"];
$merged = array_merge($arr1, $arr2);
echo "<br>";
var_dump($merged);

//spread
$arr3 = [...$merged];
echo "<br>";
$merged[2] = "Test";
var_dump($merged);
echo "<br>";
print_r($arr3);

$arr4 = [...$arr1, ...$arr2];
echo "<br>";
print_r($arr4);

//combine 2 arrays
$a = ["name", "age", "sex"];
$b = ["Clap", "2k3", "male"];

$c = array_combine($a, $b);
echo "<br>";
print_r(array_keys($c));
echo "<br>";
print_r(array_values($c));
//flip function: reverse key and values
echo "<br>";
print_r(array_flip($c));
echo "<br>";
print_r($c);

// array from range, in the type functions: array_map, .... 
// have format nameFunctions(fn($var) => (actions of $var), $rootvar, which this function is copied) 
$numbers = range(0, 9);
echo "<br>";
print_r($numbers);

$squaredNumbers = array_map(function ($eachNumber) {
    return $eachNumber * $eachNumber;
}, $numbers);

echo "<br>";
print_r($squaredNumbers);

//arrow function
$squaredNumbers = array_map(fn ($eachNumber) => $eachNumber * $eachNumber, $numbers);

echo "<br>";
print_r($squaredNumbers);

//filter an array
$filterArrays = array_filter(
    $numbers,
    fn ($eachNumber) => $eachNumber % 2 == 0
);

echo "<br>";
print_r($filterArrays);
