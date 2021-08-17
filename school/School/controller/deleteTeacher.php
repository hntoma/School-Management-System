<?php
    include('../model/teacherModel.php');
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $result = deleteTeacher($_POST['id']);
        echo $result;
    }
?>