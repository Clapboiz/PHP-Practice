<?php
echo "about array <br>";

$arrayNumbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];
var_dump($arrayNumbers);

print_r($arrayNumbers);

echo "<br> <br> $arrayNumbers[0] <br>";

//key - value
$color = [
    2 => 'black',
    3 => 'white',
    4 => 'blue',
];
echo $color[3];

$person = [
    'name' => 'Clap',
    'age' => '2k3',
];

print_r($person);
echo "<br> <br> $person[name]";

$people = [
    [
        'name' => 'Clap',
        'age' => '2k3',
    ],
    [
        'name' => 'Clapboiz',
        'age' => '2k5',
    ],
    [
        'name' => 'Lap',
        'age' => '2k',
    ],
];

print_r($people);
echo "<br>" . $people[1]['name'];
echo $people[1]['name'];
var_dump(json_encode($people));
