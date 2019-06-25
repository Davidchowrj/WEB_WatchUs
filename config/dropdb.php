<html>
<head>
<title>Connecting MySQLi Server</title>
</head>
<body>
<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysqli_connect($dbhost,$dbuser,$dbpass);


if(!$conn){
    echo 'Connected failure<br>';
}

echo 'Connected successfully<br>';
$sql = "DROP DATABASE WatchUs";

if (mysqli_query($conn,$sql)){
    echo "Database dropped successfully";
} else{
    echo "Error droping database: " . mysqli_error($conn);
}

mysqli_close($conn);

?>

</body>


</html>