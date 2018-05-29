<?php session_start();
include 'dbconnect.inc';

	if(isset($_POST['update_data'])){
		$update_driverID = mysql_real_escape_string($_POST['update_driver_id']);
		$update_driver_name = mysql_real_escape_string($_POST['update_driver_name']);
		$update_start_time = mysql_real_escape_string($_POST['update_start_time']);
		$update_end_time = mysql_real_escape_string($_POST['update_end_time']);
		$update_driver_address = mysql_real_escape_string($_POST['update_driver_address']);
		$update_platenum = mysql_real_escape_string($_POST['update_plate_num']);
		$update_vehicle_type = mysql_real_escape_string($_POST['update_vehicle_type']);
		
		$query91 = "UPDATE drivers SET driver_name='$update_driver_name', start_time='$update_start_time', end_time='$update_end_time', driver_address='$update_driver_address', plate_number='$update_platenum', vehicle_type='$update_vehicle_type' WHERE driver_id='$update_driverID'";
		mysql_query($query91); 
		
		$_SESSION['msg'] = "Vehicle / Driver Data Updated!";
		header("location: view_vehiclesAnd_drivers.php", true,  301 );  exit;
	}
?>