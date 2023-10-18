<?php
session_start();

include('admin/connect.php');
require_once('admin/fns.php');

$id = $_GET['id'];

$query = "delete from cart where id  = '$id'";
$result = mysqli_query($conn,$query);
if($result)
{
    $success = 'Item has been delted from cart';
    include('paymentInfo.php');
    exit;
}

?>