<?php
// require 'components/header.php';
require(__DIR__ . "/components/header.php");

$email = $password = $feedback = $checkout = '';
$email_error = $password_error = $feedback_error = $checkout_error = '';

if (isset($_POST['submit'])) {
    //validation
    // Email validation
    if (empty($_POST['email'])) {
        $email_error = "Please enter an email address";
    } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $email_error = "Invalid email format";
    } else {
        $email = htmlspecialchars($_POST['email']);
    }

    // Password validation
    if (empty($_POST['password'])) {
        $password_error = "Please enter a password";
    } elseif (strlen($_POST['password']) < 6) {
        $password_error = "Password must be at least 6 characters long";
    } else {
        $password = htmlspecialchars($_POST['password']);
    }

    if (empty($_POST['feedback'])) {
        $feedback_error = "Please enter feedback";
    } else {
        $feedback = htmlspecialchars($_POST["feedback"]);
    }

    if (!isset($_POST['checkout'])) {
        $checkout_error = "Please check the checkbox";
    } else {
        // Checkbox is checked
        $checkout = "Checked";
    }

    $validate_sucess = empty($email_error)
        && empty($password_error)
        && empty($feedback_error);
    if ($validate_sucess) {
        $sql = "INSERT INTO feedback(email, password, feedback)
            VALUES(?, ?, ?)";
        try {
            $statement = $connection->prepare($sql);
            $statement->bindParam(1, $email);
            $statement->bindParam(2, $password);
            $statement->bindParam(3, $feedback);
            $statement->execute();
            //echo "feedback inserted successfully";
            header("Location: feedbackList.php");
        } catch (PDOException $e) {
            echo "Cannot insert feedback into database"
                . $e->getMessage();
        }
    }
}
?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post" class="form__container" style=" width: 700px; 
                                                        margin: 0 auto; 
                                                        display: flex; 
                                                        flex-direction: column;
                                                        ">
    <!-- Nội dung của form container ở đây -->
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input name="email" type="email" class="form-control <?php echo $email_error ? 'invalid-feedback' : ''; ?>"
            id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        <p class="text-danger">
            <?php echo $email_error; ?>
        </p>
    </div>

    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input name="password" type="password" class="form-control
        <?php echo $password_error ? 'invalid-feedback' : ''; ?>
        " id="exampleInputPassword1">
        <p class="text-danger">
            <?php echo $password_error; ?>
        </p>
    </div>

    <div class="mb-3">
        <textarea class="form-control <?php echo $feedback_error ? 'invalid-feedback' : ''; ?>" name="feedback" id=""
            cols="30" rows="10"></textarea>
        <p class="text-danger">
            <?php echo $feedback_error; ?>
        </p>
    </div>

    <div class="mb-3 form-check">
        <input name="checkout" type="checkbox"
            class="form-check-input <?php echo $checkout_error ? 'invalid-feedback' : ''; ?>" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
        <p class="text-danger">
            <?php echo $checkout_error; ?>
        </p>
    </div>
    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
</form>

</main>

<?php
include 'components/footer.php';
?>