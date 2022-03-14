
<?php

    $cusid="";
    $cusname="";

    $vnid="";
    $vuname="";
	$bdate="";
    $edate="";
	$etype="";
    $gc="";
	$edu="";
    $sch="";

  if(!empty($_POST['cusname'])  && !empty($_POST['vuname']) && !empty($_POST['bdate']) && !empty($_POST['edate']) && !empty($_POST['etype']) && !empty($_POST['gc']) && !empty($_POST['edu']) && !empty($_POST['sch']))    {
        /*
    if(isset($_POST['cusname']) && isset($_POST['vuname']) && isset($_POST['bdate']) && isset($_POST['edate']) && isset($_POST['etype']) && isset($_POST['gc']) && isset($_POST['edu']) && isset($_POST['sch'])){ */

        $cusname=$_POST['cusname'];

        $vuname=$_POST['vuname'];
        $bdate= $_POST['bdate'] ;
        $edate=$_POST['edate'] ;
        $etype=$_POST['etype'];
        $gc= $_POST['gc'];
        $edu= $_POST['edu'];
        $sch= $_POST['sch'];

        //db conn
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
             echo "<script>window.location.assign('inner_vnbook.php?status=missingdata')</script>";
           }

                $conn = null;

       }else{
        //echo"missing data / no data entered ";
        echo "<script>window.location.assign('inner_vnbook.php?status=missingdata')</script>";
       }

?>
