<?php
    $name=$uname=$type=$mail=$password=$cpass="";

    //$newUser = array();

    $name=$uname=$types=$mail=$password=$cpass="";
    $nameError=$unameError=$typesError=$mailError=$passwordError=$cpassError="";

    if($_SERVER["REQUEST_METHOD"] == "POST") 
    {
      if (empty($_POST["name"])) 
      {
        $nameError="Name is Required!";
        print($nameError);
      } 
      else 
      {
        $name = $_POST["name"];
      }
      if (empty($_POST["uname"])) 
      {
        $unameError="User Name is Required!";
        print($unameError);
      } 
      else 
      {
        $uname = $_POST["uname"];
      }
      if (empty($_POST["utype"])) 
      {
        $typesError="Types is Required!";
        print($typesError);
      } 
      else 
      {
        $types = $_POST["utype"];
      }
      if (empty($_POST["mail"])) 
      {
        $mailError="Mail is Required!";
        print($mailError);
      } 
      else 
      {
        $mail = $_POST["mail"];
      }
      if (empty($_POST["password"])) 
      {
        $passwordError="Password is Required!";
        print($passwordError);
      }
      else 
      {
        $password = $_POST["password"];
      }
      if (empty($_POST["cpass"])) 
      {
        $cpassError="cpass is Required!";
        print($cpassError);
      }
      else 
      {
        $cpass = $_POST["cpass"];
      }
    }

    if($_SERVER["REQUEST_METHOD"] == "POST") {
      if(
      empty($nameError) &&
      empty($unameError) &&
      empty($typesError)  &&
      empty($mailError)  &&
      empty($passwordError)  &&
      empty($cpassError)
      ) 
      {
        $newUser = array(
          "name"=>$name, 
          "uname"=>$uname,
          "type"=>$types,
          "mail"=>$mail,
          "password"=>$password
        );

        //print_r($newUser);

        $json_data = json_encode($newUser);
        $data_file = fopen("../model/profiles.json", "r+") or die("Unable to opne file!");
        $existing_data = fread($data_file, filesize("../model/profiles.json"));
        $existing_array = json_decode($existing_data);
        array_push($existing_array, $newUser);
        fwrite(fopen("../model/profiles.json", "w+"), json_encode($existing_array));
        print_r("Save Success!");
        fclose($data_file);
      }
    }
?>
