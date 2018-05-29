<?php session_start();
include 'dbconnect.inc';
	$S_id = $_GET['Sid'];
	$sql_21 = "SELECT * FROM students WHERE student_id='$S_id'";
	$exist_sql_02 = mysql_query($sql_21);
	
	while($rw = mysql_fetch_assoc($exist_sql_02)){
		$pd2_stud_id = $rw['student_id'];
		$pd2_stud_name = $rw['student_name'];
		$pd2_stud_address = $rw['student_address'];
		$pd2_stud_level = $rw['student_level'];
		$pd2_stud_route = $rw['route_type'];
		$pd2_service_fee = $rw['service_fee'];
		$pd2_driverid = $rw['driver_id'];
		$pd2_user_id = $rw['userid'];
		
		$query = "UPDATE students SET student_name='$pd2_stud_name', student_address='$pd2_stud_address', student_level='$pd2_stud_level', route_type='$pd2_stud_route', service_fee='$pd2_service_fee', student_status='Paid', if_verified_payment='', driver_id='$pd2_driverid', userid='$pd2_user_id' WHERE student_id='$pd2_stud_id'";
		$qry22 = mysql_query($query);
		
		if($qry22){
			$_SESSION['msg'] = "Student is Paid for Service Fee.";
			header("location: viewpaid.php", true,  301 );  exit;
		}else{
			echo "Error updating data.<br/>".mysql_error();
		}
	}
?>