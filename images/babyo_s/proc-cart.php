<?php
session_start();

include('admin/connect.php');
require_once('admin/fns.php');

$product_id = $_POST['product_id'];
$product_title = $_POST['product_title'];
$product_price = $_POST['product_price'];
$qty = $_POST['qty'];
$color = $_POST['color'];
$size = $_POST['size'];
$order_id = $_SESSION['user_order'];

$description = $product_title.'('.$size.', '.$color.')';
$total_price = $product_price*$qty;


$query = "insert into cart set order_id = '$order_id', product_id='$product_id', description='$description', quantity='$qty', unit_price='$product_price', total_price='$total_price'";
$result = mysqli_query($conn,$query);
if($result)
{
    $success = $product_title.' has been added to cart';
   $id = $product_id;
    include('productDetails.php');
    exit;
}

?>