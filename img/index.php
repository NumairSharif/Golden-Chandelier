<!DOCTYPE html>
<html>
<head>
	<title> Before Login Home Page </title>
	<style type="text/css">

		body{
			background-color:#D6EAF8    ;
		}

		table {
			border: 1px solid black;
			padding: 10px;
			border-collapse: collapse;
		}

		tr, td {
			padding: 10px;
		}

		

		#table1 {
			background-color:#73C6B6  ;
			margin-left: 35%; 
			margin-top: 10%;
		}

	</style>
	
</head>
<body>
    
    <ul style="list-style-type:none;">
        <li>
            <a href="website.php">
                     <img src="back.jpg" alt="Back" style="width:42px;height:42px;border:0">
            </a>
            <a href="index.php">
                     <img src="reload.jpg" alt="Back" style="width:42px;height:42px;border:0">
            </a>
        </li>
	</ul>
	<h1 style="font-family: arial ; font-size:300% ;  color: #E91E63  ; margin-left: 40% ; background-color: #D6EAF8   ;">
	    Login
	</h1>

	

	<form method="post" action="validitytest.php">


		<table id="table1" >

			<tbody>
				<tr>
					<td> Username </td>
					<td> <input id="uname" type="text" name="uname" > </td>
				</tr>
				<tr>
					<td> Password </td>
					<td> <input type="password" id="pass" name="pass"> </td>
				</tr>
				<tr>
					<td colspan="2"> <input type="submit" value="Log In" style="width: 100%"> </td>
				</tr>
			
			</tbody>	
		</table>



	</form>	

	<?php
			if(isset($_GET['status'])){
				$status=$_GET['status'];
				if($status=='invalid'){
					echo "<script>window.alert('invalid input')</script>";
				}
				else if($status=='dberror'){
					echo "<script>window.alert('Database Connection Error')</script>";
				}
				else if($status=='wrongdata'){
					echo "<script>window.alert('Wrong Username or Password')</script>";
				}
			}
			
	?>
		

</body>
</html>