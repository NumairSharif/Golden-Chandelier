<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Yoga Studio Template">
    <meta name="keywords" content="Yoga, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CrossFit | Template</title>

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
                                <li><a href="./about-us.php">About us</a></li>
                                <li><a href="./venues.php">Venues</a></li>
                                <li><a href="./blog.php">Vendors</a></li>
                                <li><a a class="active"  href="./vn_book.php">Venue Booking</a></li>
                                <li><a href="./login.php">Vendor Booking</a></li>
                                <li><a  href="./login.php">Login</a></li>
                                <li><a  href="./  signup.php">Sign Up</a></li>

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
    <div class="hero-section set-bg" data-setbg="img/events-5.jpg">
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
    <?php

        $cusid="";
        $cusname="";
    	$add="";
        $con="";
    	$email="";
        $usname="";
        $cuspass="";

        $vnid="";
        $vuname="";
    	$bdate="";
        $edate="";
    	$etype="";
        $gc="";
    	$edu="";
        $sch="";

      if(!empty($_POST['cusname']) && !empty($_POST['add']) && !empty($_POST['con']) && !empty($_POST['cusemail'])&& !empty($_POST['usname']) && !empty($_POST['cuspass'])  && !empty($_POST['vuname']) && !empty($_POST['bdate']) && !empty($_POST['edate']) && !empty($_POST['etype']) && !empty($_POST['gc']) && !empty($_POST['edu']) && !empty($_POST['sch']))    {
            /*
        if(isset($_POST['cusname']) && isset($_POST['add']) && isset($_POST['con']) && isset($_POST['cusemail'])&& isset($_POST['usname']) && isset($_POST['cuspass'])  && isset($_POST['vuname']) && isset($_POST['bdate']) && isset($_POST['edate']) && isset($_POST['etype']) && isset($_POST['gc']) && isset($_POST['edu']) && isset($_POST['sch'])){ */

            $cusname=$_POST['cusname'];
            $add= $_POST['add'] ;
            $con=$_POST['con'] ;
            $email=$_POST['cusemail'];
            $usname=$_POST['usname'] ;
            $cuspass=$_POST['cuspass'];

            $vuname=$_POST['vuname'];
            $bdate= $_POST['bdate'] ;
            $edate=$_POST['edate'] ;
            $etype=$_POST['etype'];
            $gc= $_POST['gc'];
            $edu= $_POST['edu'];
            $sch= $_POST['sch'];


            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "balloonsandribbons";

            try {
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                // find vn id
                $que="SELECT venue_id FROM venues WHERE name LIKE \"$vuname\" ";

                $stmt=$conn->query($que);
                $table=$stmt->fetchAll(PDO::FETCH_NUM);
                $vnid=$table[0][0];


                // insert cus info
                $set1 = "INSERT INTO customers(name, address, contact, email, cus_username, cus_password)
                        VALUES ('$cusname','$add','$con','$email','$usname','$cuspass')" ;

                $conn->exec($set1);
                //echo"cus inserted";

                // get cus id
                $que1="SELECT customer_id FROM customers WHERE name LIKE \"$cusname\" ";
                $stmt1=$conn->query($que1);

                $table1=$stmt1->fetchAll(PDO::FETCH_NUM);
                $cusid=$table1[0][0];
                //echo "$vnid and $cusid";
                // booking req insert
                $sql = "INSERT INTO venue_request(customer_id,venue_id,booking_date, event_date, event_type, guest_capacity,duration,event_schedule )
                VALUES ('$cusid','$vnid','$bdate','$edate','$etype ', '$gc' , '$edu',' $sch')";
                //echo "$sql";
                $conn->exec($sql);
                //echo "Booking request pending ";
                //echo "<script>window.location.assign('vn_req.php?status=Booking request pending')</script>";
                echo "<script>window.location.assign('customerpage.php')</script>";


             }
             catch(PDOException $e)
              {
                //echo "Database operation error";
                 echo "<script>window.location.assign('vn_book.php?status=missingdata')</script>";
               }

                    $conn = null;

           }else{
            //echo"missing data / no data entered ";
            echo "<script>window.location.assign('vn_book.php?status=missingdata')</script>";
           }

    ?>
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
      <form method="post" class="search-model-form" action="sch_by_vnname.php">
        <input type="text" name="vnname" placeholder="Search here.....">
        <br>
        <br>
          <a href="search_venue.php" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Search By Filter</a>

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
