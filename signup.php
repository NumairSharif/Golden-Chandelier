<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Yoga Studio Template">
    <meta name="keywords" content="Yoga, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,500,600,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="container-fluid">
            <div class="inner-header">
                <div class="row">
                    <div class="col-lg-2 col-md-2">
                        <div class="logo">
                            <a href="./index.html"><img src="img/logo2.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-10 col-md-10">
                        <nav class="main-menu mobile-menu">
                            <ul>
                                <li><a href="./index.php">Home</a></li>

                                <li><a href="./venues.php">Venues</a></li>
                                <li><a href="./vendors.php">Vendors</a></li>
                                <li><a  href="./vn_book.php">Venue Booking</a></li>
                                <li><a href="./vd_book.php">Vendor Booking</a></li>
                                <li><a  href="./login.php">Login</a></li>
                                  <li><a class="active" href="./signup.php">Sign up</a></li>
                                <li class="phone-num"><i class="fa fa-phone"></i><span>call us at +88014444444</span></li>
                                <li class="search-btn search-trigger"><i class="fa fa-search"></i></li>
                            </ul>
                        </nav>
                        <div id="mobile-menu-wrap"></div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->
    <!-- Hero Section Begin -->
    <div class="hero-section set-bg" data-setbg="img/events-17.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hero-text">
                        <h1>Contact</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Section End -->
    <!-- Contact Section Begin -->
    <section class="contact-section spad">
        <div class="container">
            <div align="center">
            <div class="row">
                <div class="col-lg-12">

                    <div class="contact-text">
                        <div class="section-title">
                            <h2>Sign Up</h2>

                        </div>

                        <div class="contact-widget">
                            <ul>
                                <li></li>
                                <li></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
          </div>
          <div align="center">
            <div class="row">

              <div class="col-lg-12">
                  <form action="insert_cus_info.php" method="post" class="contact-form">
                      <div class="row">
                        <div class="col-lg-12">
                            <input type="text"  id="cusname"  name="cusname" placeholder="Name">
                        </div>

                         <div class="col-lg-12">
                              <input type="text" id="add" name="add" placeholder="Address">

                        </div>

                        <div class="col-lg-12">
                             <input type="text" id="con"  name="con" placeholder="Contact">

                       </div>

                       <div class="col-lg-12">
                            <input type="text" id="cusemail"  name="cusemail" placeholder="E-mail">

                      </div>

                      <div class="col-lg-12">
                           <input type="text" id="usname"  name="usname" placeholder="Username">

                     </div>

                     <div class="col-lg-12">
                          <input type="password" id="cuspass"  name="cuspass" placeholder="Password">

                    </div>
                         <div class="col-lg-12">
                          <input type="submit" class="submit-btn contact-btn" value="Signup">
                        </div>

                      </div>
                  </form>
              </div>



            </div>
          </div>
        </div>
    </section>
    <!-- Contact Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-text">
                        <div class="reserved"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
                        <div class="social-links">
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                            <a href="#"><i class="fa fa-behance"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->
    <!-- Search model -->
    <div class="search-model">
  		<div class="h-100 d-flex align-items-center justify-content-center">
  			<div class="search-close-switch">+</div>
  			<form class="search-model-form" method="post" action="sch_by_vnname.php">
  				<input type="text" id="vnname" name="vnname" placeholder="Search Venues">
  			</form>
        <form class="search-model-form" method="post" action="sch_by_vdname.php">
  				<input type="text" id="vdname" name="vdname" placeholder="Search Vendors">
  			</form>
  		</div>
  	</div>
    <!-- Search model end -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/circle-progress.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
