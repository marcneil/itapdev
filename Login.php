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
			font-family: Century Gothic; font-size:16px;
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
        <header class="w3-container w3-khaki" id="identify01"><a href="index.php" style="text-decoration:none;"><img src="logoservice.png" style="height:150px;width:150px;" align="center"> TRIPLE MMM Services</a></header>
        <article class="w3-yellow">
			<div class="w3-container w3-black w3-display-center w3-padding-16" id="ios1">
			<?php
				if(isset($_SESSION['msg'])){
					echo "<div class='w3-panel w3-red'>".$_SESSION['msg']."</div>";
					unset($_SESSION['msg']);
				}
			?>
				<form action="home02.php" style="border:1px solid #ccc" method="POST">
				  <div class="w3-container w3-half">
					<h1>Log In Form</h1>
					<p>Please LOGIN to use your TRIPLE MMM Services Account.</p>
					<hr>

					<label for="username"><b>Username</b></label>
					<input type="text" placeholder="Enter Username" name="uname" required>

					<label for="psw"><b>Password</b></label>
					<input type="password" placeholder="Enter Password" name="pw" required>
			
					<div class="clearfix">
					  <button type="submit" name="login" class="LOGinbtn">Log In</button>
					  <a href="home.php"><button type="button" class="cancelbtn">Cancel</button></a>
					</div>
				  </div>
				  <div class="w3-container w3-half">
					<img src="services01.jpg" width="900px">
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
