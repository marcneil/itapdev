<?php 
	session_start();
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
		<link href="w3-colors-food.css" rel="stylesheet">
        <title>TRIPLE MMM SERVICES</title>
    </head>
    <body class="w3-khaki">
        <header class="w3-container w3-khaki" id="identify01"><a href="home02.php" style="text-decoration:none;"><img src="logoservice.png" style="height:150px;width:150px;" align="center">
			TRIPLE MMM Services</a>
		</header>
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
        <article class="w3-grey">
			<div class="w3-row w3-grey">
				<h2><p><b>&nbsp;&nbsp;&nbsp;&nbsp;Edit Student Data</b></p></h2><hr>
					<div class="w3-container w3-rest w3-grey w3-half"></br>
						<form class="w3-center" method="POST" action="process_std_data.php">
						<?php
							$stud_id = $_GET['stud_id'];
							$sql_15 = "SELECT * FROM students WHERE student_id='$stud_id'";
							$exist_sql = mysql_query($sql_15);
							while($row_exist = mysql_fetch_assoc($exist_sql)){
								?>
							Student ID: <input type="text" value="<?php echo $row_exist['student_id'];?>" name="edit_stud_id" readonly></br>
							Student Name: <input type="text" value="<?php echo $row_exist['student_name'];?>" name="edit_stud_nme"></br>
							Student Address: <textarea name="edit_stud_adrs"><?php echo $row_exist['student_address'];?></textarea></br> 
							<label for="gradelvl">Grade Level: </label>
							<select type="text" placeholder="Choose Grade Level" name="edit_stud_grdlvl" required>
							<option value="<?php echo $row_exist['student_level'];?>"><?php echo $row_exist['student_level'];?></option>
							  <option value="Grade 7">Grade 7</option>
							  <option value="Grade 8">Grade 8</option>
							  <option value="Grade 9">Grade 9</option>
							  <option value="Grade 10">Grade 10</option>
							  <option value="Grade 11">Grade 11</option>
							  <option value="Grade 12">Grade 12</option>
							</select></br>
							<input type="hidden" value="<?php echo $row_exist['route_type'];?>" name="edit_stud_rte"/>
							<input type="hidden" value="<?php echo $row_exist['from_place'];?>" name="edit_stud_from"/>
							<input type="hidden" value="<?php echo $row_exist['to_place'];?>" name="edit_stud_to"/>
							<input type="hidden" value="<?php echo $row_exist['service_fee'];?>" name="edit_stud_fee"/>
							<input type="hidden" value="<?php echo $row_exist['student_status'];?>" name="edit_stud_stats"/>
							<input type="hidden" value="<?php echo $row_exist['driver_id'];?>" name="edit_stud_drivid"/>
							<input type="hidden" value="<?php echo $row_exist['userid'];?>" name="edit_stud_userid"/>
						<?php
							}
						?>
							</br><button class="w3-button w3-round w3-black" name="submit_std">Edit Data</button></br>
						</form>
					</div>
					<div class="w3-container w3-rest w3-half">
						<img src="vector01.png">
					</div>
			</div></br>
        </article>
        <footer style="color:white;font-family:Arial;" align="center" class="w3-container w3-khaki">
			<b style="color:black;"><br><br>&#169; TRIPLE MMM Services<br>Batangas City, Philippines 4200<br>
			Established 2018<br><center><img src="media.png" style="height:30px;width:100px;"></center><br></b>
		 </footer>
    </body>
</html>
    