<?php 
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
<title>Home Page</title>
<style>

body {
  
  height: 100%;
  margin: 0;
  font-family: Arial;
 
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  
}
.b1{
	border-column:6px black;
	height:75px;
	
}
/* Style tab links */
.tablink {
  background-color: #C11B17;
  margin-top: -15px;
  color: goldenrod;
  float: left;
  border: none; 	
  outline: none;
  cursor: pointer;
  padding: 14px 20.2px;
  font-size: 35px;
  width: 14%;
  height:75px;
  text-align:justify;
}

.tablink:hover {
  background-color: #777;
}

/* Style the tab content (and add height:100% for full page content) */
.tabcontent {
  color: white;
  display: none;
  padding: 100px 20px;
  height: 100%;
}
div1 {
  background-image: url('D:\Pictures\Screenshots');
}


#Logout {background-color: red;}
#Sale Cars {background-color: green;}
#Find Cars {background-color: blue;}
#Search Cars {background-color: orange;}*/
</style>
</head>
<body background="car.jpg">


<a href="crd.php" style="text-decoration:none" class="tablink" onclick="openPage('crd.php', this, 'green')" >Sale Cars</a>
<a href="retrive.php" style="text-decoration:none" class="tablink" onclick="openPage('retrive.php', this, 'blue')">Car Details</a>
<a href="search.php" style="text-decoration:none"class="tablink" onclick="openPage('search.php', this, 'orange')">Search Cars</a>
<a href="input.php" style="text-decoration:none" class="tablink" onclick="openPage('input.php', this, 'orange')">Sales History</a>
<a href="contact.php" style="text-decoration:none" class="tablink" onclick="openPage('contact.php', this, 'red')">Contact Us</a>
<a href="logout.php" style="text-decoration:none" class="tablink" onclick="openPage('logout.php', this, 'red')">Logout</a>

 <h1>Hello, <?php echo $_SESSION['name']; ?></h1>
<script>
function openPage(pageName, elmnt, color) {
  // Hide all elements with class="tabcontent" by default */
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Remove the background color of all tablinks/buttons
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].style.backgroundColor = "";
  }
  // Show the specific tab content
  document.getElementById("menu").style.display = "block";

  // Add the specific color to the button used to open the tab content
  elmnt.style.backgroundColor = color;
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("menu").click();
</script>
</div1>
</body>
</html>
<?php 
}else{
     header("Location: index2.php");
     exit();
}
 ?>