<?php 
session_start(); 
include "db_conn.php";

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

$sql = "SELECT * FROM car  ";
$result= mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="UTF-8">
    <title> Details</title>
 
    <style>
        table {
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
			width:100%;
        }
  
        h1 {
            text-align: center;
            color: #006600;
            font-size: xx-large;
            font-family: 'Gill Sans', 'Gill Sans MT', 
            ' Calibri', 'Trebuchet MS', 'sans-serif';
        }
  
        td {
            background-color: #cyan;
            border: 1px solid black;
        }
  
        th,
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
  
        td {
            font-weight: lighter;
        }
    </style>
</head>
  
<body>
    <section>
        <h1>Used Car Details And Location</h1>
        
        <table>
            <tr>
                <th>Company</th>
                <th>Model Name</th>
                <th>Colour</th>
                <th>scratch</th>
				<th>km_runned</th>
				<th>Price</th>
				<th>Address</th>
				<th>Phone No</th>
            </tr>
          
            <?php   
                while($rows=mysqli_fetch_array($result))
                {
             ?>
            <tr>
                
                <td><?php echo $rows['company'];?></td>
                <td><?php echo $rows['model'];?></td>
                <td><?php echo $rows['colour'];?></td>
                <td><?php echo $rows['scratch'];?></td>
				<td><?php echo $rows['km_runned'];?></td>
				<td><?php echo $rows['price'];?></td>
				<td><?php echo $rows['address'];?></td>
				<td><?php echo $rows['contact'];?></td>
            </tr>
            <?php
                }
             ?>
        </table>
    </section>
	
		<a href="home2.php">Back to Home</a>
		
</body>

</html>
<?php
}

else{
     header("Location: index2.php");
     exit();
}  
?>