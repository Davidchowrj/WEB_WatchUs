<?php

$title = "Register | WatchUs";
$page = "register";

// Include config files
include "includes/header.php";
?>

<!-- image header -->

<header class="masthead mb-5">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12 text-center">
                <h1 class="font-weight-bold text-white"> Register </h1>
            </div>
        </div>
    </div>
</header>


<!-- Registration section -->

<div class="logincontainer">
    <div class="row justify-content-center mb-4">
        <h1 class="text-center "> Account Registration </h1>
    </div>
    <div class="container-fluid mb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <form role="form" action="" method="Post">
                        <fieldset>
                            <!-- Register form input -->
                            <div class="row">
                                <div class="col form-label-group">

                                    <input type="text" name="FName" id="FName" class="form-control input-lg" placeholder="First Name">
                                    <label for="FName" class="pl-4"> First Name </label>

                                </div>
                                <div class="col form-label-group">

                                    <input type="text" name="LName" id="LName" class="form-control input-lg" placeholder="Last Name">
                                    <label for="LName" class="pl-4"> Last Name </label>
                                </div>
                            </div>
                            <div class="form-label-group">

                                <input type="email" name="newemail" id="newemail" class="form-control input-lg" placeholder="Email Address">
                                <label for="newemail"> Email </label>
                            </div>
                            <div class="form-label-group">

                                <input type="password" name="newpassword" id="newpassword" class="form-control input-lg" placeholder="Password">
                                <label for="newpassword"> Password </label>
                            </div>
                            <div>
                                <input type="submit" name="register" class="btn btn-primary w-100" href="register.php" value="Register">
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>

        <?php
        if (isset($_POST["register"])) {

            $Fname = $_POST['FName'];
            $Fname_pattern = '/^[a-zA-z0-9]{3,10}$/';
            $Lname = $_POST['LName'];
            $Lname_pattern = '/^[a-zA-z0-9]{3,10}$/';
            $newpassword = $_POST["newpassword"];
            $newpassword_pattern = "/^(?=.*\d)(?=.*[A-Z])(?=.*[a-z])(?=.*\W).{5,15}$/";
            $newemail = $_POST["newemail"];
            $newemail_pattern = "\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}";
            $setpass = false;
            $setemail = false;


            // Preg matching for form input 

            if (preg_match($Fname_pattern, $Fname)) {
                echo "Your first name is valid.";
                $setpass = true;
            } else {
                echo "Invalid first name <br>";
            }
            
            echo "<br><br>";
            
            if (preg_match($Lname_pattern, $Lname)) {
                echo "Your last name is valid.";
                $setpass = true;
            } else {
                echo "Invalid last name <br>";
            }
            
            echo "<br><br>";
            
            if (preg_match('/^' . $newemail_pattern . '$/', $newemail)) {
                echo "Your email is a valid format.";
                $setemail = true;
            } else {
                echo "Invalid email.";
            }

            echo "<br><br>";

            if (preg_match($newpassword_pattern, $newpassword)) {
                echo "Your password is valid.";
                $setpass = true;
            } else {
                echo "Invalid password, your password must be between 5 to 15 characters 
    and must contain at least one lowercase letter,at least one uppercase letter, 
    at least one digit number and at least one symbol <br>";
            }

            echo "<br><br>";


            if (($setemail == true && $setpass == true)) {
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "WatchUs";

                //Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);



                $sql = "INSERT INTO customers(Fname, Lname, email, password, registration_date) VALUES ('" . $_POST["FName"] . "', '" . $_POST["LName"] . "', '" . $_POST["newemail"] . "' , '" . SHA1($_POST["newpassword"]) . "', NOW())";


                if (mysqli_query($conn, $sql)) {
                    echo "New record created successfully";
                } else {
                    echo "Error: " . $sql . "" . mysqli_error($conn);
                }

                $conn->close();
            }
        }
        ?>