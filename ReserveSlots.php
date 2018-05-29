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
        <link href="w3.css" rel="stylesheet"><link href="w3-colors-food.css" rel="stylesheet">
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
			<div class="w3-container w3-black w3-display-center w3-padding-16" id="ios1">
				<div class="w3-container w3-half">
			<?php
				if(isset($_SESSION['msg'])){
					echo "<div class='w3-panel w3-red'>".$_SESSION['msg']."</div>";
					unset($_SESSION['msg']);
				}
			?>	
					<form action="process_ReserveSlots.php" method="POST">
						<div class="w3-container w3-khaki"><h1>Slot Reservation</h1></div>
						<p>Please fill in this form to reserve a slot for your child.</p>
							<hr>
							<label for="fullname"><b>Student's Full Name</b></label>
							<input type="text" placeholder="Enter First Name" name="stud_fullname" required>
							
							<label for="address"><b>Address</b></label>
							<input type="text" name="stud_address" value="<?php
								if(isset($_SESSION['user'])){
									$uname = $_SESSION['user'];
									$sql03 = "SELECT * FROM users WHERE username='$uname'";
									$qry03 = mysql_query($sql03);
									if(mysql_num_rows($qry03) == 1){
										while($row=mysql_fetch_assoc($qry03)){
											echo $row['address'];
										}
									}
								}else{
									echo "Enter Address";
								}
							
							?>" readonly>
							
							<label for="gradelvl"><b>Grade Level: </b></label>
							<select type="text" placeholder="Choose Grade Level" name="grdlvl" required>
							<option value="">Choose Grade Level</option>
							  <option value="Grade 7">Grade 7</option>
							  <option value="Grade 8">Grade 8</option>
							  <option value="Grade 9">Grade 9</option>
							  <option value="Grade 10">Grade 10</option>
							  <option value="Grade 11">Grade 11</option>
							  <option value="Grade 12">Grade 12</option>
							</select>
							</br>
							<hr>
							<!--div class="w3-third"><b>Student's Time Range:</b></div> 
							<div class="w3-third">
								From: <input type="time" name="stud_from_time">
								<!--input type="number" min="1" max="12" required> : <input type="number" min="0" max="59" required> 
								<select type="text" name="" required>
								  <option value="AM">AM</option>
								  <option value="PM">PM</option> 
								</select-->
							<!--/div>
							<!--div class="w3-third">
								To: <input type="time" name="stud_to_time"><!--input type="number" min="1" max="12" required> : <input type="number" min="0" max="59" required> 
								<select type="text" name="" required>
								  <option value="AM">AM</option>
								  <option value="PM">PM</option> 
								</select>
							</div-->
							
							<label for="vehicle"><b>Choose preferred vehicle to reserve a slot: </b></label>
							<select type="text" id="vehicle" placeholder="" name="vehicle_num" required>
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
							
							<label for="route"><b>Type of Route: </b></label>
							<select type="text" placeholder="Choose Route" name="type_route" required>
							  <option value="">Choose Route</option>
							  <option value="One-way Route (Morning)">One-way Route (Morning Only)</option> <!-- 2500 pesos-->
							  <option value="One-way Route (Afternoon)">One-way Route (Afternoon Only)</option> <!-- 2500 pesos-->
							  <option value="2-way Route">2-way Route</option> <!-- 3000 pesos-->
							</select>
							</br></br>
							
							<div class="w3-container w3-row w3-black">
								<div class="w3-row w3-khaki w3-half">
									<b>One-way Route (Morning) & Two-way Route</b><br>Format:<br>[Desired Place] - De La Salle Lipa
								</div>
								<div class="w3-row w3-white w3-half">
									<b>One-way Route (Afternoon)</b><td style="text-align:right;"><br><br>Format:<br>De La Salle Lipa - [Desired Place]</td>
								</div>
							</div>
							
							<label for="destination"><h3>Destination Details:</label></h3>	
								<span style="float:left">From: <select type="text" name="from_name_place" required> 
									<option value="">Choose Destination</option>
									<option value="Alangilan">Alangilan</option>
									<option value="Batangas Pier">Batangas Pier</option>
									<option value="Balagtas">Balagtas</option>
									<option value="Bolbok">Bolbok</option>
									<option value="Bauan">Bauan</option>	
									<option value="Calicanto">Calicanto</option>
									<option value="Cuta">Cuta</option>									
									<option value="De La Salle Lipa">De La Salle Lipa</option>
									<option value="Kumintang Ilaya">Kumintang Ilaya</option>
									<option value="Palengke (Bago)">Palengke (Bago)</option>
									<option value="Palengke (Luma)">Palengke (Luma)</option>
									<option value="Pallocan West">Pallocan West</option>
									<option value="San Pascual">San Pascual</option>
								</select></span>
							
								<center><span style="float:left;text-indent:5%">To: <select type="text" name="to_name_place" required>
									<option value="">Choose Destination</option>
									<option value="Alangilan">Alangilan</option>
									<option value="Batangas Pier">Batangas Pier</option>
									<option value="Balagtas">Balagtas</option>
									<option value="Bolbok">Bolbok</option>
									<option value="Bauan">Bauan</option>	
									<option value="Calicanto">Calicanto</option>
									<option value="Cuta">Cuta</option>
									<option value="De La Salle Lipa">De La Salle Lipa</option>
									<option value="Kumintang Ilaya">Kumintang Ilaya</option>
									<option value="Palengke (Bago)">Palengke (Bago)</option>
									<option value="Palengke (Luma)">Palengke (Luma)</option>
									<option value="Pallocan West">Pallocan West</option>
									<option value="San Pascual">San Pascual</option>
								</select></span>
							</br></br>
							
							<input type="hidden" name="stud_status" value="Unpaid">
							<input type="hidden" name="user_id" value="
							<?php
								if(isset($_SESSION['user'])){
									$uname = $_SESSION['user'];
									$sql03 = "SELECT * FROM users WHERE username='$uname'";
									$qry03 = mysql_query($sql03);
									if(mysql_num_rows($qry03) == 1){
										while($row=mysql_fetch_assoc($qry03)){
											echo $row['userid'];
										}
									}
								}
							?>">
						
							<div class="clearfix">
							  <button type="reset" class="cancelbtn">Reset All Data</button>
							  <button type="submit" class="signupbtn" name="click_reserve">Reserve Slot</button>
							</div>
					</form>
				</div>
				<div class="w3-container w3-half">
					<h1>Available Slots</h1><hr>
					<table class="w3-table w3-food-mint w3-striped">
						<th>Vehicle No.</th>
						<th>Driver<br>Image</th>
						<th>Start Time</th>
						<th>End Time</th>
						<th>Plate<br>No.</th>
						<th>Driver's Name</th>
						<th>Driver's Address</th>
						<th class="w3-center">Slots Acquired</th>
						<?php
							$qryy = "SELECT * FROM drivers";
							$res01 = mysql_query($qryy);
							while($dta01 = mysql_fetch_assoc($res01)){
								echo "<tr class='w3-hover-green'>";
								echo "<td>".$dta01['driver_id']."</td>";
								echo "<td><img src='driver01.png' width='45px'></td>";
								echo "<td>".$dta01['start_time']."</td>";
								echo "<td>".$dta01['end_time']."</td>";
								echo "<td>".$dta01['plate_number']."</td>";
								echo "<td>".$dta01['driver_name']."</td>";
								echo "<td>".$dta01['driver_address']."</td>";
								echo "<td>";
								$sql_15 = "SELECT COUNT(driver_id) AS total FROM students WHERE driver_id=".$dta01['driver_id'].";";
								$sql_res01=mysql_query($sql_15);
								$data=mysql_fetch_assoc($sql_res01);
								if($data['total'] == 16){
									echo "<h6><b>Full Slots Already</b></h6>";
								}else{
									echo "<h5 class='w3-center'>".$data['total']."</h5s>";
								}
								echo"</td>";
								echo "</tr>";
							}
						?>
					</table>
				</div>
			</div>
        </article>
        <footer style="color:white;font-family:Arial;" align="center" class="w3-container w3-khaki">
			<b style="color:black;"><br><br>&#169; TRIPLE MMM Services<br>Batangas City, Philippines 4200<br>
			Established 2018<br><center><img src="media.png" style="height:30px;width:100px;"></center><br></b>
		 </footer>
    </body>
</html>
    