<?php 
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="style.css">
<style>
	.submitbtn {  
  background-color: #4CAF50;  
  color: white;  
  padding: 16px 20px;  
  margin: 8px 0;  
  border: none;  
  cursor: pointer;  
  width: 20%;  
  opacity: 0.9;  
}  
</style>
</head>

<body>
 
     <h1>Hello, <?php echo $_SESSION['name']; ?></h1>
	 
     <a href="logout.php">Logout</a><br>
	  <a href="crd.php">Sale Cars</a><br>
	   <a href="retrive.php">Find Cars</a><br>
	   <a href="search.php">Search Cars</a><br>
	   <a href="input.php">View Your Ads</a>

	 	
</body>
</html>

<?php 
}else{
     header("Location: index2.php");
     exit();
}
 ?>