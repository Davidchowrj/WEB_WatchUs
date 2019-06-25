<?php
session_start();
require_once("dbcontroller.php");
$db_handle = new DBController();
$title = "Analog Watches | WatchUS";
$page = "analog";
include "includes/header.php";
?>

<!-- Product Layout -->
<div class="main">
    <div class="container product">
        <h1 class="text-left mt-5 mb-0 "> Analog Watches</h1>
        <hr class="bg-primary mb-2 mt-0 d-inline-block mx-auto w-25">
        <div class="row">
            <div class="col-lg-12 mb-5">
            </div>
        </div>

        <div class="row">
        <?php
	    $product_array = $db_handle->runQuery("SELECT * FROM product WHERE code LIKE 'An%' ORDER BY id ASC");
	    if (!empty($product_array)) { 
		  foreach($product_array as $key=>$value){
	   ?>
            <div class="col-lg-4 col-md-6 col-sm-12 p-3">
                <div class="card h-100 border-0">
                <form method="post" action="cart.php?action=add&code=<?php echo $product_array[$key]["code"]; ?>">
                    <a href="#" class="pop">
                        <img class="card-img-top img-fluid" src="<?php echo $product_array[$key]["image"]; ?>">
                    </a>
                    <div class="card-body">
                        <h4 class="card-title"><?php echo $product_array[$key]["name"]; ?></h4>
                        <p class="card-text"><?php echo "RM ".$product_array[$key]["price"]; ?></p>
                        <div><input type="text" name="quantity" value="1" size="2" /><p></p><input type="submit" value="add to cart" class="btn btn-primary"/></div>
                    </div>
                </form>
                </div>
            </div>
            <?php 
		      }
        }
        ?>
        </div>
    </div>
 </div>





<?php
require ('./config/connectdb.php');

// Number of records to show per page:
$display = 10;

// Determine where in the database to start returning results...
if (isset($_GET['s']) && is_numeric($_GET['s'])) {
    $start = $_GET['s'];
} else {
    $start = 0;
}

// Define the query:
$q = "SELECT id, name, code FROM product WHERE code LIKE 'An%' ORDER BY id ASC";
$r = @mysqli_query ($conn, $q); // Run the query.

// Table header:
echo '<table align="center" cellspacing="0" cellpadding="5" width="75%">
<tr>
	<td align="left"><b>Edit</b></td>
	<td align="left"><b>Delete</b></td>
	<td align="left"><b>id</b></td>
	<td align="left"><b>name</b></td>
	<td align="left"><b>code</b></td>
</tr>
';

// Fetch and print all the records....
$bg = '#eeeeee';
while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
    $bg = ($bg=='#eeeeee' ? '#ffffff' : '#eeeeee');
    echo '<tr bgcolor="' . $bg . '">
		<td align="left"><a href="edit_user.php?id=' .$row['id'] .'">Edit</a></td>
		<td align="left"><a href="delete_user.php?id=' .$row['id'] .'">Delete</a></td>
        <td align="left">'.$row['id'] .'</td>
		<td align="left">'.$row['name'] .'</td>
		<td align="left">'.$row['code'] .'</td>
	</tr>
	';
} // End of WHILE loop.

echo '</table>';

include 'includes/footer.php';

?>
