<?php
session_start();
include('admin/connect.php');
require_once('admin/fns.php');

if(!$_SESSION['user_order'])
{
  header("Location: index.php");
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
    <div class="thank-you">
      <div class="row thank-you-row">
        <div class="left col-md-6">
          <div class="logo">
            <a href="./index.php">
              <img src="./images/logo.svg" alt="logo" />
            </a>
          </div>

          <div class="thank-you-note">
            <p>Thank You <?php echo $_SESSION['firstname']; ?></p>
            <p>
              You order was successfully received. We will contact you once we receive payments. You can also send proof of payment to order@babyyofashion.com OR chat with is on WhatsApp <a href="https://api.whatsapp.com/send?phone=2348039515871&text=Hello Babyyo, I just placed an order"><i class="fa fa-whatsapp"> </i> </a>
            </p>
          </div>

          <a href="./index.php">< Home</a>
        </div>
        <!-- RIGHT -->
        <div class="right col-md-6"></div>
      </div>
    </div>
  </body>
</html>

<?php

unset($_SESSION['user_order']);
unset($_SESSION['firstname']);
unset($_SESSION['lastname']);
unset($_SESSION['email']);
unset($_SESSION['address']);
unset($_SESSION['city']);
unset($_SESSION['state']);
session_destroy();

?>
