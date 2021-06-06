<?php 
session_start();  
include "db_conn.php";
if (isset($_POST['company']) && $_POST['model'] ) {
$carname = ($_POST['company']);
$model=($_POST['model']);

	
	}
$sql = "SELECT * FROM car WHERE company='$carname' AND model='$model'   ";
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
			width:100%
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
  
        th,td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
  
        td {
            font-weight: lighter;
        }
		th{
			heigth:1000px
		}
    </style>
</head>
  
<body>
    <section>
        <h1>Used Car Details And Location</h1>
        <!-- TABLE CONSTRUCTION-->
        <table>
            <tr>
                <th>Company</th>
                <th>Model Name</th>
                <th>Colour</th>
                <th>Scratch</th>
				<th>Kilo Metres Runned</th>
				<th>Price</th>
				<th>Address</th>
				<th>Phone No</th>
            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS-->
            <?php   // LOOP TILL END OF DATA 
                while($rows=mysqli_fetch_array($result))
                {
             ?>
            <tr>
                <!--FETCHING DATA FROM EACH 
                    ROW OF EVERY COLUMN-->
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
		<a href="search.php">Back</a><br>
		<a href="home2.php">Back to Home</a>
    </section>
</body>
  
</html>