<?php
//including the database connection file
include_once("../controller/config.php");

//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query($mysqli, "SELECT * FROM course ORDER BY id DESC"); // using mysqli_query instead
?>

<html>
<head>	
	<title>Homepage</title>
	
</head>

<body>
	<div>
         <a href='homepage.php'style ="color:black;">Back</a><br>
  		</div>
	<br><br>
<h1 align="center"  style= "font-size:200%;color: black;">Add/Drop Course</h1>
<br><br><br><br>
<a href="add.html">Add New Data</a><br/><br/>

	<table width='80%' border=0>

	<tr bgcolor='#CCCCCC'>
		<td>Course Name</td>
		<td>Credit</td>
		<td>Section</td>
		<td>Update</td>
	</tr>
	<?php 
	//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
	while($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td>".$res['cname']."</td>";
		echo "<td>".$res['crdt']."</td>";
		echo "<td>".$res['section']."</td>";	
		echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
	}
	?>

	</table>
</body>
</html>
