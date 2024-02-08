<?php
echo "about php";
echo "<br>";

class User
{
    public $name;
    public $email;
    public $password;
    public $age;
}

//init an object 
$user1 = new User();
print_r($user1);