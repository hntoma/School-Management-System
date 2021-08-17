<?php

include('../controller/database.php');

function insertSubject($name, $class, $division)
{
        $connection = $GLOBALS['conn'];
        $sql = $connection->prepare("INSERT INTO subjects(name, class, division) VALUES (?,?,?)");


        $sql -> bind_param("sss", $name, $class, $division);

        $response = $sql ->execute();
        if($response == true)
        {
            return "Added subject successfully!";
        }
        else
        {
            return "subject addition failed!";
        }
    }
    function getAllSubject() {
        $connection = $GLOBALS['conn'];
        $query = 'SELECT * FROM subjects';
        $result = mysqli_query($connection, $query);
        return $result;
    }

    function editSubject($id, $name, $class, $division) {
        $connection = $GLOBALS['conn'];
        // $query = ;
        $result = mysqli_query($connection, 'UPDATE subjects SET name=\''.$name.'\', class=\''.$class.'\', division=\''.$division.'\' WHERE subjects.id='.(int)$id.'');
        return $result;
    }

    function deleteSubjects($id) {
        $connection = $GLOBALS['conn'];
        // $query = ;
        $result = mysqli_query($connection, 'DELETE FROM subjects WHERE subjects.id='.(int)$id.'');
        return $id;
    }


?>