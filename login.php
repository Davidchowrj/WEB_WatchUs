<?php

$title = "Customer Login | WatchUs";
$page = "login";

// Include config files 
include "includes/header.php";
include "signup/connectdb.php";


// Checks if user already logged in 

if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    header("location: welcome.php");
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

        </p>
    </div>
    <div class="container-fluid mb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <form role="form" action="" method="Post">
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
                                <div class="col form-label-group">
                                    <!--
                                    <input type="text" name="FName" id="FName" class="form-control input-lg" placeholder="First Name">
                                    <label for="FName" class="pl-4"> First Name </label>
                                        -->
                                </div>
                                <div class="col form-label-group">
                                     <!--
                                    <input type="text" name="LName" id="LName" class="form-control input-lg" placeholder="Last Name">
                                    <label for="LName" class="pl-4"> Last Name </label>\
-->
                                </div>
                            </div>
                            <div class="form-label-group">
                                 <!--
                                <input type="email" name="email" id="newemail" class="form-control input-lg" placeholder="Email Address">
                                <label for="newemail"> Email </label>
-->
                            </div>
                            <div class="form-label-group">
                                 <!--
                                <input type="password" name="password" id="newpassword" class="form-control input-lg" placeholder="Password">
                                <label for="newpassword"> Password </label>
-->
                            </div>
                            <div>
                                <input type="submit" class="btn btn-primary w-100" href="register.php" value="Register">
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
                            <div>
                                <input type="submit" class="btn btn-primary w-100" href="" value="Sign In">

                                <?php
                                session_start();
                                ?>

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

    require('mysqli_connect.php');

    if (!$conn) {
        echo 'Connected failure<br>';
    } else {

        echo 'Connected successfully<br>';
    }
    session_start();

    $email = $_POST['email'];
    $password = $_POST['password'];

    $_SESSION['login_user'] = $email;

    $query = mysqli_query($db, "SELECT email FROM table3 WHERE email='$email' and password='$password'");
    if (mysqli_num_rows($query) != 0) {
        echo "<script language='javascript' type='text/javascript'> location.href = 'home.php'</script>";
    } else {
        echo "<script type='text/javascript'>alert('Username or Password Invalid!')</script>";
    }
}



?>









<?php

include "includes/footer.php";

?>