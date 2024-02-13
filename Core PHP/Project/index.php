<?php
require 'components/header.php';
?>

<form action="" class="form__container" style=" width: 700px; 
                                                        margin: 0 auto; 
                                                        display: flex; 
                                                        flex-direction: column;
                                                        ">
    <!-- Nội dung của form container ở đây -->
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>

    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1">
    </div>

    <div class="mb-3">
        <textarea class="form-control" name="feedback" id="" cols="30" rows="10"></textarea>
    </div>

    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

</main>

<?php
include 'components/footer.php';
?>