<?php
    include('../model/teacherModel.php');
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $result = editTeacher($_POST['id'], $_POST['name'], $_POST['phone'], $_POST['email']);
        echo $result;
    }
?>