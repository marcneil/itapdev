<?php session_start();?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <style>
		#ios{
			font-family: "Adequate";
			src: url(Adequate-ExtraLight.ttf) format("truetype");
		}
		#ios1{
			font-family: Century Gothic; font-size:15px;
		}
		#identify01{
			font-family: "Adequate";
			src: url(Adequate-ExtraLight.ttf) format("truetype");
			font-size: 35px;
		}
		body {font-family: Arial, Helvetica, sans-serif;}
		* {box-sizing: border-box}

		/* Full-width input fields */
		input[type=text], input[type=password] {
			width: 100%;
			padding: 15px;
			margin: 5px 0 22px 0;
			display: inline-block;
			border: none;
			background: #f1f1f1;
		}

		input[type=text]:focus, input[type=password]:focus {
			background-color: #ddd;
			outline: none;
		}

		hr {
			border: 1px solid #f1f1f1;
			margin-bottom: 25px;
		}

		/* Set a style for all buttons */
		button {
			background-color: #4CAF50;
			color: white;
			padding: 14px 20px;
			margin: 8px 0;
			border: none;
			cursor: pointer;
			width: 100%;
			opacity: 0.9;
		}

		button:hover {
			opacity:1;
		}

		/* Extra styles for the cancel button */
		.cancelbtn {
			padding: 14px 20px;
			background-color: #f44336;
		}

		/* Float cancel and signup buttons and add an equal width */
		.cancelbtn, .signupbtn {
		  float: left;
		  width: 50%;
		}

		/* Add padding to container elements */
		.container {
			padding: 16px;
		}

		/* Clear floats */
		.clearfix::after {
			content: "";
			clear: both;
			display: table;
		}

		/* Change styles for cancel button and signup button on extra small screens */
		@media screen and (max-width: 300px) {
			.cancelbtn, .signupbtn {
			   width: 100%;
			}
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
        <header class="w3-container w3-khaki" id="identify01"><a href="home.php" style="text-decoration:none;"><img src="logoservice.png" style="height:150px;width:150px;" align="center"> TRIPLE MMM Services</a></header>
        <nav>
            <ul class="w3-navbar w3-black">
				<li><a href="home.php">HOME</a></li>
                <li class="w3-right"><a href="Login.php">LOGIN</a></li>
				<li class="w3-right"><a href="Register.php">New User? REGISTER Here!</a></li>
            </ul>
        </nav>
        <article class="w3-yellow">
			<div class="w3-container w3-black w3-display-center w3-padding-16" id="ios1">
				<form method="POST" action="register_check.php" style="border:1px solid #ccc">
				<?php
					if(isset($_SESSION['msg'])){
						echo "<div class='w3-panel w3-red'>".$_SESSION['msg']."</div>";
						unset($_SESSION['msg']);
					}
				?>
					<div class="w3-container w3-padding-16 w3-half">
						<h1>Sign Up</h1>
						<p>Please fill in this form to create an account.</p>
						<hr>
						<label for="customer_fname"><b>Full Name</b></label>
						<input type="text" placeholder="Enter your full name" name="fullname" required>
						
						<label for="email"><b>Email</b></label></br>
						<input type="email" placeholder="Enter Email" name="email" required></br></br>
						
						<label for="address"><b>Address</b></label>
						<input type="text" placeholder="Enter Address" name="address" required>
						
					</div>
					<div class="w3-container w3-padding-16 w3-half">
						
						<label for="contact_number"><b>Contact Number (could be Telephone or Cellphone Number)</b></label></br>
						<input type="number" maxlength="11"  placeholder="Enter your contact number" name="contactnum" required></br></br>
						
						<label for="username"><b>Username</b></label>
						<input type="text" placeholder="Enter Username" name="uname" required>

						<label for="psw"><b>Password</b></label>
						<input type="password" placeholder="Enter Password" name="psw" required>

						<label for="psw-repeat"><b>Repeat Password</b></label>
						<input type="password" placeholder="Repeat Password" name="psw_repeat" required>

						<div class="clearfix">
						  <a href="home.php"><button type="button" class="cancelbtn">Cancel</button></a>
						  <button type="submit" name="signup" class="signupbtn">Sign Up</button>
						</div>
					</div>
				</form>
			</div>
        </article>
        <footer style="color:white;font-family:Arial;" align="center" class="w3-container w3-khaki">
			<b style="color:black;"><br><br>&#169; TRIPLE MMM Services<br>Batangas City, Philippines 4200<br>
			Established 2018<br><center><img src="media.png" style="height:30px;width:100px;"></center><br></b>
		 </footer>
		 
    </body>
</html>
    