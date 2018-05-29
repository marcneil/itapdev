<?php session_start();
include 'dbconnect.inc';

$id01 = $_GET['id_data'];
$sq99 = "DELETE FROM drivers WHERE driver_id=$id01";
$result = mysql_query($sq99);
if($result){
	$_SESSION['msg'] = "Chosen Driver Data has been deleted.";
	header("Location:view_vehiclesAnd_drivers.php");
}else{
	echo "Error deleting data.<br/>".mysql_error();
}
mysql_close();
?>