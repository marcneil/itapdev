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
				<div class="w3-container w3-row w3-khaki w3-padding-8">
					<h2><p style="font-size:20px;"><center>Owner's Account<br></center></p></h2>
				</div>
			<div class="w3-container w3-white" id="ios1">
				<div class="w3-container w3-row w3-white w3-center"><center>
					<a href="editservicefee.php" style="text-decoration:none;"><div class="w3-col w3-hover-black" style="width:16%"> 
						</br><img src="business.png" width="120px"><p>Edit Service Fee</p>
					</a></div>
					<a href="existing_users.php" style="text-decoration:none;"><div class="w3-col w3-hover-black" style="width:16%">
						</br><img src="users.png" width="120px"><p>Existing Users</p>
					</a></div>
					<a href="viewpaid.php" style="text-decoration:none;"><div class="w3-col w3-hover-black" style="width:16%">
						</br><img src="paper.png" width="120px"><p>View Paid<br>Students</p>
					</a></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="view_unpaid.php" style="text-decoration:none;"><div class="w3-col w3-hover-black" style="width:16%">
						</br><img src="notpaid.png" width="120px"><p>View Unpaid Students</p>
					</a></div>
					<a href="view_currentslots.php" style="text-decoration:none;"><div class="w3-col w3-hover-black" style="width:16%">
						</br><img src="transportation.png" width="120px"><p>View Current Slots</p>
					</a></div>
					<a href="view_vehiclesAnd_drivers.php" style="text-decoration:none;"><div class="w3-col w3-hover-black" style="width:16%"> 
						</br><img src="hrm.png" width="120px"><p>Drivers' Data</p>
					</a></div></center>
				</div>
				<div class="w3-container w3-row w3-white w3-center">
					<!--a href="#" style="text-decoration:none;"><div class="w3-col w3-hover-black" style="width:20%"> 
						</br><img src="folder.png" width="124px"><p>Print Client Receipt</p>
					</a></div-->
				</div>
			</div>
        </article>
        <footer style="color:white;font-family:Arial;" align="center" class="w3-container w3-grey">
			<b><br><br>&#169; TRIPLE MMM Services<br>Batangas City, Philippines 4200<br>
			Established 2018<br><center><img src="media.png" style="height:30px;width:100px;"></center><br></b>
		 </footer>
		 
    </body>
</html>