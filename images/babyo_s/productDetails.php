<?php
session_start();

include('admin/connect.php');
require_once('admin/fns.php');

if($_GET['id'])
{
  $id = base64_decode($_GET['id']);
}

$query = "select * from products where id = '$id'";
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_array($result);


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
    <div id="body-overlay"></div>
    <?php include('nav.php'); ?>
    <!-- Product Details -->
    <div class="product-details">
      <div class="row">
        <div class="left col-md-7 row">
          <div class="col-md-4">
            <div class="preview-img">
              <img src="admin/<?php echo $row['image_2']; ?>" alt="" class="img-fluid" />
            </div>
            <div class="preview-img">
              <img src="admin/<?php echo $row['image_3']; ?>" alt="" class="img-fluid" />
            </div>
          </div>
          <div class="middle col-md-8">
            <div class="main-img">
              <img src="admin/<?php echo $row['image_1']; ?>" alt="" class="img-fluid" />
            </div>
          </div>
        </div>
        <div class="right col-md-5">
          <div class="preview-logo">
            <img src="./images/logo.svg" alt="" />
          </div>
          <p class="skill-text"><?php echo $row['title']; ?></p>
          <?php if($success) { ?>
          <div class="alert alert-success"><?php echo $success; ?></div>
            <?php
            }
            ?>

          <p class="amount-text">N<?php echo number_format($row['price'],2); ?></p>
          <div class="color-pick">
            <label for="check-color">Colors: <i><?php echo $row['color']; ?></i> </label> <br />

          </div>
          <div class="color-pick">
            <label for="check-color">Sizes:  <i><?php echo $row['size']; ?></i> </label> <br />
           
           
          </div>

          <form action="proc-cart.php" method="post">
          <p class="quant-text">
            Quantity
            <input
              type="number" name="qty"
              style="width: 48px; height: 28px; text-align: center" required
            />
          </p>
          <p class="quant-text">
            Preferred Color
            <select style="width: 88px; height: 28px; text-align: center" name="color" required>
          <option>Black</option>
          <option>Blue</option>
          <option>White</option>
          <option>Grey</option>
          </select>
          </p>
          <p class="quant-text">
            Preferred Size
            <select style="width: 88px; height: 28px; text-align: center" name="size" required>
          <option>S</option>
          <option>M</option>
          <option>L</option>
          <option>XL</option>
          <option>XXL</option>
          <option>XXXL</option>
          <option>XXXXL</option>
          </select>
          </p>
          <div class="buttons">
            <input type="hidden" name="product_id" value="<?php echo $row['id']; ?>">
            <input type="hidden" name="product_title" value="<?php echo $row['title']; ?>">
            <input type="hidden" name="product_price" value="<?php echo $row['price']; ?>">


            <button type="submit" class="add-to-cart">Add to Cart</button>
            <a href="./paymentInfo.php" class="buy-now">Checkout</a>
            <a href="./index.php" class="btn btn-default">Continue Shopping</a>
          </div>
          </form>
        </div>
      </div>
    </div>
    <!-- You may also like -->
    <div class="recommendation">
      <p id="recommend-text">You may also like</p>
      <div class="image-scroll">
        <div class="row">

        <?php
        $cat_id = $row['cat_id'];
    $query_prod = "select * from products where cat_id = '$cat_id' order by id asc limit 3";
    $result_prod = mysqli_query($conn,$query_prod);
      $num_prod = mysqli_num_rows($result_prod);
      for($i=0; $i<$num_prod; $i++)
      {
    $row_prod = mysqli_fetch_array($result_prod);
      ?>

          <div class="img-container-preview" data-aos="zoom-out">
            <a href="productDetails.php?id=<?php echo base64_encode($row_prod['id']); ?>" class="img-shop-now">
              <p class="shop-now action-bar">Shop Now</p>
              <img src="admin/<?php echo $row_prod['image_1']; ?>" alt="" class="img-fluid" />
            </a>
          </div>
<?php } ?>
        </div>
      </div>
    </div>
    <!-- Footer -->
    <div class="footer">
      <div class="row">
        <div class="left col-md-6">
          <img src="./images/man-holding-megaphone.png" alt="" />
        </div>

        <div class="right col-md-6">
          <div class="text-row">
            <p class="fig-text">80%</p>
            <p class="dis-text">
              Discount <br />
              for more than
              <span style="padding: 0.2rem 0.4rem; background-color: #ffffff"
                >5</span
              >
              <img src="./images/alt-logo.png" alt="" /> T-shirts
            </p>
          </div>
        </div>
      </div>
      <p id="footer-c">&copy; 2022 BabyYo Fashion</p>
    </div>
  </body>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  <script src="./script.js"></script>
</html>
