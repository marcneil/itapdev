<?php session_start(); include 'dbconnect.inc';?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
        </style>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="generator" content="PSPad editor, www.pspad.com">
        <link href="w3.css" rel="stylesheet">
        <title>TRIPLE MMM SERVICES</title>
    </head>
    <body class="w3-khaki">
        <header class="w3-container w3-khaki" id="identify01"><a href="home02.php" style="text-decoration:none;"><img src="logoservice.png" style="height:150px;width:150px;" align="center"> TRIPLE MMM Services</a></header>
        <nav>
            <ul class="w3-navbar w3-black">
				<li class="w3-right"><a href="process.php">LOGOUT</a></li>
				<li><a href="home02.php">DASHBOARD</a></li>
				<li><a href="UpdateAcc.php">UPDATE ACCOUNT DETAILS</a></li>
				<li><a href="UpdateFee.php">UPDATE PAYMENT</a></li>
				<li><a href="ReserveSlots.php">RESERVE SLOTS</a></li>
            </ul>
        </nav>
        <article class="w3-yellow">
			<div class="w3-container w3-grey w3-display-center w3-padding-16" id="ios1">
				<h2><center>Change Vehicle Number</center></h2>
			</div>
			<div class="w3-container w3-row w3-cyan w3-padding-16" id="ios1">
				<form method="POST" action="process_change_drv.php" class="w3-center">
					<?php
						$idnum = $_GET['idnum'];
						$sql_18 = "SELECT * FROM students WHERE student_id='$idnum'";
						$exist_sql = mysql_query($sql_18);
						while($student = mysql_fetch_assoc($exist_sql)){?>
							Student ID: <?php echo $student['student_id'];?></br>
							Student Name: <?php echo $student['student_name'];?></br>
							Student Level: <?php echo $student['student_level'];?></br>
							<input type="hidden" value="<?php echo $student['student_id'];?>" name="change_drv_studid">
							<input type="hidden" value="<?php echo $student['student_name'];?>" name="change_drv_studname">
							<input type="hidden" value="<?php echo $student['student_address'];?>" name="change_drv_studaddr">
							<input type="hidden" value="<?php echo $student['student_level'];?>" name="change_drv_studlvl">
							<input type="hidden" value="<?php echo $student['route_type'];?>" name="change_drv_studroute">
							<input type="hidden" value="<?php echo $student['from_place'];?>" name="change_drv_studfrom">
							<input type="hidden" value="<?php echo $student['to_place'];?>" name="change_drv_studto">
							<input type="hidden" value="<?php echo $student['service_fee'];?>" name="change_drv_servicefee">
							<input type="hidden" value="<?php echo $student['student_status'];?>" name="change_drv_studstats">
							<input type="hidden" value="<?php echo $student['userid'];?>" name="change_drv_studuserid">
							<label for="vehicle"><b>Vehicle Number: </b></label>
							<select type="text" id="vehicle" placeholder="" name="change_vehicle_num" required>
							  <option value="">Choose Vehicle</option>
							  <?php
								$qry4dr = "SELECT * FROM drivers";
								$result01 = mysql_query($qry4dr);
								while($dta = mysql_fetch_assoc($result01)){
									echo "<option value='$dta[driver_id]'>Vehicle $dta[driver_id]</option>";
								}
								?>
							</select>
							</br></br>
					<?php
						}
					?>
				<center>
					<a style="text-decoration:none;"><button class="w3-button w3-black" name="change_drv_change">Change</button></a>
					<a style="text-decoration:none;"><button class="w3-button w3-red" name="change_drv_cancel">Cancel</button></a>
				</center>
				</form>
			</div>
        </article>
        <footer style="color:white;font-family:Arial;" align="center" class="w3-container w3-khaki">
			<b style="color:black;"><br><br>&#169; TRIPLE MMM Services<br>Batangas City, Philippines 4200<br>
			Established 2018<br><center><img src="media.png" style="height:30px;width:100px;"></center><br></b>
		 </footer>
		 
    </body>
</html>