<?php
session_start();

include('admin/connect.php');
require_once('admin/fns.php');


if(!$_SESSION['user_order'])
{
   $ip = $_SERVER['REMOTE_ADDR'];
   

    $query = "insert into orders set ip_address = '$ip', date_time = '".now()."'";
    $result = mysqli_query($conn,$query);
    $order_id = mysqli_insert_id($conn);

    $_SESSION['user_order'] = $order_id;
}


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
  </head>
  <body>
    <!-- NavBar -->
    <div id="body-overlay"></div>
    <?php include('nav.php'); ?>
    <!-- Content  -->

    <?php
    $query_ban = "select * from home_banners order by rand()";
    $result_ban = mysqli_query($conn,$query_ban); 
    $row_ban = mysqli_fetch_array($result_ban);

    ?>

    <div class="banner">
      <div class="row">
        <div class="left col-md-6">
          <h2>
            Get
            <img src="./images/logo.svg" alt="" style="width: 121px" /> <?php echo $row_ban['heading']; ?>
          </h2>
          <p><?php echo $row_ban['sub_heading']; ?></p>
          <button class="shop-now-btn">Shop Now</button>
        </div>
        <div class="right col-md-6">
          <img src="admin/<?php echo $row_ban['image']; ?>" class="img-fluid" alt="" />
        </div>
      </div>
    </div>
    <!-- Latest Product -->
    <div class="latest-product">

    <?php
    if($_GET['cat_id'])
    {
      $cat_id = $_GET['cat_id'];

      echo '<p>You are viewing '.get_category_name($cat_id).'\'s category</p>';

    }else{
      echo '<p>Latest Product</p>';
    }
      ?>
      



      <div class="row" id="workOuterShell">

      <?php
      if($_GET['cat_id'])
      {
        $cat_id = $_GET['cat_id'];
        $query_prod = "select * from products where cat_id = '$cat_id' order by id asc";
      }
      else{
        $query_prod = "select * from products order by id asc";

      }


      $result_prod = mysqli_query($conn,$query_prod);
      $num_prod = mysqli_num_rows($result_prod);
      for($i=0; $i<$num_prod; $i++)
      {
    $row_prod = mysqli_fetch_array($result_prod);
      ?>

        <div class="img-container item col-md-4" data-aos="zoom-out">
          <a href="productDetails.php?id=<?php echo base64_encode($row_prod['id']); ?>" class="img-shop-now">
            <p class="shop-now action-bar">Shop Now</p>
            <img src="admin/<?php echo $row_prod['image_1']; ?>" alt="" class="img-fluid" />
          </a>
        </div>

        <?php
        }
        ?>
        
        <button id="load-more">Load More</button>
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
