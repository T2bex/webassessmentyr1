<?php
session_start();

include('admin/connect.php');
require_once('admin/fns.php');

if($_POST['btn_confirm'])
{
    
    $_SESSION['firstname'] = $_POST['firstname'];
    $_SESSION['lastname'] = $_POST['lastname'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['phone'] = $_POST['phone'];
    $_SESSION['address'] = $_POST['address'];
    $_SESSION['city'] = $_POST['city'];
    $_SESSION['state'] = $_POST['state'];
    
    $_SESSION['amount']  = number_format(grand_total($_SESSION['user_order'],$_SESSION['state']));

    
    $state = $_POST['state'];
    $order_confirmed = 'yes';
    $ship_added = 'Shipping cost has been updated';

    include('paymentInfo.php');
    exit;

}

//insert order into the table
$query =  "update orders set firstname = '".$_SESSION['firstname']."', lastname = '".$_SESSION['lastname']."', email = '".$_SESSION['email']."', phone = '".$_SESSION['phone']."', address = '".$_SESSION['address']."', city = '".$_SESSION['city']."', state = '".$_SESSION['state']."', amount = '".$_SESSION['amount']."' where id = '".$_SESSION['user_order']."'";


$result = mysqli_query($conn,$query);

if($_POST['btn_transfer'])
{
    $result = mysqli_query($conn,"update orders set payment_type = 'Bank Transfer' where id = '".$_SESSION['user_order']."'");

    include('thankYou.php');
    exit;
}


$result = mysqli_query($conn,"update orders set payment_type = 'Paystack' where id = '".$_SESSION['user_order']."'");

header("Location: http://paystack.com");

?>