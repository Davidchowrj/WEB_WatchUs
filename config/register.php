<?php
$Fname = $_POST['fname'];
$Fname_pattern = '/^[a-zA-z0-9]{3,10}$/';
$Lname = $_POST['Lname'];
$Lname_pattern = '/^[a-zA-z0-9]{3,10}$/';
$newpassword = $_POST["newpassword"];
$newpassword_pattern = "/^(?=.*\d)(?=.*[A-Z])(?=.*[a-z])(?=.*\W).{5,15}$/";
$newemail = $_POST["newemail"];
$newemail_pattern = "/^((?!\.)[\w-_.]*[^.])(@\w+)(\.\w+(\.\w+)?[^.\W])$/";
$setpass=false;
$setemail=false;


// Preg matching for form input 

if(isset($_POST['test'])){
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
    echo "Invalid password, your password must be between 5 to 15 characters 
    and must contain at least one lowercase letter,at least one uppercase letter, 
    at least one digit number and at least one symbol <br>";
}

echo "<br><br>";


if ( ($setemail==true && $setpass==true)){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "WatchUs";
    
    //Create connection
    $conn = new mysqli($servername,$username,$password,$dbname);
    
    
    
    $sql = "INSERT INTO customers(email, password, registration_date) VALUES ('".$_POST["newemail"]."' , '".SHA1($_POST["newpassword"])."', NOW())";
    
    
    if (mysqli_query($conn,$sql)){
        echo "New record created successfully";
    } else{
        echo "Error: " . $sql . "" . mysqli_error($conn);
    }
    
    $conn->close();
}

}
?>