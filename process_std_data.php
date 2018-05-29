<?php session_start(); include 'dbconnect.inc';
	if(isset($_POST['submit_std'])){
		$student_ID = mysql_real_escape_string($_POST['edit_stud_id']);
		$student_name = mysql_real_escape_string($_POST['edit_stud_nme']);
		$student_address = mysql_real_escape_string($_POST['edit_stud_adrs']);
		$student_level = mysql_real_escape_string($_POST['edit_stud_grdlvl']);
		$student_route = mysql_real_escape_string($_POST['edit_stud_rte']);
		$student_from = mysql_real_escape_string($_POST['edit_stud_from']);
		$student_to = mysql_real_escape_string($_POST['edit_stud_to']);
		$student_svfee = mysql_real_escape_string($_POST['edit_stud_fee']);
		$student_stats = mysql_real_escape_string($_POST['edit_stud_stats']);
		$student_userID = mysql_real_escape_string($_POST['edit_stud_userid']);
		$student_drvID = mysql_real_escape_string($_POST['edit_stud_drivid']);
		
		$qry3 = "UPDATE students SET student_name='$student_name', student_address='$student_address', student_level='$student_level', route_type='$student_route', from_place='$student_from', to_place='$student_to', service_fee='$student_svfee', student_status='$student_stats', driver_id='$student_drvID', userid='$student_userID' WHERE student_id='$student_ID'";
		$accept_qry = mysql_query($qry3);
		
		if($accept_qry){
			$_SESSION['msg'] = "Student Data Updated!";
			header("location: home02.php", true,  301 );  exit;
		}
		else{
			echo "Error updating data.<br/>".mysql_error();
		}
			mysql_close();
		}
?>