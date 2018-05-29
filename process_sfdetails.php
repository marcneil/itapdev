<?php session_start();
include 'dbconnect.inc';

if(isset($_POST['click_editfee'])){
	$edit_studid = mysql_real_escape_string($_POST['edit_studid']);
	$edit_studname = mysql_real_escape_string($_POST['edit_stud_name']);
	$edit_studaddress = mysql_real_escape_string($_POST['edit_stud_address']);
	$edit_studlvl = mysql_real_escape_string($_POST['edit_stud_lvl']);
	$edit_routetype = mysql_real_escape_string($_POST['edit_route']);
	$edit_from_place = mysql_real_escape_string($_POST['edit_from_place']);
	$edit_to_place = mysql_real_escape_string($_POST['edit_to_place']);
	$edit_servicefee = mysql_real_escape_string($_POST['edit_fee']);
	$edit_studstats = mysql_real_escape_string($_POST['edit_status']);
	$edit_driverid = mysql_real_escape_string($_POST['edit_driverid']);
	$edit_userid = mysql_real_escape_string($_POST['edit_userid']);
	
	$query17 = "UPDATE students SET student_name='$edit_studname', student_address='$edit_studaddress', student_level='$edit_studlvl', route_type='$edit_routetype', from_place='$edit_from_place', to_place='$edit_to_place', service_fee='$edit_servicefee', student_status='$edit_studstats', driver_id='$edit_driverid', userid='$edit_userid' WHERE student_id='$edit_studid'";
	$qry17 = mysql_query($query17);
	
	if($qry17){
		$_SESSION['msg'] = "Your service fee data has been updated!";
		header("location: editservicefee.php", true,  301 );  exit;
	}
	else{
		echo "Error updating data.<br/>".mysql_error();
	}
	mysql_close();
}

?>