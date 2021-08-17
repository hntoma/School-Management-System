<?php

include('../controller/database.php');

function insertTeacher($name, $email, $mobile)
{
        $connection = $GLOBALS['conn'];
        $sql = $connection->prepare("INSERT INTO teachers(name, email, phone) VALUES (?,?,?)");


        $sql -> bind_param("sss", $name, $email, $mobile);

        $response = $sql ->execute();
        if($response == true)
        {
            return "Added user successfully!";
        }
        else
        {
            return "Teacher addition failed!";
        }
    }

    function getAllTeacher() {
        $connection = $GLOBALS['conn'];
        $query = 'SELECT * FROM teachers';
        $result = mysqli_query($connection, $query);
        return $result;
    }

    function editTeacher($id, $name, $phone, $email) {
        $connection = $GLOBALS['conn'];
        // $query = ;
        $result = mysqli_query($connection, 'UPDATE teachers SET name=\''.$name.'\', email=\''.$email.'\', phone=\''.$phone.'\' WHERE teachers.id='.(int)$id.'');
        return $result;
    }

    function deleteTeacher($id) {
        $connection = $GLOBALS['conn'];
        // $query = ;
        $result = mysqli_query($connection, 'DELETE FROM teachers WHERE teachers.id='.(int)$id.'');
        return $result;
    }


?>