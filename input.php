<?php 
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<html>
<head>
<br><center>  <h1>Search Box</h1> </center>
<hr>
<style>
body{ 
  
  font-family: Calibri, Helvetica, sans-serif;  
  background-color: pink;  
   padding: 50px;  
}  

  
input[type=text], input[type=password], textarea {  
  width: none;  
  padding: 15px;  
  margin: 5px 0 22px 0;  
  display: inline-block;  
  border: none;  
  background: #f1f1f1;  
}  
input[type=text]:focus, input[type=password]:focus {  
  background-color: orange;  
  outline: none; 
}  
 div {  
            padding: 10px 0;  
         }  
hr {  
  border: 1px solid #f1f1f1;  
  margin-bottom: 25px;  
}  
.registerbtn {  
  background-color: #4CAF50;  
  color: white;  
  padding: 16px 10px;  
  margin: 8px 0;  
  border: none;  
  cursor: pointer;  
  width: 10%;  
  opacity: 0.9;  
}  
.registerbtn:hover {  
  opacity: 1;  
}   			
</style>
<body background="login.jpg" >
<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

<center><form action="sales.php" class="container" method="post"><br><b>
Enter your registered phone no:<br><br>
<input type="text" name="pno"><br>
<br><center><Button class="registerbtn" type="submit">Submit</Button><br>
<br><a href="home2.php">Back</a>
</form>
</body>
<?php 
}else{
     header("Location: index2.php");
     exit();
}
 ?>