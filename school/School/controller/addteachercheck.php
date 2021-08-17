<?php
    include('../model/teacherModel.php');
  if($_SERVER["REQUEST_METHOD"] == "POST") {
    $teachersName = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['mobile'];

    if(preg_match("/^[a-z A-Z]+$/", $teachersName))
    {
        
    }
    else
    {
        echo "Name can only be alphabets";
        return;
    }
    if(preg_match("/^[0-9]+$/", $phone))
    {
        
    }
    else
    {
        echo "Mobile can only be numeric";
        return;
    }

    echo insertTeacher($teachersName, $email, $phone);
  }

?>