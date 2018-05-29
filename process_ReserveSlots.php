<?php session_start(); include 'dbconnect.inc';
	//Validation Format
	if($_POST['from_name_place'] == "De La Salle Lipa" && $_POST['to_name_place'] == "De La Salle Lipa"){
		$_SESSION['msg'] = "Incorrect Destination Format! Please try again."; 
		header("location: ReserveSlots.php", true,  301 );  exit;
	}
	if($_POST['from_name_place'] == "Alangilan" && $_POST['to_name_place'] == "Alangilan"){
		$_SESSION['msg'] = "Incorrect Destination Format! Please try again."; 
		header("location: ReserveSlots.php", true,  301 );  exit;
	}
	if(($_POST['from_name_place'] == "Alangilan" && $_POST['to_name_place'] == "Batangas Pier")||($_POST['from_name_place'] == "Batangas Pier" && $_POST['to_name_place'] == "Alangilan")){
		$_SESSION['msg'] = "Incorrect Destination Format! Please try again."; 
		header("location: ReserveSlots.php", true,  301 );  exit;
	}
	if(($_POST['from_name_place'] == "Alangilan" && $_POST['to_name_place'] == "Balagtas")||($_POST['from_name_place'] == "Balagtas" && $_POST['to_name_place'] == "Alangilan")){
		$_SESSION['msg'] = "Incorrect Destination Format! Please try again."; 
		header("location: ReserveSlots.php", true,  301 );  exit;
	}
	if(($_POST['from_name_place'] == "Alangilan" && $_POST['to_name_place'] == "Bolbok")||($_POST['from_name_place'] == "Bolbok" && $_POST['to_name_place'] == "Alangilan")){
		$_SESSION['msg'] = "Incorrect Destination Format! Please try again."; 
		header("location: ReserveSlots.php", true,  301 );  exit;
	}
	if(($_POST['from_name_place'] == "Alangilan" && $_POST['to_name_place'] == "Bauan")||($_POST['from_name_place'] == "Bauan" && $_POST['to_name_place'] == "Alangilan")){
		$_SESSION['msg'] = "Incorrect Destination Format! Please try again."; 
		header("location: ReserveSlots.php", true,  301 );  exit;
	}
	if(($_POST['from_name_place'] == "Alangilan" && $_POST['to_name_place'] == "Calicanto")||($_POST['from_name_place'] == "Calicanto" && $_POST['to_name_place'] == "Alangilan")){
		$_SESSION['msg'] = "Incorrect Destination Format! Please try again."; 
		header("location: ReserveSlots.php", true,  301 );  exit;
	}
	if(($_POST['from_name_place'] == "Alangilan" && $_POST['to_name_place'] == "Cuta")||($_POST['from_name_place'] == "Cuta" && $_POST['to_name_place'] == "Alangilan")){
		$_SESSION['msg'] = "Incorrect Destination Format! Please try again."; 
		header("location: ReserveSlots.php", true,  301 );  exit;
	}
	if(($_POST['from_name_place'] == "Alangilan" && $_POST['to_name_place'] == "Kumintang Ilaya")||($_POST['from_name_place'] == "Kumintang Ilaya" && $_POST['to_name_place'] == "Alangilan")){
		$_SESSION['msg'] = "Incorrect Destination Format! Please try again."; 
		header("location: ReserveSlots.php", true,  301 );  exit;
	}
	if(($_POST['from_name_place'] == "Alangilan" && $_POST['to_name_place'] == "Palengke (Bago)")||($_POST['from_name_place'] == "Palengke (Bago)" && $_POST['to_name_place'] == "Alangilan")){
		$_SESSION['msg'] = "Incorrect Destination Format! Please try again."; 
		header("location: ReserveSlots.php", true,  301 );  exit;
	}
	if(($_POST['from_name_place'] == "Alangilan" && $_POST['to_name_place'] == "Palengke (Luma)")||($_POST['from_name_place'] == "Palengke (Luma)" && $_POST['to_name_place'] == "Alangilan")){
		$_SESSION['msg'] = "Incorrect Destination Format! Please try again."; 
		header("location: ReserveSlots.php", true,  301 );  exit;
	}
	if(($_POST['from_name_place'] == "Alangilan" && $_POST['to_name_place'] == "Pallocan West")||($_POST['from_name_place'] == "Pallocan West" && $_POST['to_name_place'] == "Alangilan")){
		$_SESSION['msg'] = "Incorrect Destination Format! Please try again."; 
		header("location: ReserveSlots.php", true,  301 );  exit;
	}
	if(($_POST['from_name_place'] == "Alangilan" && $_POST['to_name_place'] == "San Pascual")||($_POST['from_name_place'] == "San Pascual" && $_POST['to_name_place'] == "Alangilan")){
		$_SESSION['msg'] = "Incorrect Destination Format! Please try again."; 
		header("location: ReserveSlots.php", true,  301 );  exit;
	}
	if($_POST['from_name_place'] == "Batangas Pier" && $_POST['to_name_place'] == "Batangas Pier"){
		$_SESSION['msg'] = "Incorrect Destination Format! Please try again."; 
		header("location: ReserveSlots.php", true,  301 );  exit;
	}
	if(($_POST['from_name_place'] == "Batangas Pier" && $_POST['to_name_place'] == "Balagtas")||($_POST['from_name_place'] == "Balagtas" && $_POST['to_name_place'] == "Batangas Pier")){
		$_SESSION['msg'] = "Incorrect Destination Format! Please try again."; 
		header("location: ReserveSlots.php", true,  301 );  exit;
	}
	if(($_POST['from_name_place'] == "Batangas Pier" && $_POST['to_name_place'] == "Bolbok")||($_POST['from_name_place'] == "Bolbok" && $_POST['to_name_place'] == "Batangas Pier")){
		$_SESSION['msg'] = "Incorrect Destination Format! Please try again."; 
		header("location: ReserveSlots.php", true,  301 );  exit;
	}
	if(($_POST['from_name_place'] == "Batangas Pier" && $_POST['to_name_place'] == "Bauan")||($_POST['from_name_place'] == "Bauan" && $_POST['to_name_place'] == "Batangas Pier")){
		$_SESSION['msg'] = "Incorrect Destination Format! Please try again."; 
		header("location: ReserveSlots.php", true,  301 );  exit;
	}
	if(($_POST['from_name_place'] == "Batangas Pier" && $_POST['to_name_place'] == "Calicanto")||($_POST['from_name_place'] == "Calicanto" && $_POST['to_name_place'] == "Batangas Pier")){
		$_SESSION['msg'] = "Incorrect Destination Format! Please try again."; 
		header("location: ReserveSlots.php", true,  301 );  exit;
	}
	if(($_POST['from_name_place'] == "Batangas Pier" && $_POST['to_name_place'] == "Cuta")||($_POST['from_name_place'] == "Cuta" && $_POST['to_name_place'] == "Batangas Pier")){
		$_SESSION['msg'] = "Incorrect Destination Format! Please try again."; 
		header("location: ReserveSlots.php", true,  301 );  exit;
	}
	if(($_POST['from_name_place'] == "Batangas Pier" && $_POST['to_name_place'] == "Kumintang Ilaya")||($_POST['from_name_place'] == "Kumintang Ilaya" && $_POST['to_name_place'] == "Batangas Pier")){
		$_SESSION['msg'] = "Incorrect Destination Format! Please try again."; 
		header("location: ReserveSlots.php", true,  301 );  exit;
	}
	if(($_POST['from_name_place'] == "Batangas Pier" && $_POST['to_name_place'] == "Palengke (Bago)")||($_POST['from_name_place'] == "Palengke (Bago)" && $_POST['to_name_place'] == "Batangas Pier")){
		$_SESSION['msg'] = "Incorrect Destination Format! Please try again."; 
		header("location: ReserveSlots.php", true,  301 );  exit;
	}
	if(($_POST['from_name_place'] == "Batangas Pier" && $_POST['to_name_place'] == "Palengke (Luma)")||($_POST['from_name_place'] == "Palengke (Luma)" && $_POST['to_name_place'] == "Batangas Pier")){
		$_SESSION['msg'] = "Incorrect Destination Format! Please try again."; 
		header("location: ReserveSlots.php", true,  301 );  exit;
	}
	if(($_POST['from_name_place'] == "Batangas Pier" && $_POST['to_name_place'] == "Pallocan West")||($_POST['from_name_place'] == "Pallocan West" && $_POST['to_name_place'] == "Batangas Pier")){
		$_SESSION['msg'] = "Incorrect Destination Format! Please try again."; 
		header("location: ReserveSlots.php", true,  301 );  exit;
	}
	if(($_POST['from_name_place'] == "Batangas Pier" && $_POST['to_name_place'] == "San Pascual")||($_POST['from_name_place'] == "San Pascual" && $_POST['to_name_place'] == "Batangas Pier")){
		$_SESSION['msg'] = "Incorrect Destination Format! Please try again."; 
		header("location: ReserveSlots.php", true,  301 );  exit;
	}
	if($_POST['from_name_place'] == "Balagtas" && $_POST['to_name_place'] == "Balagtas"){
		$_SESSION['msg'] = "Incorrect Destination Format! Please try again."; 
		header("location: ReserveSlots.php", true,  301 );  exit;
	}
	if(($_POST['from_name_place'] == "Balagtas" && $_POST['to_name_place'] == "Bolbok")||($_POST['from_name_place'] == "Bolbok" && $_POST['to_name_place'] == "Balagtas")){
		$_SESSION['msg'] = "Incorrect Destination Format! Please try again."; 
		header("location: ReserveSlots.php", true,  301 );  exit;
	}
	if(($_POST['from_name_place'] == "Balagtas" && $_POST['to_name_place'] == "Bauan")||($_POST['from_name_place'] == "Bauan" && $_POST['to_name_place'] == "Balagtas")){
		$_SESSION['msg'] = "Incorrect Destination Format! Please try again."; 
		header("location: ReserveSlots.php", true,  301 );  exit;
	}
	if(($_POST['from_name_place'] == "Balagtas" && $_POST['to_name_place'] == "Calicanto")||($_POST['from_name_place'] == "Calicanto" && $_POST['to_name_place'] == "Balagtas")){
		$_SESSION['msg'] = "Incorrect Destination Format! Please try again."; 
		header("location: ReserveSlots.php", true,  301 );  exit;
	}
	if(($_POST['from_name_place'] == "Balagtas" && $_POST['to_name_place'] == "Cuta")||($_POST['from_name_place'] == "Cuta" && $_POST['to_name_place'] == "Balagtas")){
		$_SESSION['msg'] = "Incorrect Destination Format! Please try again."; 
		header("location: ReserveSlots.php", true,  301 );  exit;
	}
	if(($_POST['from_name_place'] == "Balagtas" && $_POST['to_name_place'] == "Kumintang Ilaya")||($_POST['from_name_place'] == "Kumintang Ilaya" && $_POST['to_name_place'] == "Balagtas")){
		$_SESSION['msg'] = "Incorrect Destination Format! Please try again."; 
		header("location: ReserveSlots.php", true,  301 );  exit;
	}
	if(($_POST['from_name_place'] == "Balagtas" && $_POST['to_name_place'] == "Palengke (Bago)")||($_POST['from_name_place'] == "Palengke (Bago)" && $_POST['to_name_place'] == "Balagtas")){
		$_SESSION['msg'] = "Incorrect Destination Format! Please try again."; 
		header("location: ReserveSlots.php", true,  301 );  exit;
	}
	if(($_POST['from_name_place'] == "Balagtas" && $_POST['to_name_place'] == "Palengke (Luma)")||($_POST['from_name_place'] == "Palengke (Luma)" && $_POST['to_name_place'] == "Balagtas")){
		$_SESSION['msg'] = "Incorrect Destination Format! Please try again."; 
		header("location: ReserveSlots.php", true,  301 );  exit;
	}
	if(($_POST['from_name_place'] == "Balagtas" && $_POST['to_name_place'] == "Pallocan West")||($_POST['from_name_place'] == "Pallocan West" && $_POST['to_name_place'] == "Balagtas")){
		$_SESSION['msg'] = "Incorrect Destination Format! Please try again."; 
		header("location: ReserveSlots.php", true,  301 );  exit;
	}
	if(($_POST['from_name_place'] == "Balagtas" && $_POST['to_name_place'] == "San Pascual")||($_POST['from_name_place'] == "San Pascual" && $_POST['to_name_place'] == "Balagtas")){
		$_SESSION['msg'] = "Incorrect Destination Format! Please try again."; 
		header("location: ReserveSlots.php", true,  301 );  exit;
	}
	if($_POST['from_name_place'] == "Bolbok" && $_POST['to_name_place'] == "Bolbok"){
		$_SESSION['msg'] = "Incorrect Destination Format! Please try again."; 
		header("location: ReserveSlots.php", true,  301 );  exit;
	}
	if(($_POST['from_name_place'] == "Bolbok" && $_POST['to_name_place'] == "Bauan")||($_POST['from_name_place'] == "Bauan" && $_POST['to_name_place'] == "Bolbok")){
		$_SESSION['msg'] = "Incorrect Destination Format! Please try again."; 
		header("location: ReserveSlots.php", true,  301 );  exit;
	}
	if(($_POST['from_name_place'] == "Bolbok" && $_POST['to_name_place'] == "Calicanto")||($_POST['from_name_place'] == "Calicanto" && $_POST['to_name_place'] == "Bolbok")){
		$_SESSION['msg'] = "Incorrect Destination Format! Please try again."; 
		header("location: ReserveSlots.php", true,  301 );  exit;
	}
	if(($_POST['from_name_place'] == "Bolbok" && $_POST['to_name_place'] == "Cuta")||($_POST['from_name_place'] == "Cuta" && $_POST['to_name_place'] == "Bolbok")){
		$_SESSION['msg'] = "Incorrect Destination Format! Please try again."; 
		header("location: ReserveSlots.php", true,  301 );  exit;
	}
	if(($_POST['from_name_place'] == "Bolbok" && $_POST['to_name_place'] == "Kumintang Ilaya")||($_POST['from_name_place'] == "Kumintang Ilaya" && $_POST['to_name_place'] == "Bolbok")){
		$_SESSION['msg'] = "Incorrect Destination Format! Please try again."; 
		header("location: ReserveSlots.php", true,  301 );  exit;
	}
	if(($_POST['from_name_place'] == "Bolbok" && $_POST['to_name_place'] == "Palengke (Bago)")||($_POST['from_name_place'] == "Palengke (Bago)" && $_POST['to_name_place'] == "Bolbok")){
		$_SESSION['msg'] = "Incorrect Destination Format! Please try again."; 
		header("location: ReserveSlots.php", true,  301 );  exit;
	}
	if(($_POST['from_name_place'] == "Bolbok" && $_POST['to_name_place'] == "Palengke (Luma)")||($_POST['from_name_place'] == "Palengke (Luma)" && $_POST['to_name_place'] == "Bolbok")){
		$_SESSION['msg'] = "Incorrect Destination Format! Please try again."; 
		header("location: ReserveSlots.php", true,  301 );  exit;
	}
	if(($_POST['from_name_place'] == "Bolbok" && $_POST['to_name_place'] == "Pallocan West")||($_POST['from_name_place'] == "Pallocan West" && $_POST['to_name_place'] == "Bolbok")){
		$_SESSION['msg'] = "Incorrect Destination Format! Please try again."; 
		header("location: ReserveSlots.php", true,  301 );  exit;
	}
	if(($_POST['from_name_place'] == "Bolbok" && $_POST['to_name_place'] == "San Pascual")||($_POST['from_name_place'] == "San Pascual" && $_POST['to_name_place'] == "Bolbok")){
		$_SESSION['msg'] = "Incorrect Destination Format! Please try again."; 
		header("location: ReserveSlots.php", true,  301 );  exit;
	}
	if($_POST['from_name_place'] == "Bolbok" && $_POST['to_name_place'] == "Bolbok"){
		$_SESSION['msg'] = "Incorrect Destination Format! Please try again."; 
		header("location: ReserveSlots.php", true,  301 );  exit;
	}
	if($_POST['from_name_place'] == "Bauan" && $_POST['to_name_place'] == "Bauan"){
		$_SESSION['msg'] = "Incorrect Destination Format! Please try again."; 
		header("location: ReserveSlots.php", true,  301 );  exit;
	}
	if(($_POST['from_name_place'] == "Bauan" && $_POST['to_name_place'] == "Calicanto")||($_POST['from_name_place'] == "Calicanto" && $_POST['to_name_place'] == "Bauan")){
		$_SESSION['msg'] = "Incorrect Destination Format! Please try again."; 
		header("location: ReserveSlots.php", true,  301 );  exit;
	}
	if(($_POST['from_name_place'] == "Bauan" && $_POST['to_name_place'] == "Cuta")||($_POST['from_name_place'] == "Cuta" && $_POST['to_name_place'] == "Bauan")){
		$_SESSION['msg'] = "Incorrect Destination Format! Please try again."; 
		header("location: ReserveSlots.php", true,  301 );  exit;
	}
	if(($_POST['from_name_place'] == "Bauan" && $_POST['to_name_place'] == "Kumintang Ilaya")||($_POST['from_name_place'] == "Kumintang Ilaya" && $_POST['to_name_place'] == "Bauan")){
		$_SESSION['msg'] = "Incorrect Destination Format! Please try again."; 
		header("location: ReserveSlots.php", true,  301 );  exit;
	}
	if(($_POST['from_name_place'] == "Bauan" && $_POST['to_name_place'] == "Palengke (Bago)")||($_POST['from_name_place'] == "Palengke (Bago)" && $_POST['to_name_place'] == "Bauan")){
		$_SESSION['msg'] = "Incorrect Destination Format! Please try again."; 
		header("location: ReserveSlots.php", true,  301 );  exit;
	}
	if(($_POST['from_name_place'] == "Bauan" && $_POST['to_name_place'] == "Palengke (Luma)")||($_POST['from_name_place'] == "Palengke (Luma)" && $_POST['to_name_place'] == "Bauan")){
		$_SESSION['msg'] = "Incorrect Destination Format! Please try again."; 
		header("location: ReserveSlots.php", true,  301 );  exit;
	}
	if(($_POST['from_name_place'] == "Bauan" && $_POST['to_name_place'] == "Pallocan West")||($_POST['from_name_place'] == "Pallocan West" && $_POST['to_name_place'] == "Bauan")){
		$_SESSION['msg'] = "Incorrect Destination Format! Please try again."; 
		header("location: ReserveSlots.php", true,  301 );  exit;
	}
	if(($_POST['from_name_place'] == "Bauan" && $_POST['to_name_place'] == "San Pascual")||($_POST['from_name_place'] == "San Pascual" && $_POST['to_name_place'] == "Bauan")){
		$_SESSION['msg'] = "Incorrect Destination Format! Please try again."; 
		header("location: ReserveSlots.php", true,  301 );  exit;
	}
	if($_POST['from_name_place'] == "Calicanto" && $_POST['to_name_place'] == "Calicanto"){
		$_SESSION['msg'] = "Incorrect Destination Format! Please try again."; 
		header("location: ReserveSlots.php", true,  301 );  exit;
	}
	if(($_POST['from_name_place'] == "Calicanto" && $_POST['to_name_place'] == "Cuta")||($_POST['from_name_place'] == "Cuta" && $_POST['to_name_place'] == "Calicanto")){
		$_SESSION['msg'] = "Incorrect Destination Format! Please try again."; 
		header("location: ReserveSlots.php", true,  301 );  exit;
	}
	if(($_POST['from_name_place'] == "Calicanto" && $_POST['to_name_place'] == "Kumintang Ilaya")||($_POST['from_name_place'] == "Kumintang Ilaya" && $_POST['to_name_place'] == "Calicanto")){
		$_SESSION['msg'] = "Incorrect Destination Format! Please try again."; 
		header("location: ReserveSlots.php", true,  301 );  exit;
	}
	if(($_POST['from_name_place'] == "Calicanto" && $_POST['to_name_place'] == "Palengke (Bago)")||($_POST['from_name_place'] == "Palengke (Bago)" && $_POST['to_name_place'] == "Calicanto")){
		$_SESSION['msg'] = "Incorrect Destination Format! Please try again."; 
		header("location: ReserveSlots.php", true,  301 );  exit;
	}
	if(($_POST['from_name_place'] == "Calicanto" && $_POST['to_name_place'] == "Palengke (Luma)")||($_POST['from_name_place'] == "Palengke (Luma)" && $_POST['to_name_place'] == "Calicanto")){
		$_SESSION['msg'] = "Incorrect Destination Format! Please try again."; 
		header("location: ReserveSlots.php", true,  301 );  exit;
	}
	if(($_POST['from_name_place'] == "Calicanto" && $_POST['to_name_place'] == "Pallocan West")||($_POST['from_name_place'] == "Pallocan West" && $_POST['to_name_place'] == "Calicanto")){
		$_SESSION['msg'] = "Incorrect Destination Format! Please try again."; 
		header("location: ReserveSlots.php", true,  301 );  exit;
	}
	if(($_POST['from_name_place'] == "Calicanto" && $_POST['to_name_place'] == "San Pascual")||($_POST['from_name_place'] == "San Pascual" && $_POST['to_name_place'] == "Calicanto")){
		$_SESSION['msg'] = "Incorrect Destination Format! Please try again."; 
		header("location: ReserveSlots.php", true,  301 );  exit;
	}
	if($_POST['from_name_place'] == "Cuta" && $_POST['to_name_place'] == "Cuta"){
		$_SESSION['msg'] = "Incorrect Destination Format! Please try again."; 
		header("location: ReserveSlots.php", true,  301 );  exit;
	}
	if(($_POST['from_name_place'] == "Cuta" && $_POST['to_name_place'] == "Kumintang Ilaya")||($_POST['from_name_place'] == "Kumintang Ilaya" && $_POST['to_name_place'] == "Cuta")){
		$_SESSION['msg'] = "Incorrect Destination Format! Please try again."; 
		header("location: ReserveSlots.php", true,  301 );  exit;
	}
	if(($_POST['from_name_place'] == "Cuta" && $_POST['to_name_place'] == "Palengke (Bago)")||($_POST['from_name_place'] == "Palengke (Bago)" && $_POST['to_name_place'] == "Cuta")){
		$_SESSION['msg'] = "Incorrect Destination Format! Please try again."; 
		header("location: ReserveSlots.php", true,  301 );  exit;
	}
	if(($_POST['from_name_place'] == "Cuta" && $_POST['to_name_place'] == "Palengke (Luma)")||($_POST['from_name_place'] == "Palengke (Luma)" && $_POST['to_name_place'] == "Cuta")){
		$_SESSION['msg'] = "Incorrect Destination Format! Please try again."; 
		header("location: ReserveSlots.php", true,  301 );  exit;
	}
	if(($_POST['from_name_place'] == "Cuta" && $_POST['to_name_place'] == "Pallocan West")||($_POST['from_name_place'] == "Pallocan West" && $_POST['to_name_place'] == "Cuta")){
		$_SESSION['msg'] = "Incorrect Destination Format! Please try again."; 
		header("location: ReserveSlots.php", true,  301 );  exit;
	}
	if(($_POST['from_name_place'] == "Cuta" && $_POST['to_name_place'] == "San Pascual")||($_POST['from_name_place'] == "San Pascual" && $_POST['to_name_place'] == "Cuta")){
		$_SESSION['msg'] = "Incorrect Destination Format! Please try again."; 
		header("location: ReserveSlots.php", true,  301 );  exit;
	}
	if(($_POST['from_name_place'] == "Kumintang Ilaya" && $_POST['to_name_place'] == "Palengke (Bago)")||($_POST['from_name_place'] == "Palengke (Bago)" && $_POST['to_name_place'] == "Kumintang Ilaya")){
		$_SESSION['msg'] = "Incorrect Destination Format! Please try again."; 
		header("location: ReserveSlots.php", true,  301 );  exit;
	}
	if(($_POST['from_name_place'] == "Kumintang Ilaya" && $_POST['to_name_place'] == "Palengke (Luma)")||($_POST['from_name_place'] == "Palengke (Luma)" && $_POST['to_name_place'] == "Kumintang Ilaya")){
		$_SESSION['msg'] = "Incorrect Destination Format! Please try again."; 
		header("location: ReserveSlots.php", true,  301 );  exit;
	}
	if(($_POST['from_name_place'] == "Kumintang Ilaya" && $_POST['to_name_place'] == "Pallocan West")||($_POST['from_name_place'] == "Pallocan West" && $_POST['to_name_place'] == "Kumintang Ilaya")){
		$_SESSION['msg'] = "Incorrect Destination Format! Please try again."; 
		header("location: ReserveSlots.php", true,  301 );  exit;
	}
	if(($_POST['from_name_place'] == "Kumintang Ilaya" && $_POST['to_name_place'] == "San Pascual")||($_POST['from_name_place'] == "San Pascual" && $_POST['to_name_place'] == "Kumintang Ilaya")){
		$_SESSION['msg'] = "Incorrect Destination Format! Please try again."; 
		header("location: ReserveSlots.php", true,  301 );  exit;
	}
	if($_POST['from_name_place'] == "Kumintang Ilaya" && $_POST['to_name_place'] == "Kumintang Ilaya"){
		$_SESSION['msg'] = "Incorrect Destination Format! Please try again."; 
		header("location: ReserveSlots.php", true,  301 );  exit;
	}
	if($_POST['from_name_place'] == "Palengke (Bago)" && $_POST['to_name_place'] == "Palengke (Bago)"){
		$_SESSION['msg'] = "Incorrect Destination Format! Please try again."; 
		header("location: ReserveSlots.php", true,  301 );  exit;
	}
	if(($_POST['from_name_place'] == "Palengke (Bago)" && $_POST['to_name_place'] == "Palengke (Luma)")||($_POST['from_name_place'] == "Palengke (Luma)" && $_POST['to_name_place'] == "Palengke (Bago)")){
		$_SESSION['msg'] = "Incorrect Destination Format! Please try again."; 
		header("location: ReserveSlots.php", true,  301 );  exit;
	}
	if(($_POST['from_name_place'] == "Palengke (Bago)" && $_POST['to_name_place'] == "Pallocan West")||($_POST['from_name_place'] == "Pallocan West" && $_POST['to_name_place'] == "Palengke (Bago)")){
		$_SESSION['msg'] = "Incorrect Destination Format! Please try again."; 
		header("location: ReserveSlots.php", true,  301 );  exit;
	}
	if(($_POST['from_name_place'] == "Palengke (Bago)" && $_POST['to_name_place'] == "San Pascual")||($_POST['from_name_place'] == "San Pascual" && $_POST['to_name_place'] == "Palengke (Bago)")){
		$_SESSION['msg'] = "Incorrect Destination Format! Please try again."; 
		header("location: ReserveSlots.php", true,  301 );  exit;
	}
	if($_POST['from_name_place'] == "Palengke (Luma)" && $_POST['to_name_place'] == "Palengke (Luma)"){
		$_SESSION['msg'] = "Incorrect Destination Format! Please try again."; 
		header("location: ReserveSlots.php", true,  301 );  exit;
	}
	if(($_POST['from_name_place'] == "Palengke (Luma)" && $_POST['to_name_place'] == "Pallocan West")||($_POST['from_name_place'] == "Pallocan West" && $_POST['to_name_place'] == "Palengke (Luma)")){
		$_SESSION['msg'] = "Incorrect Destination Format! Please try again."; 
		header("location: ReserveSlots.php", true,  301 );  exit;
	}
	if(($_POST['from_name_place'] == "Palengke (Luma)" && $_POST['to_name_place'] == "San Pascual")||($_POST['from_name_place'] == "San Pascual" && $_POST['to_name_place'] == "Palengke (Luma)")){
		$_SESSION['msg'] = "Incorrect Destination Format! Please try again."; 
		header("location: ReserveSlots.php", true,  301 );  exit;
	}
	if($_POST['from_name_place'] == "Pallocan West" && $_POST['to_name_place'] == "Pallocan West"){
		$_SESSION['msg'] = "Incorrect Destination Format! Please try again."; 
		header("location: ReserveSlots.php", true,  301 );  exit;
	}
	if(($_POST['from_name_place'] == "Pallocan West" && $_POST['to_name_place'] == "San Pascual")||($_POST['from_name_place'] == "San Pascual" && $_POST['to_name_place'] == "Pallocan West")){
		$_SESSION['msg'] = "Incorrect Destination Format! Please try again."; 
		header("location: ReserveSlots.php", true,  301 );  exit;
	}
	if($_POST['from_name_place'] == "San Pascual" && $_POST['to_name_place'] == "San Pascual"){
		$_SESSION['msg'] = "Incorrect Destination Format! Please try again."; 
		header("location: ReserveSlots.php", true,  301 );  exit;
	}
	
	if(isset($_POST['click_reserve'])){
		$studname = mysql_real_escape_string($_POST['stud_fullname']);
		$stud_address = mysql_real_escape_string($_POST['stud_address']);
		$stud_lvl = mysql_real_escape_string($_POST['grdlvl']);
		$stud_route = mysql_real_escape_string($_POST['type_route']);
		$stud_from = mysql_real_escape_string($_POST['from_name_place']);
		$stud_To = mysql_real_escape_string($_POST['to_name_place']);
		$stud_status = mysql_real_escape_string($_POST['stud_status']);
		$user_id = intval($_POST['user_id']);
		$driver_id = intval($_POST['vehicle_num']);
		
		if($stud_route == "One-way Route (Morning)" || $stud_route == "One-way Route (Afternoon)" ){
			switch([$stud_from, $stud_To]){
				case ['Batangas Pier', 'De La Salle Lipa']: case ['De La Salle Lipa', 'Batangas Pier']:
					$service_fee = 2500 + 200;
				break;
				case ['Cuta', 'De La Salle Lipa']: case ['De La Salle Lipa', 'Cuta']:
					$service_fee = 2500 + 200;
				break;
				case ['Alangilan', 'De La Salle Lipa']: case ['De La Salle Lipa', 'Alangilan']:
					$service_fee = 2500 + 250;
				break;
				case ['Kumintang Ibaba', 'De La Salle Lipa']: case ['De La Salle Lipa', 'Kumintang Ibaba']:
					$service_fee = 2500 + 250;
				break;
				case ['Palengke (Bago)', 'De La Salle Lipa']: case ['De La Salle Lipa', 'Palengke (Bago)']:
					$service_fee = 2500 + 250;
				break;
				case ['Palengke (Luma)', 'De La Salle Lipa']: case ['De La Salle Lipa', 'Palengke (Luma)']:
					$service_fee = 2500 + 250;
				break;
				case ['Pallocan West', 'De La Salle Lipa']: case ['De La Salle Lipa', 'Pallocan West']:
					$service_fee = 2500 + 250;
				break;
				case ['Balagtas', 'De La Salle Lipa']: case ['De La Salle Lipa', 'Balagtas']:
					$service_fee = 2500 + 250;
				break;
				case ['Bolbok', 'De La Salle Lipa']: case ['De La Salle Lipa', 'Bolbok']:
					$service_fee = 2500 + 250;
				break;
				case ['Kumintang Ilaya', 'De La Salle Lipa']: case ['De La Salle Lipa', 'Kumintang Ilaya']:
					$service_fee = 2500 + 250;
				break;
				case ['Calicanto', 'De La Salle Lipa']: case ['De La Salle Lipa', 'Calicanto']:
					$service_fee = 2500 + 250;
				break;
				case ['Bauan', 'De La Salle Lipa']: case ['De La Salle Lipa', 'Bauan']:
					$service_fee = 2500 + 300;
				break;
				case ['San Pascual', 'De La Salle Lipa']: case ['De La Salle Lipa', 'San Pascual']:
					$service_fee = 2500 + 300;
				break;
			}
		}
		if($stud_route == "2-way Route"){
			switch([$stud_from, $stud_To]){
				case ['Batangas Pier', 'De La Salle Lipa']: case ['De La Salle Lipa', 'Batangas Pier']:
					$service_fee = 3000 + 200;
				break;
				case ['Cuta', 'De La Salle Lipa']: case ['De La Salle Lipa', 'Cuta']:
					$service_fee = 3000 + 200;
				break;
				case ['Alangilan', 'De La Salle Lipa']: case ['De La Salle Lipa', 'Alangilan']:
					$service_fee = 3000 + 250;
				break;
				case ['Kumintang Ibaba', 'De La Salle Lipa']: case ['De La Salle Lipa', 'Kumintang Ibaba']:
					$service_fee = 3000 + 250;
				break;
				case ['Palengke (Bago)', 'De La Salle Lipa']: case ['De La Salle Lipa', 'Palengke (Bago)']:
					$service_fee = 3000 + 250;
				break;
				case ['Palengke (Luma)', 'De La Salle Lipa']: case ['De La Salle Lipa', 'Palengke (Luma)']:
					$service_fee = 3000 + 250;
				break;
				case ['Pallocan West', 'De La Salle Lipa']: case ['De La Salle Lipa', 'Pallocan West']:
					$service_fee = 3000 + 250;
				break;
				case ['Balagtas', 'De La Salle Lipa']: case ['De La Salle Lipa', 'Balagtas']:
					$service_fee = 3000 + 250;
				break;
				case ['Bolbok', 'De La Salle Lipa']: case ['De La Salle Lipa', 'Bolbok']:
					$service_fee = 3000 + 250;
				break;
				case ['Kumintang Ilaya', 'De La Salle Lipa']: case ['De La Salle Lipa', 'Kumintang Ilaya']:
					$service_fee = 3000 + 250;
				break;
				case ['Calicanto', 'De La Salle Lipa']: case ['De La Salle Lipa', 'Calicanto']:
					$service_fee = 3000 + 250;
				break;
				case ['Bauan', 'De La Salle Lipa']: case ['De La Salle Lipa', 'Bauan']:
					$service_fee = 3000 + 300;
				break;
				case ['San Pascual', 'De La Salle Lipa']: case ['De La Salle Lipa', 'San Pascual']:
					$service_fee = 3000 + 300;
				break;
			}
		}
		
		$sql_14 = "INSERT INTO students(student_name, student_address, student_level, route_type, from_place, to_place, service_fee, student_status, driver_id, userid) 
		VALUES('$studname','$stud_address','$stud_lvl','$stud_route','$stud_from','$stud_To','$service_fee','$stud_status','$driver_id','$user_id')";
		$qry14 = mysql_query($sql_14);
		
		if($qry14){
			$_SESSION['msg'] = "Your Student / Child has been ADDED to your list!"; 
			header("location: home02.php", true,  301 );  exit;
		}
		else{
			echo "Data not added.". mysql_error(). "\n";
		}
	}
?>