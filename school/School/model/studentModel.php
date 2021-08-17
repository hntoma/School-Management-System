<?php

include('../controller/database.php');

function insertStudent($name, $email, $mobile, $class)
{
        $connection = $GLOBALS['conn'];
        $sql = $connection->prepare("INSERT INTO students(name, email, phone, class) VALUES (?,?,?,?)");


        $sql -> bind_param("ssss", $name, $email, $mobile, $class);

        $response = $sql ->execute();
        if($response == true)
        {
            return "Added user successfully!";
        }
        else
        {
            return "Student addition failed!";
        }
    }
    function getAllStudent() {
        $connection = $GLOBALS['conn'];
        $query = 'SELECT * FROM students';
        $result = mysqli_query($connection, $query);
        return $result;
    }

    function editStudent($id, $name, $phone, $email, $class) {
        $connection = $GLOBALS['conn'];
        // $query = ;
        $result = mysqli_query($connection, 'UPDATE students SET name=\''.$name.'\', email=\''.$email.'\', phone=\''.$phone.'\',class=\''.$class.'\' WHERE students.id='.(int)$id.'');
        return $result;
    }

    function deleteStudent($id) {
        $connection = $GLOBALS['conn'];
        // $query = ;
        $result = mysqli_query($connection, 'DELETE FROM students WHERE students.id='.(int)$id.'');
        return $id;
    }


?>