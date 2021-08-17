<?php
	$title = "login";
	session_start();
if (isset($_COOKIE['flag'])) {
    header('location: admin_home.php');
}
?>
</head>
<body style="background-color: LightGoldenrodYellow;">
	<div style="padding:30px; background-color:LightGreen; ">
		<table width="100%">
			<tr>
				
				<td align="center">
                    <h1 style= "font-size:300%;color: Red;">ক্ষুদিরাম বিদ্যালয়</h1>
                </td>
				<td align = "right" width="50%">  
						<div style="font-size: 100%">কোনো একাউন্ট নেই?
						<a href="registration.php">একাউন্ট যোগ করুন</a></div>
				</td>
			</tr>
		</table>
	</div>
	<div >
		<center>
			<form method="POST" action="../controller/logincheck.php" >
				<fieldset style="width:350px">
					
					<h1 align="center">স্বাগতম!</h1>
					<strong>ইউজার আইডি</strong><br>
					<input type="text" name="uname" value=""><br><br>
					<strong>গোপন পিন </strong><br>
					<input type="password" name="password" value=""><br><br>
					<strong>আপনার ধরন </strong><br>
					<select name="utype" style="width:162px; font-size: 14px; height:22px;">
              			<option name="type" value="admin">এডমিন</option>
              			<option name="type" value="teacher">শিক্ষক</option>
              			<option name="type" value="student">শিক্ষার্থি</option>
              			<option name="type" selected value="librarian">গ্রন্থাগার</option>
          			</select><br>
					<br><input type="checkbox" name="remember">তথ্য রাখুন<br><br>
					<input type="submit" name="submit" value="স্কুলে স্বাগতম"><br><hr>
					<a href="forgotpass.php">পাসওয়ার্ড ভুলে গেছেন?</a><br><hr>
					
				</fieldset>
			</form>
		</center>
	</div>
</body>
  <div style="background-color: LightGreen;">
  <?php

  include('footer.php');
  ?></div>