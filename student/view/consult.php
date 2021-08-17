<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1" />
		<!--<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>-->
	</head>
<body>
	
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary">Search Consulting Hour</h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<form  method="POST">
			<div class="form-inline">
				<input type="text" id="search_data" class="form-control" placeholder="Search here..."/>
				<button type="button" id="search" class="btn btn-primary">Search</button>
				<button type="button" id="refresh" class="btn btn-success">Refresh</button>
			</div>
		</form>
		<br /><br />
		<table class="table table-bordered">
			<thead class="alert-success">
				<tr>
					<th>Faculty Name</th>
					<th>Day</th>
					<th>Time</th>
					
				</tr>
			</thead>
			<tbody class="alert-warning" id="data"></tbody>
		</table>
	</div>
</body>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/script.js"></script>
</html>