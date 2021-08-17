<?php
	$title = "Change Password";
    $name = $_COOKIE['name'];
if ($_COOKIE['flag'] == true) {
	include('header.php');
?>
<style>
    body{
        background-image: url('../plugins/routine.jpg');
        background-repeat: repeat;
        background-attachment: fixed;  
        background-size: cover;

</style>
</head>
<body>
  <div style="padding:20px;background-color:steelblue;">
    <table width="100%">
            <tr>
                
                <td align = "right" width="100%" class="lime">
                    <div style= "font-size:150%;">
                        <a href='../controller/logout.php'style ="color:black;">Log Out</a><br>
                        <a href="viewprofile.php" style ="color:black;"> Back</a>
                    </div>
                </td>
            </tr>
    </table>
  </div>
				</td>
			</tr>
		</table>
	</div>
	<div >
		<center>
			<form method="POST" action="../controller/passcheck.php" >
				<h2 style="color: black;">Change Your Password:</h2>
                <table>
                	<tr>
                        <td>
                            <input type='text'  placeholder="User Name" name='uname' style="height: 30px;font-size: 20px; width:180px;">
                        </td>
                        <td><h4><br><br></h4></td>
                    </tr>
                    <tr>
                        <td>
                            <input type='password'  placeholder="Current Password" name='curpass' style="height: 30px;font-size: 20px; width:180px;">
                        </td>
                        <td><h4><br><br></h4></td>
                    </tr>
                    <tr>
                        <td>
                            <input type='password' placeholder= "New Password" name='newpass' style="height: 30px;font-size: 20px; width:180px;">
                        </td>
                        <td><h4><br><br></h4></td>
                    </tr>
                    <tr>
                        <td>
                            <input type='password' placeholder="Retype Password" name='conpass' style="height: 30px;font-size: 20px; width:180px;">
                        </td>
                        <td><h4><br><br></h4></td>
                    </tr>
                </table>
                <input type='submit' name="submit" value="Confirm" style="height: 30px;font-size: 20px; width:120px;"><br><br>
                
			</form>
		</center>
	</div>
 
	<?php }
	   include('footer.php');
	?>
    </div>