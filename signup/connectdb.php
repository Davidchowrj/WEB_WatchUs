<?php

// Set the database access information as constants:
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_USER', 'root');
DEFINE ('DB_PASSWORD', '');
DEFINE ('DB_NAME', 'WatchUs');

// Make the connection:
$conn = mysqli_connect (DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die ('Could not connect to MySQL: ' . mysqli_connect_error() );

// Set the encoding...
mysqli_set_charset($conn, 'utf8');


$sql = "CREATE TABLE customers(
    id INT AUTO_INCREMENT, 
    Fname VARCHAR(20) NOT NULL,
    Lname VARCHAR(20) NOT NULL,
    email VARCHAR(20) NOT NULL,
    password VARCHAR(16) NOT NULL,
    registration_date DATETIME,
    primary key(id))";

mysqli_close($conn);

?>
?>