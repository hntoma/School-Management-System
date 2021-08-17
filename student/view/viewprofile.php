<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<html>
  <head>
    <br>
    <br>
    <br>
    <br>
    <br>

    <script type="text/javascript" src="css/style.css"></script>
    
  </head>

  <body style="background-color:lightblue">
    <div align="center">
  
  </div>

<center>
	<form action="../controller/editprofile.php" method="post" onsubmit="return isValid()" name="mForm" id="nForm">
    <h1 align="center"><b>Update Profile</b></h1>
  		<br>
  <div class="container" style="width:380px;">
			<label for="username">New Username: </label>
			<input type="text" name="username"  >
      <br><br>
			<label for="password">New Password: </label>
			<input type="text" name="password"  ><br>
      <br>
        <div align ="center">
          
			<button style="margin-left:20%;" type="submit" name="login" class="btn btn-info">Update </button>
</div>
</div>

	</form>

  <br>
  <div>
         <a href='homepage.php'style ="color:black;">Back</a><br>
  		</div>

<center>

  </body>
</html>
