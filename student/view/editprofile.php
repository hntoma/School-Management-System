<?php
  $title = "Edit Profile";
  include('header.php');
  $name = $_COOKIE['name'];
if ($_COOKIE['flag'] == true) {
  $myfile = fopen('../data/donors.json', 'r');
    $data = fread($myfile, filesize('../data/donors.json'));
    fclose($myfile);
  $all_donors = json_decode($data,true);

  for($i = 0; $i < sizeof($all_donors); $i++) {
    if($all_donors[$i]['name'] == $name){
      $index = $i;}
  }

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
  <div >
    <center>
      <form method="POST" action="../controller/editprofilecheck.php" >
        <fieldset style="width:350px">
          <!-- <legend align ="center"><strong>LOGIN</strong></legend> -->
          <h2>Edit Profile</h2>
          <input type="text" name="name" placeholder="Name" value=""><br>
          <h4></h4>
          <input type="text" name="uname" placeholder="User Name" value="" />   <br>
          <h4></h4>
          <input type="text" name="email" placeholder="Email" value="" />   <br>
          <h4></h4>
           <select name="gender" style="width:162px; font-size: 14px; height:22px;">
              <option name="m" value="Male">Male</option>
              <option name="f" value="Female">Female</option>
              <option name="o" selected value="Other">Other</option>
          </select><br>
          <h4></h4>
          <input type="date" name="dob" placeholder="Date Of Birth" value="" />   <br>
          <h4></h4>
          <input type="text" name="teleno" placeholder="Telephone No" value="+880" />   <br>
          <h4></h4>
          <input type="text" name="address" placeholder="Address" value="" />   <br>
          <h4></h4>
          <input type="submit" name="submit" value="Edit Profile"><br><hr>
        </fieldset>
      </form>
    </center>
  </div>
 
  <?php }
  include('footer.php');
  ?>

