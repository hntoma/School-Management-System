<?php
    include('../model/subjectModel.php');
  if($_SERVER["REQUEST_METHOD"] == "POST") {
    $subjectName = $_POST['name'];
    $classes = $_POST['class'];
    $div = $_POST['div'];

    if(preg_match("/^[a-z A-Z]+$/", $subjectName))
    {
        
    }
    else
    {
        echo "Name can only be alphabets";
        return;
    }
    if(preg_match("/^[a-z A-Z]+$/", $classes))
    {
        
    }
    else
    {
        echo "class can only be alphabet";
        return;
    }
    if(preg_match("/^[a-z A-Z]+$/", $div))
    {
        
    }
    else
    {
        echo "div can only be alphabet";
        return;
    }

    echo insertSubject($subjectName, $classes, $div);
  }

?>