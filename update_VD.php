<?php session_start();
include 'dbconnect.inc';
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
        <style>
		#ios{
			font-family: "Adequate";
			src: url(Adequate-ExtraLight.ttf) format("truetype");
		}
		#ios1{
			font-family: Century Gothic; font-size:20px;
		}
		#identify01{
			font-family: "Adequate";
			src: url(Adequate-ExtraLight.ttf) format("truetype");
			font-size: 35px;
			color: white;
		}
		.clearfix::after {
			content: "";
			clear: both;
			display: table;
		}
		/* Navbar container */
		.navbar {
		  overflow: hidden;
		  background-color: #333;
		  font-family: Arial;
		}

		/* Links inside the navbar */
		.navbar a {
		  float: left;
		  font-size: 16px;
		  color: white;
		  text-align: center;
		  padding: 14px 16px;
		  text-decoration: none;
		}

		/* The dropdown container */
		.dropdown {
		  float: left;
		  overflow: hidden;
		}

		/* Dropdown button */
		.dropdown .dropbtn {
		  font-size: 15px; 
		  border: none;
		  outline: none;
		  color: white;
		  padding: 8px 8px;
		  background-color: inherit;
		  font-family: inherit; /* Important for vertical align on mobile phones */
		  margin: 0; /* Important for vertical align on mobile phones */
		}

		/* Add a red background color to navbar links on hover */
		.navbar a:hover, .dropdown:hover .dropbtn {
		  background-color: grey;
		}

		/* Dropdown content (hidden by default) */
		.dropdown-content {
		  display: none;
		  position: absolute;
		  background-color: #f9f9f9;
		  min-width: 160px;
		  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
		  z-index: 1;
		}

		/* Links inside the dropdown */
		.dropdown-content a {
		  float: none;
		  color: black;
		  padding: 12px 16px;
		  text-decoration: none;
		  display: block;
		  text-align: left;
		}

		/* Add a grey background color to dropdown links on hover */
		.dropdown-content a:hover {
		  background-color: #ddd;
		}

		/* Show the dropdown menu on hover */
		.dropdown:hover .dropdown-content {
		  display: block;
		}
		table{
			padding: 5px 5px;
		}
        </style>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="generator" content="PSPad editor, www.pspad.com">
        <link href="w3.css" rel="stylesheet">
        <title>TRIPLE MMM SERVICES</title>
    </head>
    <body class="w3-sand">
        <header class="w3-container w3-grey" id="identify01"><a href="owner_home.php" style="text-decoration:none;color:black;"><img src="logoservice.png" style="height:150px;width:150px;" align="center"> TRIPLE MMM Services</a></header>
        <nav>
            <ul class="w3-navbar w3-deep-orange">
				<li class="w3-right"><a href="process.php">LOGOUT</a></li>
				<li><a href="owner_home.php">DASHBOARD</a></li>
				<li><a href="insert_VehicleDriver.php">Insert</a></li>
            </ul>
        </nav>
        <article class="w3-black">
			<div class="w3-container w3-black" id="ios1">
			<?php
				if(isset($_SESSION['msg'])){
					echo "<div class='w3-panel w3-green'>".$_SESSION['msg']."</div>";
					unset($_SESSION['msg']);
				}
			?>	
				<div class="w3-half w3-container"></br></br>
					<img src="vector01.png" width="600"/>
				</div>
				<div class="w3-half w3-container w3-center">
					<?php
						$driverID = $_GET['id_driver'];
						$mysql_1 = "SELECT * FROM drivers WHERE driver_id=$driverID";
						$query = mysql_query($mysql_1);
						
						if(mysql_num_rows($query) == 1){
							while($rwrw = mysql_fetch_assoc($query)){
								?>
					</br><center><div class='w3-col w3-khaki w3-topbar w3-bottombar w3-border-orange'><b><h3>Update Vehicle Data</h3></b></div></center>
					<form class="w3-container w3-sand" action="Updateprocess_VD.php" method="POST"></br>
						<input type="hidden" value="<?php echo $rwrw['driver_id'];?>" name="update_driver_id"/>
						Driver's Name: <input type="text" value="<?php echo $rwrw['driver_name'];?>" name="update_driver_name" required/><br>
						Start Time: <input type="text" value="<?php echo $rwrw['start_time'];?>" name="update_start_time" required/><br>
						End Time: <input type="text" value="<?php echo $rwrw['end_time'];?>" name="update_end_time" required/><br>
						Driver's Address: <textarea value="<?php echo $rwrw['driver_address'];?>" name="update_driver_address" required><?php echo $rwrw['driver_address'];?></textarea><br>
						Plate Number: <input type="text" value="<?php echo $rwrw['plate_number'];?>" name="update_plate_num" required/><br>
						Vehicle Type: <input type="text" value="<?php echo $rwrw['vehicle_type'];?>" name="update_vehicle_type" required/><br></br>
						<button class="w3-button w3-blue w3-round-xlarge" name="update_data">Update Data</button></br></br>
					</form>
					<?php
							}
						}
					?>
				</div>
			</div></br>
        </article>
        <footer style="color:white;font-family:Arial;" align="center" class="w3-container w3-grey">
			<b><br><br>&#169; TRIPLE MMM Services<br>Batangas City, Philippines 4200<br>
			Established 2018<br><center><img src="media.png" style="height:30px;width:100px;"></center><br></b>
		 </footer>
		 
    </body>
</html>