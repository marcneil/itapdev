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
				<h2><center>Update Your Account</center></h2>
			</div>
			<div class="w3-container w3-row w3-cyan w3-padding-16" id="ios1">
				<form method="POST" action="update_process.php">
					<div class="w3-half">User Account Number: <?php
					if(isset($_SESSION['user'])){
						$uname01 = $_SESSION['user'];
						$sql05 = "SELECT * FROM users WHERE username='$uname01'";
						$qry05 = mysql_query($sql05);
						
						if(mysql_num_rows($qry05) == 1){
							while($row=mysql_fetch_assoc($qry05)){
								echo "<input type='text' placeholder='".$row['userid']."' value='".$row['userid']."' name='codeid' readonly></br>";?>
								Customer Name: <input type="text" size="25" placeholder="<?php echo $row['fullname'];?>" value="<?php echo $row['fullname'];?>" name="update_customernme"><br>
								Email: <input type="email" size="25" placeholder="<?php echo $row['email'];?>" value="<?php echo $row['email'];?>" name="update_email"><br>
								Home Address: <textarea placeholder="<?php echo $row['address'];?>" value="<?php echo $row['address'];?>" name="update_address"><?php echo $row['address'];?></textarea><br></div>
								<div class="w3-half">Contact Number: <input type="number" maxlength="11" placeholder="<?php echo $row['contactnum'];?>" value="<?php echo $row['contactnum'];?>" name="update_contactnum"><br>
								Username: <input type="text" placeholder="<?php echo $row['username'];?>" value="<?php echo $row['username'];?>" name="update_uname"></br>
								Password: <input type="password" placeholder="<?php echo $row['password'];?>" value="<?php echo $row['password'];?>" name="update_psw" id="myInput">
								<input type="checkbox" onclick="myFunction()"> Show Password</div>
								<script>
								function myFunction() {
									var x = document.getElementById("myInput");
									if (x.type === "password") {
										x.type = "text";
									} else {
										x.type = "password";
									}
								}
								</script>
								</br>
				<?php
							}
						}
					}
				?>
				
				</div><a style="text-decoration:none;"><button class="w3-button w3-block w3-black" name="click_update"><h3>Update</h3></button></a>
			</form>
        </article>
        <footer style="color:white;font-family:Arial;" align="center" class="w3-container w3-khaki">
			<b style="color:black;"><br><br>&#169; TRIPLE MMM Services<br>Batangas City, Philippines 4200<br>
			Established 2018<br><center><img src="media.png" style="height:30px;width:100px;"></center><br></b>
		 </footer>
		 
    </body>
</html>
    