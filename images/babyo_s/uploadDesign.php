<?php

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
  </head>
  <body>
    <!-- NavBar -->
    <div id="body-overlay"></div>
    <?php include('nav.php'); ?>
    <div class="upload-design">
      <div class="row">
        <div class="left col-md-6">
          <p>Upload your design here</p>
          <div class="file-box">
            <p>
              <i
                class="fa-solid fa-upload"
                style="font-size: 50px; color: #979797"
              ></i>
            </p>
            <p>Click to upload</p>
            <form action="" method="post" enctype="">
              <input type="file" name="file" id="upload-file" />
            </form>
          </div>
          <div class="add-btn-div">
            <button class="add-to-cart-btn">Add to cart</button>
          </div>
        </div>
        <div class="right col-md-6">
          <select name="" id="color-selector">
            <option value="" disabled selected>Choose a color</option>
            <option>Green</option>
            <option>Blue</option>
            <option>Red</option>
          </select>

          <div class="cloth-img-div">
            <img
              src="./images/T-Shirt Plain.png"
              alt=""
              class="img-fluid"
              data-aos="fade-in"
            />
          </div>
        </div>
      </div>
    </div>
    <!-- Footer -->

    <p id="footer-upload">&copy; 2022 BabyYo Fashion</p>
  </body>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  <script src="./script.js"></script>
</html>
