
<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = "WatchUs";
$conn = mysqli_connect($host,$user,$pass,$dbname);


$sql = "CREATE TABLE customers(
    id INT AUTO_INCREMENT, 
    Fname VARCHAR(20) NOT NULL,
    Lname VARCHAR(20) NOT NULL,
    email VARCHAR(20) NOT NULL,
    password VARCHAR(16) NOT NULL,
    registration_date DATETIME,
    primary key(id))";

if (!mysqli_query($conn,$sql)){
    mysqli_connect_error($sql);
}

mysqli_close($conn);

?>

</body>


</html>