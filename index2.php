<!DOCTYPE html>  
<html>  
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">  

<br><style>  

body{ 
  
  font-family: Calibri, Helvetica, sans-serif;  
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  
}  

  
input[type=text], input[type=password], textarea {  
  width: none;  
  padding: 15px;  
  margin: 5px 0 22px 0;  
  display: inline-block;  
  width: 200px;
  border: none;  
  background: #f1f1f1;  
}  

 div {  
            padding: 10px 0;  
         }  
hr {  
  border: 1px solid #f1f1f1;  
  margin-bottom: 25px;  
}  
.loginbtn {  
  background-color: #4CAF50;  
  color: white;  
  padding: 16px 20px;  
  margin: 8px 0;  
  border: none;  
  cursor: pointer;  
  width: 20%;  
  opacity: 0.9;  
}  
.loginbtn:hover {  
  opacity: 1;  
}   
</style>  
</head>  
<body background="login.jpg">  
<center><form action="login.php" method="post">
  <div class="container">  
  <center>  <h1>Login </h1> </center>  
  <hr>  
  <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
  <label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>User Name</b> </label>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" class="wid" name="uname" placeholder= "User Name" size="15" required />  <br>   



  
<label for="psw">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Password</b></label>   
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" class="wid" placeholder=" Password" name="password" required>  <br> 
  
    <button type="submit" class="loginbtn">Login</button> <br> 
<a href="signup.php" class="ca"><h1>Create an account</h1></a>	
	
</form>  
</body>  
</html>