<?php

    $conn=  mysqli_connect("localhost", "root", "", "studentportal");
        if(!$conn)
       {
           die('not connected');
       }


else{

if($_SERVER['REQUEST_METHOD']==="POST")
{
    if(empty($_POST['Search'])){
        echo"<h4 stlye='colour:red'>Search Field Empty</h4>";
    }
  }
if(isset($_POST['Search']))
{
 $searchkey = $_POST['Search'];
    $sql2 = "SELECT * FROM consult WHERE faculty LIKE '%$searchkey%'";
 }

 else
 {
     $sql2 = "SELECT * FROM consult";

}
}

    $result2 = mysqli_query($conn , $sql2);

  while( $row = mysqli_fetch_assoc($result2) ):
  ?>
   <table id="table" border=".5" width = "3%" height = "5%">
  <tr>
              <td align="center"><?php echo $row['faculty'] ?></td>
              <td align="center"><?php echo $row['day'] ?></td>
              <td align="center"><?php echo $row['time'] ?></td>
          </tr>
<?php endwhile; ?>