<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>

</head>
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
                <td align="center">
                    <h1 align="left"  style= "font-size:200%;color: black;">Profile</h1>
                </td>
                <td align = "right" width="100%" class="lime">
                    <div style= "font-size:150%;">
                        <a href='viewprofile.php'style ="color:black;"><?php echo $_SESSION['username']; ?></a><br>
                        <a href="login.php" style ="color:black;">Log out</a>
                    </div>
                </td>
            </tr>
    </table>
  </div>
              
<td align = "left" width="50%" class="lime">
                    <div style= "font-size:150%;">
                        <a href= "consult.php" style ="color:black;">Consulting </a><br>
                        <a href= "library.php" style ="color:black;">Library </a><br>
                        <a href= "routine.php" style ="color:black;">Routine </a><br>
                        <a href= "adddrp.php" style ="color:black;">Course Add/Drop </a><br>
<form action="fileupload.php" method="post" enctype="multipart/form-data">
    <br>
<label for="file"><strong>Submit your home work </strong>
    <span style='font-size:30px;'>&#8681;</span>:</label><br>
<input type="file" name="file" id="file" />
<br>

<input type="submit" name="submit" value="Submit" /><br>
<br><br>
                        
                    </div>
                </td>
            </tr>
        </table>
    </div>
    <div>
        <center>
            <table>
                <!-- <tr>
                    <td align='center' style="font-size:180%;color:honeydew;height:200px">
                        <nav><br>
                            <a style="color:mistyrose;" href='proposal_list.php'>SEE OUR PROJECTS</a> | | |
                            <a style="color:mistyrose;" href='aboutus.php'>READ ABOUT US</a></i>
                        </nav>
                    </td>
                </tr> --><br><br><br>
               
            </table>
        </center>
    </div>
   
</body>
