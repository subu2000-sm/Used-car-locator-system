<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['carname']) && isset($_POST['modelname'])
    && isset($_POST['colour']) && isset($_POST['km_runned']) && isset($_POST['price']) && isset($_POST['contact']) && isset($_POST['address'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$carname = validate($_POST['carname']);
	$modelname = validate($_POST['modelname']);

	$colour = validate($_POST['colour']);
	$km_runned = validate($_POST['km_runned']);
	$scratch=validate($_POST['scratch']);
	$price=validate($_POST['price']);
	$contact=validate($_POST['contact']);
	$address=validate($_POST['address']);
	$car_data = 'carname='. $carname. '&modelname='. $modelname;


	if (empty($carname)) {
		header("Location: signup.php?error=User Name is required&$car_data");
	    exit();
	}else if(empty($modelname)){
        header("Location: signup.php?error=Password is required&$car_data");
	    exit();
	}
	

	/*else{

		// hashing the password
        $pass = md5($pass);

	    $sql = "SELECT * FROM users WHERE user_name='$uname' ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: signup.php?error=The username is taken try another&$user_data");
	        exit();*/
		
           $sql2 = "INSERT INTO car(company, model, colour,scratch,km_runned,price,contact,address) VALUES('$carname', '$modelname', '$colour','$scratch','$km_runned','$price','$contact','$address')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
           	 header("Location: crd.php?success=Inserted successfully");
	         exit();
           }else {
	           	header("Location: crd.php?error=unknown error occurred&$car_data");
		        exit();
           }
		
	}
	
else{
	header("Location: signup.php");
	exit();
}