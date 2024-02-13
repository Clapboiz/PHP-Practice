<?php
echo "about php";
echo "<br>";

class User
{
    public $name;
    public $email;
    public $password;
    public $age;

    //constructor
    public function __construct(
        $name,
        $email,
        $password,
        $age
    ) {
        // echo "constructor run";
        // echo "<br>";

        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->age = $age;
    }

    //method: a function that belong to the class

    // Mục đích: Gán giá trị cho thuộc tính name.
    // Cách sử dụng: Gọi phương thức này khi bạn muốn thiết lập giá trị mới cho name.
    function set_name($name)
    {
        $this->name = $name;
    }

    //getter 

    // Mục đích: Lấy giá trị hiện tại của thuộc tính name.
    // Cách sử dụng: Gọi phương thức này khi bạn muốn đọc giá trị của name.
    function get_name()
    {
        return $this->name;
    }
}

//init an object 
// $user1 = new User();
// $user1->name = 'Clap';
// $user1->email = 'Clap@gmail.com';
// $user1->password = '123456789';
// $user1->age = 21;

// $user2 = new User();

// $user1->set_name('Clap');
// $user2->set_name('PCL');

// print_r($user1);
// print("<br>");
// print_r($user2);
// print("<br>");

// //getter 
// echo $user1->get_name();
// print("<br>");
// echo $user2->get_name();
// print("<br>");


$user1 = new User('Clap', 'Clap@gmail.com', '123456789', '21');
// echo $user1 . "from constructor";
echo $user1->email . " <b> is from constructor </b>";
print("<br>");
echo $user1->name . " <b> is from constructor </b>";

//inheritance
class Employee extends User
{
    private $title;
    public function __construct(
        $name,
        $email,
        $password,
        $age,
        $title
    ) {
        parent::__construct(
            $name,
            $email,
            $password,
            $age
        );
        $this->title = $title;
    }
    public function get_title()
    {
        return $this->title;
    }
}

$employee1 = new Employee('pt1', 'pt1@gmail.com', '1234', '21', 'Pentester');
echo $employee1->get_title();
