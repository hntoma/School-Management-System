<?php
    include('../model/studentModel.php');
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $result = editStudent($_POST['id'], $_POST['name'], $_POST['phone'], $_POST['email'], $_POST['class']);
        echo $result;
    }
?>