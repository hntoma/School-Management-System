<?php 
  include('sessionCheck.php'); 
?>
<html>

<head>
  <title>Add Teacher</title>
</head>

<body style="background-color:LightGoldenrodYellow">

  <form action="" method="" onsubmit="return addTeacherCheck()">
    <br>
    <div align="center">
      <h1 style="color:Black"><u><b>Teacher's Info</b></u></h1>
      <table>
        <tr>
        <tr>
          <td> <br> </td>
        </tr>
        <tr>
          <td> <br> </td>
        </tr>
        <td><label for="t_name">শিক্ষকের নাম: <span style="color:red;">*</span> </label></td>
        <td><input type="text" name="t_name" id="t_name"></td>
        <td><label id="nameHint"></label></td>
        <br>
        </tr>
        <tr>
          <td> <br> </td>
        </tr>
        <tr>
          <td><label for="t_email">ইমেইল: <span style="color:red;">*</span> </label></td>
          <td><input type="email" name="t_email" id="t_email" placeholder="@anything.com"></td>
          <td><label id="emailHint"></label></td>
          <br>
        </tr>
        <tr>
          <td> <br> </td>
        </tr>
        <tr>
          <td><label for="t_phone">মোবাইল: <span style="color:red;">*</span> </label></td>
          <td><input type="text" name="t_phone" id="t_phone"></td>
          <td><label id="mobileHint"></label></td>
          <br>
        </tr>
        <tr>
          <td><label id="submitHint"></label></td>
        </tr>
      </table>
      <br>
      <br>

      <input style="margin-left:100px;" type="reset" name="btn_reset" class="btn btn-info" value="রিসেট">


      <button style="margin-left:130px;" type="submit" name="button" id="button" class="btn btn-info" value="button">যোগ করুন</button>

    </div>

  </form>

  <div align="right">
    <button style="margin:30px; margin-right:20%;" type="submit" name="button" class="btn btn-info" value="button" onclick="window.location.href = 'admin_home.php';">এডমিন পেজে যান</button>
  
  <script src="../assets/scripts.js"></script>

</body>

</html>
<?php

  include('footer.php');
  ?></div>