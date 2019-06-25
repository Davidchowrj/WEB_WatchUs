<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysqli_connect($dbhost,$dbuser,$dbpass);


if(!$conn){
    echo 'Connected failure<br>';
}


$sql = "CREATE DATABASE WatchUs";

if (mysqli_query($conn,$sql)){

} else{
     mysqli_error($conn);
}

mysqli_close($conn);

?>
 