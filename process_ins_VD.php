<?php session_start();
include 'dbconnect.inc';

	if(isset($_POST['add_data'])){
		$add_driver_name = mysql_real_escape_string($_POST['driver_name']);
		$add_start_time = mysql_real_escape_string($_POST['start_time']);
		$add_driver_address = mysql_real_escape_string($_POST['driver_address']);
		$add_platenum = mysql_real_escape_string($_POST['plate_num']);
		$add_vehicle_type = mysql_real_escape_string($_POST['vehicle_type']);
		
		$query91 = "INSERT INTO drivers(driver_name, start_time, driver_address, plate_number, vehicle_type) VALUES('$add_driver_name','$add_start_time','$add_driver_address','$add_platenum','$add_vehicle_type')";
		mysql_query($query91); 
		
		$_SESSION['msg'] = "Vehicle / Driver Data Added!";
		header("location: view_vehiclesAnd_drivers.php", true,  301 );  exit;
	}
?>