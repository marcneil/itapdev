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
            </ul>
        </nav>
        <article class="w3-light">
			<div class="w3-container w3-sand" id="ios1">
			<?php
			if(isset($_SESSION['msg'])){
				echo "<div class='w3-panel w3-green'>".$_SESSION['msg']."</div>";
				unset($_SESSION['msg']);
			}
		?>	
				</br><center><div class='w3-col w3-pale-yellow w3-topbar w3-bottombar w3-border-yellow'><b><h3>Edit Service Fee</h3></b></div></center>
				<form action="process_sfdetails.php" method="POST" class="w3-container w3-black w3-center"></br>
					<?php
						$id = $_GET['id'];
						$sql_15 = "SELECT * FROM students WHERE student_id='$id'";
						$exist_sql = mysql_query($sql_15);
						while($row_exist = mysql_fetch_assoc($exist_sql)){
							echo "Student ID: <input type='text' placeholder='$id' value='$id' name='edit_studid' readonly></br>";
							echo "Student Name: <input type='text' value='".$row_exist['student_name']."' name='edit_stud_name' readonly></br>";
							echo "<input type='hidden' value='".$row_exist['student_address']."' name='edit_stud_address'>";
							echo "Student Level: <input type='text' value='".$row_exist['student_level']."' name='edit_stud_lvl' readonly></br>";
							echo "<input type='hidden' value='".$row_exist['route_type']."' name='edit_route'>";
							echo "Service Fee: <input type='text' placeholder='".$row_exist['service_fee']."' name='edit_fee'></br>";
							echo "<input type='hidden' value='".$row_exist['student_status']."' name='edit_status'>";
							echo "<input type='hidden' value='".$row_exist['driver_id']."' name='edit_driverid'>";
							echo "<input type='hidden' value='".$row_exist['userid']."' name='edit_userid'>";
							echo "<input type='hidden' value='".$row_exist['from_place']."' name='edit_from_place'>";
							echo "<input type='hidden' value='".$row_exist['to_place']."' name='edit_to_place'>";
						}
					?></br>
					<button class="w3-button w3-green" name="click_editfee">Edit Fee</button>
				</form>
				</br>
			</div>
        </article>
        <footer style="color:white;font-family:Arial;" align="center" class="w3-container w3-grey">
			<b><br><br>&#169; TRIPLE MMM Services<br>Batangas City, Philippines 4200<br>
			Established 2018<br><center><img src="media.png" style="height:30px;width:100px;"></center><br></b>
		 </footer>
		 
    </body>
</html>