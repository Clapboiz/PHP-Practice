<?php
echo "about exception";
echo "<br>";

function divide($a, $b)
{
    if (!$b) {
        throw new Exception("can not devide by zero");
    }
    return $a / $b;
}

try {
    echo divide(10, 2);
    echo "<br>";
    echo divide(5, 0);
    echo "<br>";
    echo "cannot touch";
} catch (Exception $e) {
    echo "Caught exception: " . $e->getMessage() . "\n";
    echo "<br>";
} finally {
    // Code that will always execute, whether an exception occurs or not
    echo "Finally block ex1!";
    echo "<br>";
}

//more examples
try {
    // Code that may throw an exception
    $result = 10 / 0;
} catch (DivisionByZeroError $e) {
    // Handle specific exception
    echo "Error: " . $e->getMessage();
    echo "<br>";
} catch (Exception $e) {
    // Handle other exceptions
    echo "Unexpected error: " . $e->getMessage();
    echo "<br>";
} finally {
    // Code that will always execute, whether an exception occurs or not
    echo "Finally block!";
    echo "<br>";
}
