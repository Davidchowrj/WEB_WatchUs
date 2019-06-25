<?php
session_start();
$title = "cart | WatchUs Incorporated";
$page = "cart";
include "includes/header.php";
require_once("dbcontroller.php");
$db_handle = new DBController();
if(!empty($_GET["action"])) {
    switch($_GET["action"]) {
        case "add":
            if(!empty($_POST["quantity"])) {
                $productByCode = $db_handle->runQuery("SELECT * FROM product WHERE code='" . $_GET["code"] . "'");
                $itemArray = array($productByCode[0]["code"]=>array('image'=>$productByCode[0]["image"], 'name'=>$productByCode[0]["name"], 'code'=>$productByCode[0]["code"], 'quantity'=>$_POST["quantity"], 'price'=>$productByCode[0]["price"]));
                
                if(!empty($_SESSION["cart_item"])) {
                    if(in_array($productByCode[0]["code"],$_SESSION["cart_item"])) {
                        foreach($_SESSION["cart_item"] as $k => $v) {
                            if($productByCode[0]["code"] == $k)
                                $_SESSION["cart_item"][$k]["quantity"] = $_POST["quantity"];
                        }
                    } else {
                        $_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
                    }
                } else {
                    $_SESSION["cart_item"] = $itemArray;
                }
            }
            break;
        case "remove":
            if(!empty($_SESSION["cart_item"])) {
                foreach($_SESSION["cart_item"] as $k => $v) {
                    if($_GET["code"] == $k)
                        unset($_SESSION["cart_item"][$k]);
                        if(empty($_SESSION["cart_item"]))
                            unset($_SESSION["cart_item"]);
                }
            }
            break;
        case "empty":
            unset($_SESSION["cart_item"]);
            break;
    }
}
?>


<div class="row mb-4">
	<div class="col-md-12">
		<div class="card" style="background-image: url(https://i0.wp.com/www.coolestrol.info/wp-content/uploads/2017/02/New-Step-by-Step-Roadmap-for-Watch-Photography-Ideas-74.jpg)" width="1280" height="239">
			<div class="text-white text-center d-flex align-items-center py-5 px-4 my-5">
				<div class="w-100 text-white">
					<h1 class="display-2"><strong>CART</strong></h1>
				</div>
			</div>
		</div>
	</div>
</div>


<div id="shopping-cart">
<div class="txt-heading">Shopping Cart <a id="btnEmpty" href="cart.php?action=empty">Empty Cart</a></div>
<?php
if(isset($_SESSION["cart_item"])){
    $item_total = 0;
?>	
<table>
	<tr>
		<th><strong>item</strong></th>
		<th><strong>Name</strong></th>
		<th><strong>Code</strong></th>
		<th><strong>Quantity</strong></th>
		<th><strong>Unit Price <br> (RM)</strong></th>
		<th><strong>Action</strong></th>
	</tr>
<?php
foreach ($_SESSION["cart_item"] as $item){
    ?>	
		<tr>
		<td><img src="<?php echo $item["image"];?>"></td>
		<td><strong><?php echo $item["name"];?></strong></td>
		<td><?php echo $item["code"];?></td>
		<td><?php echo $item["quantity"];?></td>
		<td><?php echo $item["price"];?></td>
		<td><a href="cart.php?action=remove&code=<?php echo $item["code"];?>" class="btnRemoveAction">remove Item</a></td>
		</tr>
		<?php 
	$item_total += ($item["price"]*$item["quantity"]);
    }
	?>
<tr>
	<td colspan="5" align=right><strong>Total:</strong>	<?php echo "RM ".$item_total;?></td>
</tr>
</table>
<?php
}
?>
</div>



<?php
include "includes/footer.php";
?>