<?php
echo "about php";
echo "<br>";

class User
{
    public $name;
    public $email;
    public $password;
    public $age;
    //method: a function that belong to the class
    function set_name($name)
    {
        $this->name = $name;
    }
}

//init an object 
$user1 = new User();
// $user1->name = 'Clap';
// $user1->email = 'Clap@gmail.com';
// $user1->password = '123456789';
// $user1->age = 21;

$user2 = new User();

$user1->set_name('Clap');
$user2->set_name('PCL');

print_r($user1);
print("<br>");
print_r($user2);
