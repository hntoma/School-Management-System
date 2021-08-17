<?php
	require_once 'db.php';
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

	elseif(ISSET($_POST['search'])){
		$search = $_POST['search'];
		$query = $conn->query("SELECT * FROM `consult` WHERE (`faculty` LIKE '%".$search."%') OR (`day` LIKE '%".$search."%') ORDER BY `faculty` ASC");
		$rows = $query->num_rows;
		
		if($rows > 0){
			while($fetch = $query->fetch_array()){
				echo "
					<tr>
						<td>".$fetch['faculty']."</td>
						<td>".$fetch['day']."</td>
						<td>".$fetch['time']."</td>
						
					</tr>
				";
			}
		}else{
			echo "
				<tr>
					<td colspan='5'><center>No Search Found!</center></td>
				</tr>
			";
		}
	}
?> 