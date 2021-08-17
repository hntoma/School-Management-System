<?php
$title = "login";
session_start();
if (isset($_COOKIE['flag'])) {
    // header('location: admin_home.php');
}
?>

<body style="background-color: LightGoldenrodYellow;">

    <?php

    $selectedName = $selectedemail = $selectedPhone = $selectedIdx = '';

    // $teachersDataFile = fopen('../model/teachers.json', 'r') or die("Unable to open file");      //json dont nedded
    // $teachersArray = json_decode(fread($teachersDataFile, filesize('../model/teachers.json')));

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if ($_POST["action"] == "select_teacher") {
            $selectedIdx = $_POST["t_index"];
            $selectedName = $teachersArray[$selectedIdx]->name;
            $selectedemail = $teachersArray[$selectedIdx]->email;
            $selectedPhone = $teachersArray[$selectedIdx]->phone;
        }
        // print_r($teachersArray);
        if ($_POST["action"] == "edit_teacher") {

            class Teacher
            {
                public $name;
                public $email;
                public $phone;
            }

            $newTeacher = new Teacher();

            $newTeacher->name = $_POST["name"];
            $newTeacher->email = $_POST["email"];
            $newTeacher->phone = $_POST["phone"];

            // $teachersArray[$selectedIdx] = $newTeacher;
            
            // $editedTeacher = array($_POST['index'] => $newTeacher);
            // $teachersArray = array_replace($teachersArray, $editedTeacher);         //dont need
            // fwrite(fopen('../model/teachers.json', 'w+'), json_encode($teachersArray));
        }
        // if ($_POST["action"] == "del_teacher") {
        //     unset($teachersArray[$_POST["index"]]);
        //     fwrite(fopen('../model/teachers.json', 'w+'), json_encode($teachersArray));
        // }
    }

    ?>

    <!-- <form action='<?php echo $_SERVER["PHP_SELF"]; ?>' method="POST"> -->
        <div style="padding:30px; background-color:LightGreen; ">
            <input type="hidden" name="action" value="select_teacher">
            <select name="t_index" style="width: 30%;" id='teacherSelection'>
                <?php
                // $count = 0;
                // foreach ($teachersArray as $teacher) {
                //     echo '<option name="t_index" value=' . $count . '>' . $teacher->name . '</option>';
                //     $count++;
                // }
                ?>
                


            </select><br>

            <button onclick="getTeacherId()">সিলেক্ট</button>
        </div>
    <!-- </form> -->

    <div style="
            display:flex;
            flex-direction:column;
            width: 30%;
            margin: 32px auto;
        ">
            <label for="name">নাম</label>
            <input type="text" name="name" id="name" style="margin-bottom: 16px ;" value="<?php echo $selectedName; ?>">
            <label for="email">ইমেইল</label>
            <input type="text" name="email" id="email" style="margin-bottom: 16px ;" value="<?php echo $selectedemail; ?>">
            <label for="phone">মোবাইল</label>
            <input type="text" name="phone" id="phone" style="margin-bottom: 16px ;" value="<?php echo $selectedPhone; ?>">
            <button onclick="editTeacher()">পরিবর্তন কনফার্ম</button>
            <br>
            <br>
            <button onclick="deleteTeacher()">শিক্ষক বাতিল করুন</button>
            <p id="status"></p>
    
    <script src='../assets/getTeacher.js'></script>
</body>
<?php

  include('footer.php');
  ?></div>