<?php session_start(); include 'dbconnect.inc';
	if(isset($_POST['change_drv_cancel'])){
		header("location: home02.php", true,  301 );  exit;
	}
	if(isset($_POST['change_drv_change'])){
		$changedrv_stud_id = mysql_real_escape_string($_POST['change_drv_studid']);
		$changedrv_stud_nme = mysql_real_escape_string($_POST['change_drv_studname']);
		$changedrv_stud_address = mysql_real_escape_string($_POST['change_drv_studaddr']);
		$changedrv_stud_lvl = mysql_real_escape_string($_POST['change_drv_studlvl']);
		$changedrv_stud_route = mysql_real_escape_string($_POST['change_drv_studroute']);
		$changedrv_stud_from = mysql_real_escape_string($_POST['change_drv_studfrom']);
		$changedrv_stud_to = mysql_real_escape_string($_POST['change_drv_studto']);
		$changedrv_stud_fee = mysql_real_escape_string($_POST['change_drv_servicefee']);
		$changedrv_stud_stats = mysql_real_escape_string($_POST['change_drv_studstats']);
		$changedrv_stud_userid = mysql_real_escape_string($_POST['change_drv_studuserid']);
		$changedriver = mysql_real_escape_string($_POST['change_vehicle_num']);
		
		$qryqry = "UPDATE students SET student_name='$changedrv_stud_nme', student_address='$changedrv_stud_address', student_level='$changedrv_stud_lvl', route_type='$changedrv_stud_route', from_place='$changedrv_stud_from', to_place='$changedrv_stud_to', service_fee='$changedrv_stud_fee', student_status='$changedrv_stud_stats', driver_id='$changedriver', userid='$changedrv_stud_userid' WHERE student_id='$changedrv_stud_id'";
		$qry1001 = mysql_query($qryqry);
		
		if($qry1001){
			$_SESSION['msg'] = "Change Vehicle Complete!";
			header("location: home02.php", true,  301 );  exit;
		}else{
		echo "Error updating data.<br/>".mysql_error();
		}
		mysql_close();
	}


?>