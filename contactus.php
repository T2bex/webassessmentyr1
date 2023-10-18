<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us Page</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css"/>
    <!-- <link rel="stylesheet" href="css/mobile.css"> -->
    <link rel="icon" type="icon.png" href="images/logo.png">
    <link rel="stylesheet" href="css/desktop.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- media="only screen and (min-width : 700px)" -->
</head>
<body>
    <header>
        <!-- Navbar start-->
        <nav>
            <div class="nav-bar">
                <i class='bx bx-menu sidebarOpen'></i>
                <span class="logo navLogo"><a href="index.php"><img src="images/logo.png" alt="Logo"></a></span>
                <div class="menu">
                    <div class="logo-toggle">
                        <span class="logo"><a href="index.php"><img src="images/logo.png" alt="Logo"></a></span>
                        <i class='bx bx-x sidebarClose'></i>
                    </div>
                    <ul class="nav-links">
                        <li><a href="index.php">Home</a></li>
                        <li class="dropdown"><a href="#">About Us <i class='bx bxs-down-arrow'></i></a>
                            <div class="dropdown-menu">
                                <ul>
                                    <li><a href="school.php">Our School</a></li>
                                    <!-- <li><a href="#">How To Find Us</a></li> -->
                                    <li><a href="computing.php">Computing Courses</a></li>
                                    <li><a href="design.php">Design Courses</a></li>
                                    <!-- <li><a href="#">How To Find Us</a></li> -->
                                </ul>
                            </div>
                        </li>
                        <li class="dropdown"><a href="#">Facilities <i class='bx bxs-down-arrow'></i></a>
                            <div class="dropdown-menu">
                                <ul>
                                    <li><a href="facilities.php">Our Facilities</a></li>
                                    <li><a href="learning.php">Learning Resources</a></li>
                                    <li><a href="staff-info.php">Staff Information</a></li>
                                    <li><a href="student-info.php">Student Information</a></li>
                                    <!-- <li><a href="#">How To Find Us</a></li> -->
                                </ul>
                            </div>
                        </li>
                        <li><a href="business.php">Working With Business</a></li>
                        <li class="active"><a href="#">Contact Us</a></li>
                    </ul>
                </div>
                <div class="darkLight-searchBox">
                    <div class="dark-light">
                        <i class='bx bx-moon moon'></i>
                        <i class='bx bx-sun sun'></i>
                    </div>

                    <div class="searchBox">
                        <div class="searchToggle">
                            <i class='bx bx-x cancel'></i>
                            <i class='bx bx-search search'></i>
                        </div>

                        <div class="search-field">
                            <input type="text" placeholder="Search...">
                            <i class='bx bx-search'></i>
                        </div>

                    </div>
                </div>
                
            </div>
        </nav>
        <!-- navbar end-->
        <!-- company breadcrumb start -->
        <section>
            <div class="c-breadcrumb">
                <div class="container2">
                    <h1>Contact US</h1>
                </div>
            </div>
        </section>
        <section>
            <div class="c-text">
                <div class="container">
                    <ul class="breadcrumb-texts">
                        <li class="active"><a href="index.php">Home</a></li>
                        <li><i class='bx bx-fast-forward'></i>Contact Us</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- company breadcrumb end -->
    </header>

    <main>
        <section class="contactus-form">
            <div class="container1">
                <div class="c-messageform">
                    <div class="container2">
                        <div class="l-message">
                            <h2>Leave us a Message</h2>
                            <p>For more information about the school, please feel free to get in touch with us.</p>
                            <h3>Email:</h3>
                            <p>info@cantorcollege.ac.uk</p>
                            <h3>Address:</h3>
                            <p>Cantor College, Main Street, Sheffield, SC4 2BB</p>
                            <h3>Tel:</h3>
                            <p>(01321) 2340 235</p>
                            <h3>Fax:</h3>
                            <p>(01321) 2340 235</p>
                        </div>
                    </div>
                </div>
                <div class="c-form">
                    <div class="container2">
                        
                        <form action="pro_message.php" method="post">
                            <?php
                                if($formerror)
                                {
                                    echo '<div style="color:red;"> *Couldnt send any details to the mail.</div>';
                                }

                                if($inputerror)
                                {
                                    echo '<div style="color:red;"> *Your firstname, lastname and email are required</div>';
                                }

                                if($formsuccess)
                                {
                                    echo '<div style="color:green;"> *It has been sent successfully</div>';
                                }

                                if($emailerror)
                                {
                                    echo '<div style="color:red;"> *Cant send anything without your e-mail</div>';
                                }

                                if($fnameerror)
                                {
                                    echo '<div style="color:red;"> *Please input your name</div>';
                                }
                            ?>
                            <div class="cf1"><input type="text" name="firstname" class="first_name" placeholder="Your Firstname*" required></div>
                            <div class="cf2"><input type="text" name="lastname" class="last_name" placeholder="Your Lastname*"></div>
                            <div class="cf2"><input type="email" name="email" class="c-email" placeholder="Email*" required></div>
                            <div class="cf2"><input type="text" name="subject" class="subject" placeholder="Subject*" required></div>
                            <div class="cf3"><textarea type="text" name="messages" id="c-message" class="cmessage" cols="30" rows="10" placeholder="Type your messages here*" required></textarea></div>
                            <div class="cf4"><button type="submit" class="btn1">Submit</button></div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </section>
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9520.463137341432!2d-1.4861993565554386!3d53.37697778120402!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487982838da44e19%3A0x3df4f5797cbc90fb!2sCantor%2C%20153%20Arundel%20St%2C%20Sheffield%20City%20Centre%2C%20Sheffield%20S1%202NT!5e0!3m2!1sen!2suk!4v1671680484117!5m2!1sen!2suk" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </main>

    <!-- move-top -->
    <section>
        <button onclick="topFunction()" id="movetop" class="move-top" title="Go to top">
            <span><i class='bx bx-chevrons-up up'></i></span>
          </button>
    </section>
    <!-- move-top end -->

    <footer>
        <p>&copy; 2022 Tobe's Project</p>
    </footer>
    <script src="js/main.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
</body>
</html>