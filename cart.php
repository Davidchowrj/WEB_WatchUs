<?php
session_start();
$title = "Cart | WatchUs ";
$page = "Cart ";
include "includes/header.php";
require_once("dbcontroller.php");
$db_handle = new DBController();
if (!empty($_GET["action"])) {
    switch ($_GET["action"]) {
        case "add":
            if (!empty($_POST["quantity"])) {
                $productByCode = $db_handle->runQuery("SELECT * FROM product WHERE code='" . $_GET["code"] . "'");
                $itemArray = array($productByCode[0]["code"] => array('image' => $productByCode[0]["image"], 'name' => $productByCode[0]["name"], 'code' => $productByCode[0]["code"], 'quantity' => $_POST["quantity"], 'price' => $productByCode[0]["price"]));

                if (!empty($_SESSION["cart_item"])) {
                    if (in_array($productByCode[0]["code"], $_SESSION["cart_item"])) {
                        foreach ($_SESSION["cart_item"] as $k => $v) {
                            if ($productByCode[0]["code"] == $k)
                                $_SESSION["cart_item"][$k]["quantity"] = $_POST["quantity"];
                        }
                    } else {
                        $_SESSION["cart_item"] = array_merge($_SESSION["cart_item"], $itemArray);
                    }
                } else {
                    $_SESSION["cart_item"] = $itemArray;
                }
            }
            break;
        case "remove":
            if (!empty($_SESSION["cart_item"])) {
                foreach ($_SESSION["cart_item"] as $k => $v) {
                    if ($_GET["code"] == $k)
                        unset($_SESSION["cart_item"][$k]);
                    if (empty($_SESSION["cart_item"]))
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


<!-- image header -->

<header class="cartheader mb-5">
    <div class="container h-100">
        <div class="row h-75 align-items-center">
            <div class="col-12 text-center">
                <h1 class="font-weight-bold text-white "> Shopping Cart </h1>
            </div>

        </div>
    </div>
</header>


<!-- Shopping Cart  section -->

<div class="cartcontainer">
    <div class="row justify-content-center">
        <h1 class="text-center "> Add/Remove items before checking out </h1>
    </div>
</div>




<?php
if (isset($_SESSION["cart_item"])) {
    $item_total = 0;
    ?>
    <div class="container mb-4">
        <div class="row">
            <div class="col-12">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col"> </th>
                                <th scope="col"> Name</th>
                                <th scope="col"> Product Code </th>
                                <th scope="col" class="text-center"> Quantity </th>
                                <th scope="col" class="text-center"> Unit Price (RM)</th>

                                <th> </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($_SESSION["cart_item"] as $item) {
                                ?>
                                <tr>
                                    <td><img class="h-25 w-50" src="<?php echo $item["image"]; ?>"></td>
                                    <td><strong><?php echo $item["name"]; ?></strong></td>
                                    <td><?php echo $item["code"]; ?></td>
                                    <td class="text-center"><?php echo $item["quantity"]; ?></td>
                                    <td class="text-center"><?php echo $item["price"]; ?></td>
                                    <!-- to remove item from shopping cart -->
                                    <td class="text-center"><a href="cart.php?action=remove&code=<?php echo $item["code"]; ?>" class="btnRemoveAction"><i class="fa fa-trash"></i></a></td>
                                </tr>

                                <!-- Formula to calculate total cost -->
                                <?php
                                $item_total += ($item["price"] * $item["quantity"]);
                            }
                            ?>

                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="text-right"><strong> Sub Total: </strong><?php echo "RM " . $item_total; ?></td>
                                <td> <a class="btn btn-danger btn-sm" href="cart.php?action=empty">Empty Cart</a>
                                    <?php
                                    if (isset($_SESSION["cart_item"])) {
                                        $item_total = 0;
                                    }
                                    ?>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
            </table>
        <?php
    }
    ?>
    </div>
</div>
<div class="row my-5">
    <div class="col-12 text-center">
        <a class="btn btn-light" href="javascript:history.back()">Continue Shopping<a>
                <a class="btn btn-primary" href="checkout.php">Checkout</a>
    </div>
</div>

<?php
include "includes/footer.php";
?>