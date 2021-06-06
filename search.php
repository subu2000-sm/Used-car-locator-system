<?php 
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!Doctype Html>
<Html>   
<Head>   
<style>
body{ 
  
  font-family: Calibri, Helvetica, sans-serif;  
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  margin-left:490px;
  
}  
 
.searchbox {
float: left;
}
input[type=text] {
padding: 6px;
margin-top: 8px;
font-size: 17px;
border: none;
width:200px

}

.center {
  text-align: center;
}

.searchbox button {
text-align: center;
padding: 8px;
margin-top: 10px;
margin-left: 10px;
background: green;
font-size: 20px;
border: none;
cursor: pointer;
}
.searchbox button:hover {
background: green;
}
h1{
	margin-top:10px;
}
a{
	font-color:Black;
}
</style>
</Head>
<Body background="login.jpg">

<div class="searchbox">
<form action="result.php" method="post" > 
<h1>Search Car</h1>
<hr>
<br>
<h2>Company:</h2>
<input type="text"  placeholder=" Company Name" name="company"> <br>
<h2>Model:</h2>
<input type="text"  placeholder=" Model Name" name="model"> 
<h2>Budget</h2>
<select name="budget">  
<option value="budget">Sort Price</option>
<option value="1">low to High</option> 


</select> 
<br><br><button type="submit">Search</button> <br>
&nbsp;&nbsp;<a href="home2.php">Back</a>
</form>
</div> 
</Body>
</Html>
<?php 
}else{
     header("Location: index2.php");
     exit();
}
 ?>
