<?php session_start();
include 'dbconnect.inc';
?>
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
        </style>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="generator" content="PSPad editor, www.pspad.com">
        <link href="w3.css" rel="stylesheet">
        <title>TRIPLE MMM SERVICES</title>
    </head>
    <body class="w3-deep-orange">
        <header class="w3-container w3-grey" id="identify01"><a href="owner_home.php" style="text-decoration:none;"><img src="logoservice.png" style="height:150px;width:150px;" align="center"> TRIPLE MMM Services</a></header>
        <nav>
            <ul class="w3-navbar w3-deep-orange">
				<li class="w3-right"><a href="process.php">LOGOUT</a></li>
				<li><a href="owner_home.php">DASHBOARD</a></li>
            </ul>
        </nav>
        <article class="w3-light">
			<div class="w3-container w3-third w3-black w3-center">
				<h3>Vehicle 1<br>
					<?php
						$sql_09 = "SELECT * FROM drivers WHERE driver_id=1";
						$query13 = mysql_query($sql_09);
						
						if(mysql_num_rows($query13) == 1){
							while($qrydata = mysql_fetch_assoc($query13)){
								echo $qrydata['driver_name']."<br>";
								echo $qrydata['driver_address'];
							}
						}
					?>
				</h3>
				<img src="driver01.png" width="25%"></br></br>
				<h3>Slots Acquired</h3>
				<div class="w3-panel w3-white"><h1><?php
					$sql_15 = "SELECT COUNT(driver_id) AS total FROM students WHERE driver_id=1;";
					$sql_res01=mysql_query($sql_15);
					$data=mysql_fetch_assoc($sql_res01);
					echo $data['total'];
					if($data['total'] == 16){
						echo "Full Slots Already.";
					}
				?> / 16</h1></div>
				<table class="w3-table w3-yellow w3-striped"><h3>Students in Vehicle 1</h3>
					<tr>
						<th>Student Name</th>
						<th>Grade Level</th>
					</tr>
					<?php
						$sql_15 = "SELECT * FROM students WHERE driver_id=1;";
						$qrydata02 = mysql_query($sql_15);
						
						while($students = mysql_fetch_assoc($qrydata02)){
							echo "<tr>";
							echo "<td>".$students['student_name']."</td>";
							echo "<td>".$students['student_level']."</td>";
							echo "</tr>";
						}
					?>
				</table><br>
			</div>
			<div class="w3-container w3-third w3-white w3-center">
				<h3>Vehicle 2<br>
					<?php
						$sql_09 = "SELECT * FROM drivers WHERE driver_id=2";
						$query13 = mysql_query($sql_09);
						
						if(mysql_num_rows($query13) == 1){
							while($qrydata = mysql_fetch_assoc($query13)){
								echo $qrydata['driver_name']."<br>";
								echo $qrydata['driver_address'];
							}
						}
					?>
				
				</h3>
				<img src="driver02.png" width="25%"></br></br>
				<h3>Slots Acquired</h3>
				<div class="w3-panel w3-black"><h1><?php
					$sql_15 = "SELECT COUNT(driver_id) AS total FROM students WHERE driver_id=2;";
					$sql_res01=mysql_query($sql_15);
					$data=mysql_fetch_assoc($sql_res01);
					echo $data['total'];
				?> / 16</h1></div>
				<table class="w3-table w3-yellow w3-striped"><h3>Students in Vehicle 2</h3>
					<tr>
						<th>Student Name</th>
						<th>Grade Level</th>
					</tr>
					<?php
						$sql_15 = "SELECT * FROM students WHERE driver_id=2;";
						$qrydata02 = mysql_query($sql_15);
						
						while($students = mysql_fetch_assoc($qrydata02)){
							echo "<tr>";
							echo "<td>".$students['student_name']."</td>";
							echo "<td>".$students['student_level']."</td>";
							echo "</tr>";
						}
					?>
				</table><br>
			</div>
			<div class="w3-container w3-third w3-black w3-center">
				<h3>Vehicle 3<br>
					<?php
						$sql_09 = "SELECT * FROM drivers WHERE driver_id=3";
						$query13 = mysql_query($sql_09);
						
						if(mysql_num_rows($query13) == 1){
							while($qrydata = mysql_fetch_assoc($query13)){
								echo $qrydata['driver_name']."<br>";
								echo $qrydata['driver_address'];
							}
						}
					?>
				
				</h3>
				<img src="driver03.png" width="25%"></br></br>
				<h3>Slots Acquired</h3>
				<div class="w3-panel w3-white"><h1><?php
					$sql_15 = "SELECT COUNT(driver_id) AS total FROM students WHERE driver_id=3;";
					$sql_res01=mysql_query($sql_15);
					$data=mysql_fetch_assoc($sql_res01);
					echo $data['total'];
				?> / 16</h1></div>
				<table class="w3-table w3-yellow w3-striped"><h3>Students in Vehicle 3</h3>
					<tr>
						<th>Student Name</th>
						<th>Grade Level</th>
					</tr>
					<?php
						$sql_15 = "SELECT * FROM students WHERE driver_id=3;";
						$qrydata02 = mysql_query($sql_15);
						
						while($students = mysql_fetch_assoc($qrydata02)){
							echo "<tr>";
							echo "<td>".$students['student_name']."</td>";
							echo "<td>".$students['student_level']."</td>";
							echo "</tr>";
						}
					?>
				</table><br>
			</div>
        </article>
        <footer style="color:white;font-family:Arial;" align="center" class="w3-container w3-grey">
			<b><br><br>&#169; TRIPLE MMM Services<br>Batangas City, Philippines 4200<br>
			Established 2018<br><center><img src="media.png" style="height:30px;width:100px;"></center><br></b>
		 </footer>
		 
    </body>
</html>