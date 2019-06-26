<?php 
// This page is for editing a user record.

$page_title = 'Edit a product';
echo '<h1>Edit a product information</h1>';

// Check for a valid user ID, through GET or POST:
if ( (isset($_GET['id'])) && (is_numeric($_GET['id'])) ) { // From view_users.php
	$id = $_GET['id'];
} elseif ( (isset($_POST['id'])) && (is_numeric($_POST['id'])) ) { // Form submission.
	$id = $_POST['id'];
} else { // No valid ID, kill the script.
	echo '<p class="error">This page has been accessed in error.</p>';
	exit();
}
require ('./config/connectdb.php');
//

// Check if the form has been submitted:
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	$errors = array();
	
	// Check for a first id:
	if (empty($_POST['name'])) {
		$errors[] = 'You forgot to enter product name.';
	} else {
		$n = mysqli_real_escape_string($conn, trim($_POST['name']));
	}
	
	// Check for a name:
	if (empty($_POST['code'])) {
		$errors[] = 'You forgot to enter product code.';
	} else {
		$c = mysqli_real_escape_string($conn, trim($_POST['code']));
	}

	// Check for an product code:
	if (empty($_POST['price'])) {
		$errors[] = 'You forgot to enter product price.';
	} else {
		$pr = mysqli_real_escape_string($conn, trim($_POST['price']));
	}
	
	if (empty($errors)) { // If everything's OK.
	
		//  Test for unique email address:
		$q="SELECT id FROM product WHERE code='$c' AND id !=$id";
		$r=@mysqli_query($conn,$q);
		if (mysqli_num_rows($r) == 0) {
         
			// Make the query:
		    $q="UPDATE product SET name='$n', code='$c', price='$pr' WHERE id=$id LIMIT 1";
            $r =@mysqli_query($conn,$q);	
			if (mysqli_affected_rows($conn) == 1) { // If it ran OK.

				// Print a message:
				echo '<p>The product has been updated.</p>';	
				
			} else { // If it did not run OK.
				echo '<p class="error">The product could not be edited due to a system error. We apologize for any inconvenience.</p>'; 
				echo '<p>' . mysqli_error($conn) . '<br />Query: ' . $q . '</p>';
			}
				
		} else { // Already registered.
			echo '<p class="error">The product code has already been used.</p>';
		}
		
	} else { // Report the errors.

		echo '<p class="error">The following error(s) occurred:<br />';
		foreach ($errors as $msg) { // Print each error.
			echo " - $msg<br />\n";
		}
		echo '</p><p>Please try again.</p>';
	
	} // End of if (empty($errors)) IF.

} // End of submit conditional.

// Always show the form...

// Retrieve the user's information:
$q = "SELECT name, code, price FROM product WHERE id=$id";		
$r = @mysqli_query ($conn, $q);

if (mysqli_num_rows($r) == 1) { // Valid user ID, show the form.

	// Get the user's information:
	$row = mysqli_fetch_array ($r, MYSQLI_NUM);
	
	// Create the form:
	echo '<form action="EditProd.php" method="post">
<p>Name: <input type="text" name="name" size="15" maxlength="100" value="' . $row[0] . '" /></p>
<p>code: <input type="text" name="code" size="10" maxlength="15" value="' . $row[1] . '" /></p>
<p>price: <input type="text" name="price" size="20" maxlength="60" value="' . $row[2] . '"  /> </p>
<p><input type="submit" name="submit" value="Submit" /></p>
<input type="hidden" name="id" value="' . $id . '" />
</form>';

} else { 
	echo '<p class="error">This page has been accessed in error.</p>';
}

mysqli_close($conn);
		
?>