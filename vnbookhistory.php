
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
                                <li><a  href="./venues.php">Venues</a></li>
                                <li><a href="./vendors.php">Vendors</a></li>
                                <li><a  href="./login.php">Venue Booking</a></li>
                                <li><a href="./login.php">Vendor Booking</a></li>
                                <li><a class="active"  href="./index.php">Logout</a></li>

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
                            <h2>Venue List</h2>

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

      <th> Booking Id</th>
      <th> Customer Id</th>
       <th>Customer Name</th>
        <th> Venue's Name</th>

         <th> Venue Type</th>
         <th> Venue Location</th>
        <th>Cost per Hour </th>
       <th> Booking Date</th>

       <th>Event date</th>
       <th>Event Type</th>
       <th>Maximum Guest</th>
      <th>Event Duration</th>

       <th>Event Schedule </th>
      <th>Total Bill</th>
       <th>Paid Amount</th>
       <th>Amount Due</th>

   <!-- <th> Manager's Name</th>
    <th>Manger's Email</th>
    <th>Manager's Contact</th>
   -->


    </tr>
  </thead>
  <tbody>
    <?php

       if(!empty($_POST['userid'])  && !empty($_POST['pass'])  ){


       $userid=$_POST['userid'];
       $pass=$_POST['pass'];

        include 'db.php';

       try{
           $con = new PDO("mysql:host=$host;dbname=$database", $username, $password);


           $stmt="SELECT vb.booking_id, c.customer_id, c.name, v.name ,v.type,v.location,v.hourly_cost , vb.booking_date, vb.event_date, vb.event_type, vb.guest_capacity, vb.duration, vb.vn_schedule, vb.total_payment, vb.paid_deposit, vb.amount_due

           FROM customers as c, venues as v , venue_booking as vb
           WHERE c.customer_id= vb.customer_id and v.venue_id=vb.venue_id and  c.cus_username='$userid' and  c.cus_password='$pass'   ";

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
                  . $row[9]. "</td><td>"
                  . $row[10]. "</td><td>"
                  . $row[11]. "</td><td>"
                  . $row[12]. "</td><td>"
                  . $row[13]. "</td><td>"
                  . $row[14]. "</td><td>"
                  . $row[15]. "</td></tr>";

                 }


       }
       catch(PDOException $ex){
           echo "<script>window.location.assign('cutomerpage.php?status=dberror')</script>";
       }
     }else{
           echo "<script>window.location.assign('cutomerpage.php?status=dberror')</script>";
       }


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
