<?php
    include('../model/studentModel.php');
  if($_SERVER["REQUEST_METHOD"] == "POST") {
    $studentsName = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['mobile'];
    $classes = $_POST['class'];

    if(preg_match("/^[a-z A-Z]+$/", $studentsName))
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

    echo insertStudent($studentsName, $email, $phone, $classes);
  }

?>