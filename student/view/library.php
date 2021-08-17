<?php
$title = "Library";
include('header.php');
$name = $_COOKIE['name'];
if ($_COOKIE['flag'] == true) {
?>
<style>
    body{
        background-image: url('../plugins/routine.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;  
        background-size: cover;
    }
</style>
</head>
<body>
  <div style="padding:20px;background-color:steelblue;">
    <table width="100%">
            <tr>
                <td align = "left" width="50%">
                    <img src= ../plugins/book_logo.jpg   sizes="10px" width="30%">
                </td>
                <td align="center">
                    <h1 style= "font-size:400%;color: black;">Student Book List</h1>
                </td>
                <td align = "right" width="100%" class="lime">
                    <div style= "font-size:150%;">
                    	 <a href="homepage.php" style ="color:black;"> Back</a><br>
                        <a href="viewprofile.php" style ="color: black;"><?=$name?></a><br>
                        <a href='../controller/logout.php'style ="color:black;">Log Out</a>
                    </div>
                </td>
            </tr> </table> </div>
	<div id="page_title"><center>
			
		</center>
	</div>
	<div id="main_content"style="padding: 30px">
		<center>
			<table border="1" width = 70% style="padding: 30px; font-size: 25px;font-family:Helvetica, sans-serif; ">
			<tr align="center" style="height: 50px;">
			<h3>
				<td style="width: 20px;">BOOK NAME</td>
				<td style="width:  20px;">WRITER NAME</td>
				<td style="width:  20px;">BOOK TYPE</td>
				
			</h3>
			</tr>
			<?php
				$myfile = fopen('../data/book.json', 'r');
        		$data = fread($myfile, filesize('../data/book.json'));
        		fclose($myfile);
				$book = json_decode($data,true);

				for($i = 0; $i < sizeof($book); $i++) {
					?>
					<tr align="center" style="font-size: ">
						<td><?=$book[$i]['bookname']?></td>
						<td><?=$book[$i]['writername']?></td>
						<td><?=$book[$i]['booktype']?></td>
						
				<?php
			}
			?>		
			</table>
		</center>
	</div>
<?php
}
   else
    {
        header('location: login.php');
    }
    include('footer.php');
    ?>