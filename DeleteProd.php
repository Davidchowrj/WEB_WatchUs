<?php 
// This page is for deleting a user record.

$page_title = 'Delete a product';
echo '<h1>Delete a User</h1>';

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
    if ($_POST['sure']=='Yes'){ // Delete the record.

		// Make the query:
		$q = "DELETE FROM product WHERE id=$id";
		$r = @mysqli_query ($conn,$q);
		if (mysqli_affected_rows($conn)==1){// If it ran OK.			 
		    // Print a message:
            echo '<p>The product has been deleted.</p>';
		}else { // If the query did not run OK.
		    echo '<p class="error">The product could not be deleted due to a system error </p>';// Public message.
		    echo '<p>' .mysqli_error($conn) . '<br/>Query: ' .$q. '<p/>';// Debugging message.
		}
    }else {// No confirmation of deletion.
        echo '<p> the product has not been deleted.</p>';
    }														 
} else { // Show the form.

	// Retrieve the user's information:
	$q = "SELECT CONCAT(name, ', ', code) FROM product WHERE id=$id";
	$r = @mysqli_query ($conn, $q);

	if (mysqli_num_rows($r) == 1) { // Valid user ID, show the form.

		// Get the user's information:
		$row = mysqli_fetch_array ($r, MYSQLI_NUM);
		
		// Display the record being deleted:
		echo "<h3>product: $row[0]</h3>
		Are you sure you want to delete this product?";
		
		// Create the form:
		echo '<form action="delete_user.php" method="post">
	<input type="radio" name="sure" value="Yes" /> Yes 
	<input type="radio" name="sure" value="No" checked="checked" /> No
	<input type="submit" name="submit" value="Submit" />
	<input type="hidden" name="id" value="' . $id . '" />
	</form>';
	
	} else { // Not a valid user ID.
		echo '<p class="error">This page has been accessed in error.</p>';
	}

} // End of the main submission conditional.

mysqli_close($conn);
		
?>