
<?php

    $cusid="";
    $cusname="";

    $vdid="";
    $vdname="";
	$bdate="";
    $edate="";
	$etype="";
    $eloc="";
    $edu="";
    $vdtype="";
    $sch="";

 if(!empty($_POST['cusname']) && !empty($_POST['vdname']) && !empty($_POST['bdate'])  && !empty($_POST['edate']) && !empty($_POST['etype'])  && !empty($_POST['eloc'])  && !empty($_POST['edu']) && !empty($_POST['vdtype']) && !empty($_POST['sch'])   ){


    /*if(isset($_POST['cusname']) && isset($_POST['vdname']) && isset($_POST['bdate'])  && isset($_POST['edate']) && isset($_POST['etype'])  && isset($_POST['eloc'])  && isset($_POST['edu']) && isset($_POST['vdtype']) && isset($_POST['sch'])   ){ */

        $cusname=$_POST['cusname'];

        $vdname=$_POST['vdname'];
        $bdate= $_POST['bdate'] ;
        $edate=$_POST['edate'] ;
        $etype=$_POST['etype'];
        $eloc=$_POST['eloc'] ;
         $edu= $_POST['edu'];


        $vdtype=$_POST['vdtype'];
        $sch= $_POST['sch'];


        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "balloonsandribbons";

        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // find vn id
            $que="SELECT  vendor_id  FROM vendors WHERE type like '$vdtype' and brand_name LIKE \"$vdname\"  ";

            $stmt=$conn->query($que);

            $table=$stmt->fetchAll(PDO::FETCH_NUM);
            $vdid=$table[0][0];


            // get cus id
            $que1="SELECT customer_id FROM customers where name LIKE  '$cusname' ";

            $stmt1=$conn->query($que1);

            $table1=$stmt1->fetchAll(PDO::FETCH_NUM);
            $cusid=$table1[0][0];
            //echo $cusid;

            // booking insert
            $sql = "INSERT INTO vendor_request (customer_id, vendor_id ,booking_date,event_date ,event_type,Event_Location ,duration,event_schedule)
            VALUES ('$cusid','$vdid','$bdate', '$edate', '$etype','$eloc', '$edu', '$sch') ";

            $conn->exec($sql);

            //echo "Vendor booking request pending";
             echo "<script>window.location.assign('customerpage.php')</script>";


         }
         catch(PDOException $e)
          {
           //echo "Database operation error";
            echo "<script>window.location.assign('inner_vdbook.php?status=missingdata')</script>";
           }

                $conn = null;

       }else{
        //echo"missing data / no data entered ";
        echo "<script>window.location.assign('inner_vdbook.php?status=missingdata')</script>";
       }

?>
