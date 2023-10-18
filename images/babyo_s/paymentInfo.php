<?php

session_start();

include('admin/connect.php');
require_once('admin/fns.php');

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="Aledoy Solutions" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Baby Yo!</title>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
      integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="./styles.css" />
    <script src="https://unpclientaos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>

<script src="jquery-3.6.0.min.js"></script>
    <script>
$(document).ready(function() {
    // show the alert
 $(".alert").fadeOut(3000);
});

      </script>
  </head>
  <body>
    <form action="proc-checkout.php" method="post">
    <div class="payment-info">
      <div class="row payment-row">
        <div class="left col-md-7">
          <div class="logo">
            <a href="./index.php">
              <img src="./images/logo.svg" alt="logo" />
            </a>
          </div>
          <div class="info-steps">
            <span>Cart</span>
            <span>></span>
            <span style="font-weight: 700">Information</span>
            <span>></span>
            <span>Shipping</span>
            <span>></span>
            <span>Payment</span>
          </div>
          <div class="contact-info">
            <p>Contact Information</p>

            <?php if($ship_added) { ?>
          <div class="alert alert-success"><?php echo $ship_added; ?></div>
            <?php
            }
            ?>

            <div class="form-row">
              <input type="text" class="form-input" placeholder="First Name" name="firstname" value="<?php echo $_SESSION['firstname']; ?>"/>
              <input type="text" class="form-input" placeholder="Last Name" name="lastname" value="<?php echo $_SESSION['lastname']; ?>" />
            </div>
            <div class="form-row">
              <input type="email" class="form-input" placeholder="Email" name="email"  value="<?php echo $_SESSION['email']; ?>"/>
              <input type="tel" class="form-input" placeholder="Phone Number" name="phone"  value="<?php echo $_SESSION['phone']; ?>"/>
            </div>
            <hr />
            <p>Shipping Address</p>
            <div class="form-row">
              <input type="text" class="ship-add" placeholder="Address" name="address" value="<?php echo $_SESSION['address']; ?>" />
            </div>
            <div class="form-row">
              <input type="text" class="form-input" placeholder="City" name="city" value="<?php echo $_SESSION['city']; ?>" />
              <select name="state" class="form-input">
                <?php if($_SESSION['state'])
                {
                  ?>
                <option><?php echo $_SESSION['state']; ?></option>
              <?php
              }
                ?>
                  <option>Choose State</option>
                  <option>Abuja</option>
                  <option>Lagos</option>
                  <option>Ogun</option>
                  <option>Oyo</option>
                  <option>Port Harcourt</option>
              </select>
            </div>
            <hr />
            <?php if($order_confirmed != 'yes')
            { 
              ?>
            <div class="form-row">
            
            <input type="submit" value="Confirm Order" name="btn_confirm" type="submit" class="bank-transfer col-md-5">
            
              
            </div>
            <?php
            }
            else
            {
              ?>
           
            <hr />
            <div class="checkout-buttons row">
              <label for="">Proceed to Payment</label>
              <button name="btn_paystack" onclick="return confirm('Are you sure? \n\n Clicking OK means you are ready to checkout. You cannot restore your order after this stage')"  type="submit" class="paystack col-md-5">
                <i class="fa-solid fa-bars"></i> Paystack</button
              >
              <input name="btn_transfer"  onclick="return confirm('Are you sure? \n\n Clicking OK means you are ready to checkout. You cannot restore your order after this stage')" type="submit" class="bank-transfer col-md-5" value="Bank Transfer">
               
            </div>
            <?php } ?>
            <a href="./index.php" class="back-to-shop-mobile">
              < Return to cart</a
            >
          </div>
        </div>
        <!-- RIGHT -->
        <div class="right col-md-5">

        <?php if($success) { ?>
          <div class="alert alert-success"><?php echo $success; ?></div>
            <?php
            }
            ?>
         
        <?php
$query = "select * from cart where order_id = '".$_SESSION['user_order']."'";
$result = mysqli_query($conn,$query);
$num = mysqli_num_rows($result);
for($i=0; $i<$num; $i++)
{
  $row = mysqli_fetch_array($result);

  ?>
        
        <div
            class="checkout-details"
            style="display: flex; align-items: center; max-width: 420px"
          >
            <div id="unit-img">
              <p id="unit"><?php echo $row['quantity']; ?></p>
              <img src="<?php echo 'admin/'.get_image($row['product_id']); ?>" style="width:62;height:64px;" alt="" />
            </div>
            <div>
              <p style="margin-bottom: 0; margin-left: 1rem">
                <?php echo substr($row['description'],0,20); ?> <br>
                <a href="delete-item.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure you want to delete this?')"><i class="fa fa-trash text-danger"> </i> </a>
              </p>
              
            </div>
            <div style="text-align: end; margin-left: 3rem">
              <p style="margin-bottom: 0; margin-left: 0.5rem"></p>
              <p style="margin-left: 0.5rem; color: #e31e24"> N<?php echo $row['total_price']; ?> </p>
            </div>
          </div>
          <?php
}
?>

          <div
            class="checkout-details"
            style="
              display: flex;
              align-items: center;
              justify-content: space-between;
              max-width: 420px;
            "
          >
            <p>Subtotal</p>
            <p style="margin-right: 1rem">N<?php echo number_format(cart_sub_total($_SESSION['user_order'])); ?></p>
          </div>
          <div
            class="checkout-details"
            style="
              display: flex;
              align-items: center;
              justify-content: space-between;
              max-width: 420px;
            "
          >
            <p>Shipping</p>
            <p style="margin-right: 1rem">N<?php echo shipping_cost($state); ?></p>
          </div>
          <div
            class="checkout-details"
            style="
              display: flex;
              align-items: center;
              justify-content: space-between;
              max-width: 420px;
            "
          >
            <p>Total</p>
            <p style="margin-right: 1rem; font-size: 30px; font-weight: 700">
              N<?php echo number_format(grand_total($_SESSION['user_order'],$state)); ?>
            </p>
          </div>
          <a href="./index.php" class="back-to-shop"> < Return to cart</a>
        </div>
      </div>
    </div>
</form>
  </body>
</html>
