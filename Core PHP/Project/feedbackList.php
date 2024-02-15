<?php
// require "./components/header.php";
require(__DIR__ . "/components/header.php");
echo "<h1> List of feedback here: </h1>";

$sql = "select email, password, feedback from feedback";

if ($connection != null) {
    try {
        $statement = $connection->prepare($sql);
        $statement->execute();
        $result = $statement->setFetchMode(PDO::FETCH_ASSOC);
        $lists = $statement->fetchAll();
        echo '<ul class="list-group">';
        foreach ($lists as $list) {
            $email = $list['email'] ?? '';
            $password = $list['password'] ?? '';
            $feedback = $list['feedback'] ?? '';
            echo "<li class='list-group-item'>";
            echo "<p>$email</p>";
            echo "<p>$password</p>";
            echo "<p>$feedback</p>";
            echo "</li>";
            //echo "<h3>$email, $password, $feedback</h3>";
        }
        echo '</ul>';
    } catch (PDOException $e) {
        // echo "Cannot query data. Error: " . $e->getMessage;
    }
}
// include './components/footer.php';
require(__DIR__ . "/components/footer.php");
