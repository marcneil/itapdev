<?php session_start(); include 'dbconnect.inc'?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script type="text/javascript" src="http://gc.kis.v2.scr.kaspersky-labs.com/E708A4C5-66F2-014C-B3FE-F51FBC594C11/main.js" charset="UTF-8"></script>
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
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
        <?php
			if(isset($_SESSION['msg'])){
				echo "<div class='w3-panel w3-green'>".$_SESSION['msg']."</div>";
				unset($_SESSION['msg']);
			}
		?>
		<nav>
            <ul class="w3-navbar w3-black">
				<li class="w3-right"><a href="process.php">LOGOUT</a></li>
				<li><a href="home02.php">DASHBOARD</a></li>
				<li><a href="UpdateAcc.php">UPDATE ACCOUNT DETAILS</a></li>
				<li><a href="UpdateFee.php">UPDATE PAYMENT</a></li>
				<li><a href="ReserveSlots.php">RESERVE SLOTS</a></li>
            </ul>
        </nav>
        <article class="w3-yellow" id="ios1">
			<div class="w3-container w3-grey w3-center w3-padding-16 w3-row">
				<h1>Fee Payment</h1>
			</div>
			<div class="w3-container w3-center w3-light-blue w3-row w3-padding-16">
				<table class="w3-table">
					<tr class="w3-blue">
						<th>Student ID</th>
						<th>Student Name</th>
						<th>Address</th>
						<th>Grade Level</th>
						<th>Route Type</th>
						<th>Service Fee</th>
						<th>Payment Status</th>
						<th>Remarks</th>
					</tr>
					<?php
						if(isset($_SESSION['user'])){
							$uname = $_SESSION['user'];
							$sql03 = "SELECT * FROM users WHERE username='$uname'";
							$qry03 = mysql_query($sql03);
							$data = mysql_fetch_assoc($qry03);
							$sql_15 = "SELECT * FROM students WHERE userid=".$data['userid']."";
							$exist_sql = mysql_query($sql_15);
							while($row_exist = mysql_fetch_assoc($exist_sql)){
								echo "<tr>";
								echo "<td>".$row_exist['student_id']."</td>";
								echo "<td>".$row_exist['student_name']."</td>";
								echo "<td>".$row_exist['student_address']."</td>";
								echo "<td>".$row_exist['student_level']."</td>";
								echo "<td>".$row_exist['route_type']."</td>";
								echo "<td>".$row_exist['service_fee']."</td>";
								echo "<td>".$row_exist['student_status']."</td>";
								if($row_exist['student_status'] == "Unpaid"){
									echo "<td><a href='process_Payfee.php?updateID=".$row_exist['student_id']."'><button class='w3-black w3-small w3-button w3-round'>Already Paid</button></a></td>";
								}else{
									echo "<td>Student Paid</td>";
								}
								echo "</tr>";
							}
						}
					?>
				</table>
			</div>
        </article>
        <footer style="color:white;font-family:Arial;" align="center" class="w3-container w3-khaki">
			<b style="color:black;"><br><br>&#169; TRIPLE MMM Services<br>Batangas City, Philippines 4200<br>
			Established 2018<br><center><img src="media.png" style="height:30px;width:100px;"></center><br></b>
		 </footer>
    </body>
</html>