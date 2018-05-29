<?php
	include 'dbconnect.inc';
	if(isset($_POST['click_update'])){
		$fullname02 = mysql_real_escape_string($_POST['update_customernme']);
		$email02 = mysql_real_escape_string($_POST['update_email']);
		$address02 = mysql_real_escape_string($_POST['update_address']);
		$contactnum02 = mysql_real_escape_string($_POST['update_contactnum']);
		$username02 = mysql_real_escape_string($_POST['update_uname']);
		$password02 = mysql_real_escape_string($_POST['update_psw']);
		
		$query04="UPDATE users SET fullname='$fullname02', email='$email02', address='$address02', contactnum='$contactnum02', username='$username02', password='$password02' WHERE userid='$_POST[codeid]'";
		$qry04=mysql_query($query04);
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
		}
		body {font-family: Arial, Helvetica, sans-serif;}
		* {box-sizing: border-box}

		/* Full-width input fields */
		input[type=text], input[type=password] {
			width: 100%;
			padding: 10px;
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
		.cancelbtn, .LOGinbtn {
		  float: left;
		  width: 50%;
		}

		/* Add padding to container elements */
		.container {
			padding: 5px;
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
            </ul>
        </nav>
        <article class="w3-yellow">
			<div class="w3-container w3-grey" id="ios1">
				<p style="font-size:20px;">
				<?php
					if($qry04){
						echo "<b><center>Your information has been updated!<br/>Please LOG OUT to your ACCOUNT IMMEDIATELY to confirm update and LOGIN to your account.</center></b>";
					}
					else{
						echo "Error updating data.<br/>".mysql_error();
					}
					mysql_close();
				}?><br>
				</p>
			</div>
        </article>
        <footer style="color:white;font-family:Arial;" align="center" class="w3-container w3-khaki">
			<b style="color:black;"><br><br>&#169; TRIPLE MMM Services<br>Batangas City, Philippines 4200<br>
			Established 2018<br><center><img src="media.png" style="height:30px;width:100px;"></center><br></b>
		 </footer>
		 
    </body>