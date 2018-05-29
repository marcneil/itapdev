<?php
session_start();
include 'dbconnect.inc';

$id = $_GET['id'];
$sql11 = "DELETE FROM users WHERE userid=$id";
$result = mysql_query($sql11);
if($result){
	$_SESSION['msg'] = "Chosen user has been deleted.";
	header("Location:existing_users.php");
}else{
	echo "Error deleting data.<br/>".mysql_error();
}
mysql_close();
?>