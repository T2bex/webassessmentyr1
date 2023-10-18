
          <nav class="real-menu" role="navigation">
      <ul class="navbar-nav">
      <?php
        $query_cat = "select * from categories";
        $result_cat = mysqli_query($conn,$query_cat);
        $num_cat = mysqli_num_rows($result_cat);
        for($i=0; $i<$num_cat; $i++)
        {
            $row_cat = mysqli_fetch_array($result_cat);
        ?>

            <li class="nav-item dropdown">
            <a class="nav-link" href="index.php?cat_id=<?php echo $row_cat['id']; ?>"><?php echo $row_cat['cat_name']; ?></a>
          </li>
          <?php
        }
        ?>
       
        <li class="nav-item dropdown">
          <a class="nav-link Upload-design" href="./uploaddesign.php">
            Upload your Design
          </a>
        </li>
      </ul>
    </nav>

    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container nav-con">
        <a class="navbar-brand" href="index.php">
          <img
            src="./images/logo.svg"
            alt=""
            class="d-inline-block align-text-top logo img-fluid"
          />
        </a>
        <ul class="navbar-nav desktop-view">
        <?php
        $query_cat = "select * from categories";
        $result_cat = mysqli_query($conn,$query_cat);
        $num_cat = mysqli_num_rows($result_cat);
        for($i=0; $i<$num_cat; $i++)
        {
            $row_cat = mysqli_fetch_array($result_cat);
        ?>

            <li class="nav-item dropdown">
            <a class="nav-link" href="index.php?cat_id=<?php echo $row_cat['id']; ?>"><?php echo $row_cat['cat_name']; ?></a>
          </li>
          <?php
        }
        ?>

          <li class="nav-item dropdown">
            <a class="nav-link Upload-design" href="./uploaddesign.php">
              Upload your Design
            </a>
          </li>
        </ul>
        <div>
          <button class="nobac"><i class="fa-solid fa-user"></i></button>
          <a href="paymentInfo.php"><button class="nobac">
            <i class="fa-solid fa-cart-shopping"> </i> <span class="badge" style="background-color:red;"><?php echo cart_item($_SESSION['user_order']);?></span>
          </button> </a>
          <button class="nobac">
            <i class="fa-solid fa-magnifying-glass"></i>
          </button>
        </div>
        <button id="open-menu"><i class="fa-solid fa-bars"></i></button>
      </div>
    </nav>