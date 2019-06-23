
<?php session_start(); 

$title = "Login | WatchUs";
$page = "login";
include "includes/header.php";
?>

<link rel="stylesheet" href="./styles/stylesheet.css">
</head>




<!-- Image header 
<header class="masthead">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12 text-center">
                <h1 class="font-weight-bold text-white"> Services And Support </h1>
            </div>
        </div>
    </div>
</header>

-->

<form class="form-signin">
      <div class="text-center mb-4">
        <h1 class="h3 mb-3 font-weight-normal">Login</h1>
       <a> Please enter your login details </a>
      </div>

      <div class="form-label-group">
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputEmail">Email address</label>
      </div>

      <div class="form-label-group">
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <label for="inputPassword">Password</label>
      </div>

      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      <p class="mt-5 mb-3 text-muted text-center">&copy; 2017-2018</p>
</form>






<?php
if (isset($_POST['signin'])) {

    require('mysqli_connect.php');
    
    if(!$conn){
        echo 'Connected failure<br>';
    }else{
    
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
</body>
</html>







<!-- 
<?php session_start();  ?>
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
	<li><?php if(isset($_SESSION['login_user'])){ echo($_SESSION['login_user']); } ?></li>
	<li><a href="logout.php">Logout</a></li>
</ul>
</nav>
<div class="form">
<div class="sign">
	<h1>Sign in</h1>
	<form method="post">
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
if (isset($_POST['signin'])) {

    require('mysqli_connect.php');
    
    if(!$db){
        echo 'Connected failure<br>';
    }else{
    
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
</body>
</html>


-->
