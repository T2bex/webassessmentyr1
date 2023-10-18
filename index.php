<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
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
                        <li class="active"><a href="#">Home</a></li>
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
                        <li><a href="contactus.php">Contact Us</a></li>
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
    </header>

    <!-- carousel slider start-->
    <section class="slide_init">
       <div class="carousel-slider">
            <div class="slider active">
                <img src="images/cantor-gallery.jpg" alt="1st slide">
                <div class="info">
                    <h2 class="animated bounceInRight" style="animation-delay: 1s;">cantour college</h2>
                    <p class="animated bounceInLeft" style="animation-delay: 2s;">gives our students the education they need to achieve their career aim</p>
                    <!-- <button class="btn1 animated bounceInRight" style="animation-delay: 3s;"><a href="school.php">Read more</a></button> --> 
                </div>
            </div>
            
            <div class="slider">
                <img src="images/Cantor atrium 3.jpg" alt="2nd slide">
                <div class="info">
                    <h2 class="animated bounceInRight" style="animation-delay: 1s;">cantour college</h2>
                    <p class="animated bounceInLeft" style="animation-delay: 2s;">gives you the opportunities that can give you the edge when you enter the world of work</p>
                    <!-- <button class="btn1 animated bounceInRight" style="animation-delay: 3s;"><a href="school.php">Read more</a></button> -->
                </div>
            </div>

            <div class="slider">
                <img src="images/Cantor atrium 4.jpg" alt="3rd slide">
                <div class="info">
                    <h2 class="animated bounceInRight" style="animation-delay: 1s;">cantour college</h2>
                    <p class="animated bounceInLeft" style="animation-delay: 2s;">equips our students with real life skills</p>
                    <!-- <button class="btn1 animated bounceInRight" style="animation-delay: 3s;"><a href="school.php">Read more</a></button> -->
                </div>
            </div>
            <div class="navigation">
                <div class="btn active"></div>
                <div class="btn"></div>
                <div class="btn"></div>
            </div>
        </div>
    </div>
    </section>
    <!-- carousel slider end-->

    <main>
        <section >
            <div class="container1">
                <div class="flexbox-item1">
                    <img src="images/Cantor Lecture Theatre 3.jpg" alt="home-about us">
                    
                </div>
                <div class="flexbox-item2">
                    <h4 style="margin-bottom: 10px;">About US</h5>
                        <p>At Cantor College, we want to give students the education they need to achieve their career aims, leaving them equipped with the knowledge, skills and experience to succeed. Cantor College gives you the opportunities that can give you the edge when you enter the world of work, through our teaching and our links to some of the world's leading researchers and employers. Our students have gone on to successful careers in a wide range of industries across the globe.</p>
                        <button class="btn1 animated bounceInRight" style="animation-delay: 3s;"><a href="school.php">Read more</a></button>
                </div>
            </div>
        </section>

        <section class="fac">
            <div class="container2">
                <div class="facilities">
                    <h2>Our Facilities</h2>
                </div>
                <div class="f-info">
                    <!-- <p>The College is located in the attractive and pleasantly refurbished Building. The building houses computing laboratories, and lecture/tutorial rooms. It has its own catering facilities and student work areas. There is also a car park to the back of the building.</p> -->
                    <div class="mf-info">
                        <div class="mf-info1">
                            <i class='bx bx-wifi'></i>
                            <h5>Wifi Technology</h5>
                        </div>

                        <div class="mf-info2">
                            <i class='bx bx-chalkboard'></i>
                            <h5>Pool Teaching Rooms</h5>
                        </div>

                        <div class="mf-info2">
                            <i class='bx bx-building'></i>
                            <h5>Specialist faculty facilities</h5>
                        </div>

                        
                    </div>
                    
                    <div class="mf-info">
                        <div class="mf-info1">
                            <i class='bx bx-bell'></i>
                            <h5>reception desk area</h5>
                        </div>

                        

                        <div class="mf-info2">
                            <i class='bx bxs-parking'></i>
                            <h5>parking for disabled badge holders</h5>
                        </div>

                        <div class="mf-info2">
                            <i class='bx bx-scatter-chart'></i>
                            <h5>meeting rooms in school area</h5>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="home-btn">
                <button class="btn1"><a href="facilities.php">Read More</a></button>
            </div>
        </section>

        <!-- move-top -->
        <section>
            <button onclick="topFunction()" id="movetop" class="move-top" title="Go to top">
                <span><i class='bx bx-chevrons-up up'></i></span>
              </button>
        </section>
        <!-- move-top end -->
    </main>
    <footer>
        <p>&copy; 2022 Tobe's Project</p>
    </footer>
    <script src="js/main.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
</body>
</html>