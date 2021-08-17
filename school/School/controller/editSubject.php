<?php
    include('../model/teacherModel.php');
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $result = editSubject($_POST['id'], $_POST['name'], $_POST['class'], $_POST['division']);
        echo $result;
    }
?>