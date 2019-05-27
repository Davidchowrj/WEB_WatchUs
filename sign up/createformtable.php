<html>
<head>
<title>Connecting MySQLi Server</title>
</head>
<body>
<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = "db";
$conn = mysqli_connect($host,$user,$pass,$dbname);


$sql = "CREATE TABLE table3(
    id INT AUTO_INCREMENT, email VARCHAR(20) NOT NULL, password VARCHAR(16) NOT NULL, primary key(id))";

if (mysqli_query($conn,$sql)){
    echo "Table created successfully";
} else{
    echo "Table is not created successfully: ";
}

mysqli_close($conn);

?>

</body>


</html>