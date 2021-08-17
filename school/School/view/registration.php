<?php
  $title = "Sign Up";
  include('header.php');
?>

</head>
<body style="background-color: LightGoldenrodYellow;">
  <div style="padding:30px;background-color:LightGreen;">
    <table width="100%">
      <tr>
        
        <td align="center">
          <h1 style= "font-size:200%;color: Cornsilk;">ক্ষুদিরাম বিদ্যালয়</h1>
        </td>
        <td align = "right" width="50%">  
            <label style="font-size: 130%">একাউন্ট আছে?
            <a href="login.php">লগিন পেজ</a></label>
        </td>
      </tr>
    </table>
  </div>
  <div >
    <center>
      <form method="POST" action="../controller/regcheck.php" >
        <fieldset style="width:350px; height: 500px;">
          
          <h2>রেজিস্ট্রেসন</h2>
          <input type="text" name="name" placeholder="নাম" value=""><br>
          <h4></h4>
          <input type="text" name="uname" placeholder="ইউজার আইডি" value="" />   <br>
          <h4></h4>
          <input type="text" name="mail" placeholder="ইমেইল" value="" />   <br>
          <h4></h4>
          <input type="password" name="password" placeholder="গোপন পিন" value=""><br>
          <h4></h4>
          <input type="password" name="cpass" placeholder="কনফার্ম পিন" value=""><br>
          <h4></h4>
          <select name="utype">
              <option name="type" value="librarian">গ্রন্থাগার</option>
              <option name="type" value="student">শিক্ষার্থি</option>
              <option name="type" value="teacher">শিক্ষক</option>
              <option name="type" selected value="admin">এডমিন</option>
          </select><br>
          <h4></h4>
          <input type="submit" name="submit" value="একাউন্ট তৈরি করুন"><br><br><br><br><hr>
          
        </fieldset>
      </form>
    </center>
  </div>
  <div style="background-color: LightGreen;">
  <?php

  include('footer.php');
  ?></div>
