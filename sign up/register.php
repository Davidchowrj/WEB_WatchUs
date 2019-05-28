<?php
$newpassword = $_POST["newpassword"];
$newpassword_pattern = "/^(?=.*\d)(?=.*[A-Z])(?=.*[a-z])(?=.*\W).{5,15}$/";
$newemail = $_POST["newemail"];
$newemail_pattern ="\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}";
$setpass=false;
$setemail=false;

if (preg_match('/^' . $newemail_pattern . '$/', $newemail)){
    echo "Your email is a valid format.";
    $setemail=true;
}

else{
    echo "Invalid email.";
}

echo "<br><br>";

if (preg_match($newpassword_pattern, $newpassword)){
    echo "Your password is valid.";
    $setpass=true;
}

else{
    echo "Invalid password, your password must be between 5 to 15 characters and must contain at least one lowercase letter,at least one uppercase letter, at least one digit number and at least one symbol <br>";
}

echo "<br><br>";


if ( ($setemail==true && $setpass==true)){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "db";
    
    //Create connection
    $conn = new mysqli($servername,$username,$password,$dbname);
    
    
    
    $sql = "INSERT INTO table3(email, password) VALUES ('".$_POST["newemail"]."' , '".$_POST["newpassword"]."')";
    
    
    if (mysqli_query($conn,$sql)){
        echo "New record created successfully";
    } else{
        echo "Error: " . $sql . "" . mysqli_error($conn);
    }
    
    $conn->close();
}

?>