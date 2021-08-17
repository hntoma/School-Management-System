<?php
    include('../model/studentModel.php');
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $result = deleteStudent($_POST['id']);
        echo $result;
     }
?>