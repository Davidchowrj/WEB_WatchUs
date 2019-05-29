<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>Sign in</title>
<link rel="stylesheet" type="text/css" href="signin.css">
</head>
<body>
<img id="logo" src="./images/WatchUSLOGO2.1.PNG" alt="logo" width="153" height="86">
<nav class="menu">
<ul>
	<li><a href="signin.php">Home</a></li>
	<li><a>Collection</a>
		<ul>
			<li><a>Analog Watch</a></li>
			<li><a>Digital Watch</a></li>
			<li><a>Smart Watch</a></li>
		</ul>
	</li>
	<li><a>About</a></li>
	<li><a href="service.php">Service</a></li>
	<li><a>Cart</a></li>
</ul>
</nav>
<div class="form">
<div class="sign">
	<h1>Sign in</h1>
	<form action="" method="post">
		<input type="email" name="email" id="email" value="" placeholder="Email" style="width:300px; height:30px" required="required">
		<br><br><br>
		<input type="password" name="password" id="password" value="" placeholder="Password" style="width:300px; height:30px" required="required">
		<br>
	
	<h3><a>Forget Password?</a></h3><br>
	<input type="submit" class="submit" name="signin" value="Sign in" style="width:60px;">&nbsp;
	<input type="reset" class="reset" name="reset" style="width:60px;"><br><br>
	</form>
</div><br>
<div class="new">
	<h1>New Member</h1>
	<p>The WatchUs Club is open to all WatchUs enthusiasts, customers and others who would like to maintain a privileged relationship with the Brand.
	</p>
	<form action="register.php" method="post">
		<input type="email" name="newemail" id="email" placeholder="Email" style="width:300px; height:30px" required="required">
		<br><br><br>
		<input type="password" name="newpassword" id="password" value="" placeholder="Password" style="width:300px; height:30px" required="required">
		<br><br>
		<input type="submit" name="submit" class="submit" value="Register">
		<br><br>
	</form>
</div>
</div>
<?php


if(isset($_POST['signin'])){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "db";
    
    //Create connection 
    $conn = new mysqli($servername,$username,$password,$dbname);
    
    
    
    $sql = 'SELECT * FROM table3 WHERE email="$email" AND password="$password"';
   
    if (mysqli_query($conn,$sql)) {
           
            echo "Sign in successful.<br>";
    } else{
        echo "Email or Password is wrong.";
    }
    
    mysqli_close($conn);
}



?>
</body>
</html>