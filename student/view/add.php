<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
//including the database connection file
include_once("../controller/config.php");

if(isset($_POST['Submit'])) {	
	$cname = mysqli_real_escape_string($mysqli, $_POST['cname']);
	$crdt = mysqli_real_escape_string($mysqli, $_POST['crdt']);
	$section = mysqli_real_escape_string($mysqli, $_POST['section']);
		
	// checking empty fields
	if(empty($cname) || empty($crdt) || empty($section)) {
				
		if(empty($cname)) {
			echo "<font color='red'>CourseName field is empty.</font><br/>";
		}
		
		if(empty($crdt)) {
			echo "<font color='red'>Credit field is empty.</font><br/>";
		}
		
		if(empty($section)) {
			echo "<font color='red'>Section field is empty.</font><br/>";
		}
		
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$result = mysqli_query($mysqli, "INSERT INTO course(cname,crdt,section) VALUES('$cname','$crdt','$section')");
		
		//display success message
		echo "<font color='green'>Data added successfully.";
		
		echo "<br/><a href='adddrp.php'>View Result</a>";
	}
}
?>
</body>
</html>
