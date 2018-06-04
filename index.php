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
        <header class="w3-container w3-khaki" id="identify01"><img src="logoservice.png" style="height:150px;width:150px;" align="center">
			TRIPLE MMM Services
		</header>
        <nav>
            <ul class="w3-navbar w3-black">
                <li><a href="home.php">HOME</a></li>
                <li class="w3-right"><a href="Login.php">LOGIN</a></li>
				<li class="w3-right"><a href="Register.php">New User? REGISTER Here!</a></li>
            </ul>
        </nav>
        <article class="w3-yellow">
			<?php
				if(isset($_SESSION['msg'])){
					echo "<div class='w3-panel w3-red'>".$_SESSION['msg']."</div>";
					unset($_SESSION['msg']);
				}
			?>
			<div class="w3-display-container w3-blue">
				<center><img src="job001.jpg" class="w3-image">
				<img src="hrm.png" style="position:absolute;width:150px;length:150px;top:100px;right:1100px;">
				</center>
				<div class="w3-display-middle w3-xlarge" style="font-family:Century Gothic;text-shadow:1px 1px 0 #444;">"We provide a good quality of customer relationship within our business that enables 
				to connect and understand our clients."</div>
			</div>
			<div class="w3-container w3-grey w3-display-center w3-padding-16 w3-hover-khaki" id="ios1">
				<center><b>OUR MOTTO <br> "Safety and care, WE PROVIDE."</b></center>
			</div>
			<div class="w3-display-container w3-blue">
				<img src="s2.jpg" class="w3-image">
				<img src="transportation.png" style="position:absolute;width:150px;length:150px;top:100px;right:1100px;">
				<div class="w3-display-middle w3-xlarge" style="font-family:Century Gothic;text-shadow:1px 1px 0 #444;">
				The school service implementation has actual services included. It also caters
				students from Batangas City to De La Salle Lipa. It is estimated that around 10 - 20 school service
				vehicles that have been managed throughout the business itself.
				</div>
			</div>
        </article>
        <footer style="color:white;font-family:Arial;" align="center" class="w3-container w3-khaki">
			<b style="color:black;"><br><br>&#169; TRIPLE MMM Services<br>Batangas City, Philippines 4200<br>
			Established 2018<br><center><img src="media.png" style="height:30px;width:100px;"></center><br></b>
		 </footer>
    </body>
</html>
    
