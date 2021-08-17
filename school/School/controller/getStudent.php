<?php
    include('../model/studentModel.php');
    if($_SERVER["REQUEST_METHOD"] == "GET") {
        $result = getAllStudent();
        $json_data = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $json_data[] = $row;
        }
        echo json_encode($json_data);
    }
?>