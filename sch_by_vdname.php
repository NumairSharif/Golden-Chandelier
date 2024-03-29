
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

                                <li><a  href="./venues.php">Venues</a></li>
                                <li><a class="active" href="./vendors.php">Vendors</a></li>
                                <li><a  href="./vn_book.php">Venue Booking</a></li>
                                <li><a href="./vd_book.php">Vendor Booking</a></li>
                                <li><a  href="./login.php">Login</a></li>
                                <li><a  href="./signup.php">Sign up</a></li>
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

    <!-- Contact Section Begin -->
    <section class="contact-section spad">
        <div class="container">
            <div align="center">
            <div class="row">
                <div class="col-lg-12">

                    <div class="contact-text">
                        <div class="section-title">
                            <h2>Vendor List</h2>

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

        </div>
    </section>
    <!-- Contact Section End -->

    <!-- Classes Time Section End -->
    <div class="classes-time-section spad set-bg" data-setbg="img/events-6.jpg">
        <div class="container">
            <div class="row">
              <table class="table table-striped table-dark">
  <thead>
    <tr>

      <th> Brand Name</th>
      <th>Vendor Type</th>
      <th>Experience</th>
      <th> Location</th>
      <th>Specialty </th>
      <th>Hire Cost</th>
      <th>Available Date</th>
       <th>Vendor Free Schedule </th>
      <th>Contact</th>
      <th>Email</th>

   <!-- <th> Manager's Name</th>
    <th>Manger's Email</th>
    <th>Manager's Contact</th>
   -->


    </tr>
  </thead>
  <tbody>
    <?php

           if(isset($_POST['vdname'] ) ){
               $vdname=$_POST['vdname'];
           }

          include 'db.php';

           try{
               $con = new PDO("mysql:host=$host;dbname=$database", $username, $password);

               if(isset($vdname)){
                   $stmt="SELECT v.brand_name,v.type,v.location,v.experience,v.specialty,v.hire_cost,v.availability,v.vendor_schedule,v.contact                    ,v.email
                           FROM vendors as v
                           where v.brand_name is not null and v.brand_name like \"%$vdname%\" ";

                       //echo"$stmt";

                   $returnobject=$con->query($stmt);

                   $table=$returnobject->fetchAll(PDO::FETCH_NUM);

                   foreach($table as $row){
                       echo "<tr> <td>"
                      . $row[0]. "</td><td>"
                      . $row[1]. "</td><td>"
                      . $row[2]. "</td><td>"
                      . $row[3]. "</td><td>"
                      . $row[4]. "</td><td>"
                      . $row[5]. "</td><td>"
                      . $row[6]. "</td><td>"
                      . $row[7]. "</td><td>"
                       . $row[8]. "</td><td>"
                      . $row[9]. "</td></tr>"  ;

                   }
               }

           }catch(PDOException $ex){
               echo "<script>window.location.assign('index.php?status=dberror')</script>";
           }
       ?>
       ?>
  </tbody>
</table>
            </div>
        </div>
    </div>
    <!-- Classes Time Section End -->










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
			<form method="post" class="search-model-form" action="sch_by_vdname.php">
				<input type="text" name="vdname" placeholder="Search here.....">
        <br>
        <br>
          <a href="search_vendor.php" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Search By Filter</a>
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
