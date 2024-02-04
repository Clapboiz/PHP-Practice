<?php
echo "about string function <br>";
$fullname = "Pham Clap";
echo "Length: " . strlen($fullname);
echo "<br>";

//reverse the string
echo strrev($fullname);
echo "<br>";

//Lowercase && uppercase the string
echo strtolower($fullname);
echo "<br>";
echo strtoupper($fullname);
echo "<br>";

//find and replace
echo str_replace("", "-", $fullname);
echo "<br>";

//Check name, which started with string
if (str_starts_with($fullname, "Pham")) {
    echo "Hello Clap";
};
echo "<br>";

//bypass html code
// echo "<script>alert('Code js')</script>";
echo "<h1>html string </h1>";
echo "<br>";
echo htmlspecialchars("<h1>html string </h1>");
echo "<br>";
echo htmlspecialchars("<script>alert('Code js')</script>");
echo "<br>";

printf('%s is %s', 'Clap', '2k3');
echo "<br>";
printf("pi = %f", 3.14);
echo "<br>";
