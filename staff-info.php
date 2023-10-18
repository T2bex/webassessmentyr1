<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Information</title>
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
                        <li class="dropdown active" ><a href="#">Facilities <i class='bx bxs-down-arrow'></i></a>
                            <div class="dropdown-menu">
                                <ul>
                                    <li><a href="facilities.php">Our Facilities</a></li>
                                    <li><a href="#">Learning Resources</a></li>
                                    <li class="active"><a href="#">Staff Information</a></li>
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
        <!-- company breadcrumb start -->
        <section>
            <div class="lr-breadcrumb">
                <div class="container2">
                    <h1>Facilities</h1>
                </div>
            </div>
        </section>
        <section>
            <div class="c-text">
                <div class="container">
                    <ul class="breadcrumb-texts">
                        <li class="active"><a href="index.php">Home</a></li>
                        <li><i class='bx bx-fast-forward'></i>Staff Information</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- company breadcrumb end -->
    </header>

    <main>
        <section class="staff-section">
            <div class="container2">
                <div class="m-staff si">
                    <div class="staff-heading"><h4>News</h4></div>
                    <div class="container1">
                        
                        <div class="staff-info1">
                            
                            <img src="images/CantorLectureTheatre11.jpg" alt="news image">
                        </div>
                        <div class="staff-info2">
                            <h4>Details</h4>
                            <p>Cantor College recently hosted the Software Engineering student of the year awards. Short-listed candidates from around the country attended the one day event.
                            </p>
                            <button class="m-btn"><a href="#">Read more</a></button>
                        </div>
                    </div>
                </div>

                <div class="m-staff si" style="background: var(--fac);">
                    <div class="staff-heading"><h4>Academic Registry</h4></div>
                    <div class="container1">
                        <div class="staff-info2">
                            <h4>Details</h4>
                            <p>For academic regulations, assessment, awards, student records and course validation.
                            </p>
                            <button class="m-btn"><a href="#">Read more</a></button>
                        </div>

                        <div class="staff-info1">
                            <img src="images/IMG_1099.jpeg" alt="academic registry image">
                        </div>
                    </div>
                </div>

                <div class="m-staff si">
                    <div class="staff-heading"><h4>Catering Services</h4></div>
                    <div class="container1">
                        <div class="staff-info1">
                            <img src="images/Cantor4.jpg" alt="catering service image">
                        </div>
                        <div class="staff-info2">
                            <h4>Details</h4>
                            <p>Contact the Catering Services regarding on and off-site catering.

                            </p>
                            <button class="m-btn"><a href="#">Read more</a></button>
                        </div>
                    </div>
                </div>

                <div class="m-staff si" style="background: var(--fac);">
                    <div class="staff-heading"><h4>Financial Services</h4></div>
                    <div class="container1">
                        <div class="staff-info2">
                            <h4>Details</h4>
                            <p>The financial team based on the 2nd Floor are responsible for all areas of student finance as 
                                well as College budgeting.
                                
                            </p>
                            <button class="m-btn"><a href="#">Read more</a></button>
                        </div>

                        <div class="staff-info1">
                            <img src="images/IMG_1437.jpeg" alt="financial service image">
                        </div>
                    </div>
                </div>

                <div class="m-staff si">
                    <div class="staff-heading"><h4>Information Systems Services</h4></div>
                    <div class="container1">
                        <div class="staff-info1">
                            <img src="images/ACES-036-Computing-Playstation-Lab-2.jpg" alt="Information System image">
                        </div>
                        <div class="staff-info2">
                            <h4>Details</h4>
                            <p>The ISS team delivers the College’s computing facilities including all hardware and software. 
                                They also run the staff helpdesk.

                            </p>
                            <button class="m-btn"><a href="#">Read more</a></button>
                        </div>
                    </div>
                </div>

                <div class="m-staff si" style="background: var(--fac);">
                    <div class="staff-heading"><h4>Marketing Services</h4></div>
                    <div class="container1">
                        <div class="staff-info2">
                            <h4>Details</h4>
                            <p>The Marketing Team will help promote events and new courses. They will help with press 
                                release preparation.
                            </p>
                            <button class="m-btn"><a href="#">Read more</a></button>
                        </div>

                        <div class="staff-info1">
                            <img src="images/IMG_1318.jpeg" alt="marketing service image">
                        </div>
                    </div>
                </div>

                <div class="m-staff si">
                    <div class="staff-heading"><h4>Personnel Services</h4></div>
                    <div class="container1">
                        <div class="staff-info1">
                            <img src="images/main_2529_image4.png" alt="Personnel service image">
                        </div>
                        <div class="staff-info2">
                            <h4>Details</h4>
                            <p>All staff pay and conditions enquiries should be directed to the Personnel Services team on 
                                the 3rd floor.
                            </p>
                            <button class="m-btn"><a href="#">Read more</a></button>
                        </div>
                    </div>
                </div>

                <div class="m-staff" style="background: var(--fac);">
                    <div class="staff-heading"><h4>Facilities</h4></div>
                    <div class="container1">
                        <div class="staff-info2">
                            <h4>Details</h4>
                            <p>The facilities are responsible for the general care and maintenance of the College. All 
                                enquiries via the main helpdesk.
                            </p>
                            <button class="m-btn"><a href="facilities.php">Read more</a></button>
                        </div>

                        <div class="staff-info1">
                            <img src="images/CantorLectureTheatre5.JPG" alt="facilities image">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- <section>
            <div class="container2">
                <div class="staff-info">
                    <h2>Information for Staff</h2>
                </div>
                <div class="staff-main">
                    <h3>News</h3>
                    <p>Cantor College recently hosted the Software Engineering student of the year awards. Short-listed candidates from around the country attended the one day event.
                    </p>
                    <h3>Academic Registry</h3>
                    <p>For academic regulations, assessment, awards, student records and course validation.</p>
                    <h3>Catering Services</h3>
                    <p>Contact the Catering Services regarding on and off-site catering.</p>
                </div>
            </div>
        </section> -->
    </main>

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