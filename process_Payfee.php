<?php session_start(); include 'dbconnect.inc'; 
	$get_ID = $_GET['updateID'];
	$sql_19 = "SELECT * FROM students WHERE student_id='$get_ID'";
	$exist_sql_01 = mysql_query($sql_19);
	
	while($rw01 = mysql_fetch_assoc($exist_sql_01)){
		$pd_stud_id = $rw01['student_id'];
		$pd_stud_name = $rw01['student_name'];
		$pd_stud_address = $rw01['student_address'];
		$pd_stud_level = $rw01['student_level'];
		$pd_stud_route = $rw01['route_type'];
		$pd_service_fee = $rw01['service_fee'];
		$pd_driverid = $rw01['driver_id'];
		$pd_user_id = $rw01['userid'];
		
		$query = "UPDATE students SET student_name='$pd_stud_name', student_address='$pd_stud_address', student_level='$pd_stud_level', route_type='$pd_stud_route', service_fee='$pd_service_fee', student_status='Unpaid', if_verified_payment='Verify', driver_id='$pd_driverid', userid='$pd_user_id' WHERE student_id='$pd_stud_id'";
		$qry16 = mysql_query($query);
		
		if($qry16){
			$_SESSION['msg'] = "Thanks for verifying your payment. The owner will update necessary changes on your payment.";
			header("location: UpdateFee.php", true,  301 );  exit;
		}else{
			echo "Error updating data.<br/>".mysql_error();
		}
	}
?>