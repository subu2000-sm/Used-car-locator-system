<!DOCTYPE html>
<html>
<head>
	<title>Enter Your Car Details</title>
	<link rel="stylesheet" type="text/css" href="style.css">
<style>
	body{  
  font-family: Calibri, Helvetica, sans-serif;
	font-size:20px;
  background-color: pink;  
   
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}  
.container {  
    padding: 50px;  
  background-color: lightblue;  
}  
  
input[type=text], input[type=password], textarea {  
  width: none;  
  padding: 15px;  
  margin: 5px 0 22px 0;  
  display: inline-block;  
  border: none;  
  width: 200px;
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
.registerbtn:hover {  
  opacity: 1;  
}  
a{
	font-color:Black;
}
</style>  
</head>
<body background="login.jpg">
     <form action="carupdate.php" method="post">
     	<center><h2>Car Details</h2>
		<hr>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

         &nbsp;&nbsp;&nbsp;&nbsp; <label>Car Name</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <?php if (isset($_GET['carname'])) { ?>
               <input type="text" 
                      name="carname" 
                      placeholder="carname"
                      value="<?php echo $_GET['carname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="carname" 
                      placeholder="carname"><br>
          <?php }?>

         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label>Model</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <?php if (isset($_GET['modelname'])) { ?>
               <input type="text" 
                      name="modelname" 
                      placeholder="Model Name"
                      value="<?php echo $_GET['modelname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="modelname" 
                      placeholder="modelname"><br>
          <?php }?>

Colour :  
</label>   
  
<select name="colour">  
<option value="Colour">Colour</option>
<option value="White">White</option> 
<option value="Blue">Blue</option>  
<option value="Navy Blue">Navy Blue</option>
<option value="Red">Red</option> 
<option value="Orange">Orange</option> 
<option value="Green">Green</option> 
<option value="Grey">Grey</option> 
<option value="Yellow">Yellow</option>  
<option value="Brown">Brown</option>  
<option value="Silver">Silver</option> 
</select>  
</div> <br><br>

     	<label>KM Runned</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     	<input type="text" 
                 name="km_runned" 
                 placeholder="Kilometre Runned "><br>
				 <label>
				 Scratch 
				</label>  
				<input type="radio" value="Yes" name="scratch"  > Yes   
				<input type="radio" value="No" name="scratch">  No  
				</div> <br>

          <br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>Price</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input type="text" 
                 name="price" 
                 placeholder="price"><br>
 <label> Contact Details </label> &nbsp;&nbsp;&nbsp;
<input type="text" name="contact" placeholder= "phone no" size="15" required /> <br>   
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label> Address </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="address" placeholder= "address" size="15" required /> <br>  

     	<button type="submit" class="submitbtn">Submit</button><br>
        
     </form>
&nbsp;<a href="home2.php">Back</a>
</body>
</html>