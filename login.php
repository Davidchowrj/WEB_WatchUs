<?php
session_start();
$title = "Customer Login | WatchUs";
$page = "login";


include "includes/header.php";

// Checks if user already logged in

if (isset($_SESSION["login_user"]) && $_SESSION["login_user"] === true) {
    header(" config/home.php");
    exit;
}

?>




<!-- image header -->

<header class="masthead mb-5">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12 text-center">
                <h1 class="font-weight-bold text-white"> Login & Register </h1>
            </div>
        </div>
    </div>
</header>

<div class="logincontainer">
    <div class="row justify-content-center mb-4">
        <h1 class="text-center "> Log in or create a new WatchUs account </h1>
    </div>
    <div class="container-fluid mb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <form role="form" action="register.php" method="Post">
                        <fieldset>
                            <h2 class="text-left my-3">Not registered yet? Create an account now! </h2>
                            <p> Creating an account with us is simple & you will then benefit from:
                                <ul>
                                    <li> Express checkout using our cart
                                    <li> Manage your order history
                                    <li> Receive our monthly newsletters containing new,promotions & more.
                                </ul>
                            </p>

                            <!-- Register form input -->
                            <div class="row">
                            </div>
                            <div>
                                <input type="submit" class="btn btn-primary w-100" onclick="register.php" value="Register">
                            </div>
                        </fieldset>
                    </form>
                </div>

                <!-- Divider col -->
                <div class="col-md-2">
                </div>

                <div class="col-md-5">
                    <form role="form" action="" method="Post">
                        <fieldset>
                            <h2 class="text-left mt-3"> Login </h2>
                            <hr class="bg-primary mb-2 mt-0 d-inline-block mx-auto mb-4 w-25">

                            <div class="form-label-group">
                                <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email">
                                <label for="email"> Email </label>
                            </div>
                            <div class="form-label-group">
                                <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password">
                                <label for="password"> Password </label>
                            </div>
                            <div class="form-row">
                                <div class="col-6">
                                    <input type="submit" name="signin" class="btn btn-primary w-100" href="" value="Sign In">
                                </div>

                                <div class="col-6">
                                    <input type="submit" name="signout" class="btn btn-primary w-100" href="" value="Sign Out">
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>





<?php
if (isset($_POST['signin'])) {

    // Prag match variables 

    /* $password = $_POST["password"];
    $password_pattern = "/^(?=.*\d)(?=.*[A-Z])(?=.*[a-z])(?=.*\W).{5,15}$/";
    $email = $_POST["email"];
    $email_pattern = "\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}";
    $setpass = false;
    $setemail = false;

    if (preg_match('/^' . $email_pattern . '$/', $email)) {
        echo "Your email is a valid format.";
        $setemail = true;
        
    } else {
        echo "Invalid email.";
    }


    if (preg_match($password_pattern, $password)) {
        echo "Your password is valid.";
        $setpass = true;
    }*/




    DEFINE('DB_HOST', 'localhost');
    DEFINE('DB_USER', 'root');
    DEFINE('DB_PASSWORD', '');
    DEFINE('DB_NAME', 'WatchUs');

    $db = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die('Could not connect to MySQL: ' . mysqli_connect_error());

    mysqli_set_charset($db, 'utf8');

    $email = $_POST['email'];
    $password = $_POST['password'];

    $_SESSION['login_user'] = $email;

    $query = mysqli_query($db, "SELECT email FROM customers WHERE email='$email' and password='$password'");
    if (mysqli_num_rows($query) != 0) {
        echo "<script type='text/javascript'>alert('Login Successful')</script>";
    } else {
        echo "<script type='text/javascript'>alert('Username or Password Invalid!')</script>";
    }
}


if (isset($_POST['signout'])) {

    unset($_SESSION['login_user']);
    session_unset();
    session_destroy();
}



?>









<?php

include "includes/footer.php";

?>