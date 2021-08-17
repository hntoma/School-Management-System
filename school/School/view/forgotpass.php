<?php
	$title = "Forgot Password";
	include('header.php');
?>
</head>
<body style="background-color: LightGoldenrodYellow;">
	<div style="padding:30px; background-color:LightGreen; ">
		<table width="100%">
			<tr>
                <td align="center">
                    <h1 style= "font-size:300%;color: Cornsilk;">ক্ষুদিরাম স্কুল</h1>
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
			<form method="POST" action="../controller/forgotpasscheck.php" >
				<h2 style="color: red;">নতুন পিন:</h2>
                <table>
                	<tr>
                        <td>
                            <input type='text'  placeholder="ইউজার আইডি" name='uname'>
                        </td>
                        <td><h4><br><br></h4></td>
                    </tr>
                    <tr>
                        <td>
                            <input type='password' placeholder= "নতুন পিন দিন" name='newpass'>
                        </td>
                        <td><h4><br><br></h4></td>
                    </tr>
                    <tr>
                        <td>
                            <input type='password' placeholder="পুনরায় নতুন পিন দিন">
                        </td>
                        <td><h4><br><br></h4></td>
                    </tr>
                </table>
                <input type='submit' name="submit" value="কনফার্ম" style="height: 30px;font-size: 20px; width:120px;"><br><br>
			</form>
		</center>
	</div>
    <div style="background-color: LightGreen;">
	<?php 
	   include('footer.php');
	?>
    </div>