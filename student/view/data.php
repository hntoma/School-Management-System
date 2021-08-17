<?php
	require_once '../controller/db.php';
	
	if(ISSET($_POST['res'])){
		$query = $conn->query("SELECT * FROM `consult` ORDER BY `faculty` ASC");
		while($fetch = $query->fetch_array()){
			echo "
				<tr>
					<td>".$fetch['faculty']."</td>
					<td>".$fetch['day']."</td>
					<td>".$fetch['time']."</td>
					
				</tr>
			";
		}
	}
?>
