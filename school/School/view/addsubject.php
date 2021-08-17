<?php 
  include('sessionCheck.php'); 
?>
<html>

<head>
  <title>Add Subject</title>
</head>

<body style="background-color:LightGoldenrodYellow">

  <form action="" method="" onsubmit="return addSubjectCheck()">
    <br>
    <div align="center">
      <h1 style="color:Black"><u><b>পাঠ্য বিষয়</b></u></h1>
      <table>
        <tr>
        <tr>
          <td> <br> </td>
        </tr>
        <tr>
          <td> <br> </td>
        </tr>
        <td><label for="su_name">বিষয়ের নাম: <span style="color:red;">*</span> </label></td>
        <td><input type="text" name="su_name" id="su_name"></td>
        <td><label id="nameHint"></label></td>
        <br>
        </tr>
        <tr>
          <td> <br> </td>
        </tr>
        <tr>
          <td><label for="su_class">শ্রেণী: <span style="color:red;">*</span> </label></td>
          <td><input type="text" name="su_class" id="su_class"></td>
          <td><label id="classHint"></label></td>
          <br>
        </tr>
        <tr>
          <td> <br> </td>
        </tr>
        <tr>
          <td><label for="su_div">বিভাগ <span style="color:red;">*</span> </label></td>
          <td><input type="text" name="su_div" id="su_div"></td>
          <td><label id="divHint"></label></td>
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
  
  <script src="../assets/addSubject.js"></script>

</body>

</html>
<?php

  include('footer.php');
  ?></div>