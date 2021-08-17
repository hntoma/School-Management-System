<?php
$title = "login";
session_start();
if (isset($_COOKIE['flag'])) {
    // header('location: admin_home.php');
}
?>

<body style="background-color: LightGoldenrodYellow;">

    <?php

    $selectedName = $selectedemail = $selectedPhone =$selectedclass = $selectedIdx = '';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if ($_POST["action"] == "select_student") {
            $selectedIdx = $_POST["t_index"];
            $selectedName = $studentsArray[$selectedIdx]->name;
            $selectedemail = $studentsArray[$selectedIdx]->email;
            $selectedPhone = $studentsArray[$selectedIdx]->phone;
            $selectedPhone = $studentsArray[$selectedIdx]->class;
        }
        // print_r($studentsArray);
        if ($_POST["action"] == "edit_student") {

            class Student
            {
                public $name;
                public $email;
                public $phone;
                public $class;
            }

            $newStudent = new Student();

            $newStudent->name = $_POST["name"];
            $newStudent->email = $_POST["email"];
            $newStudent->phone = $_POST["phone"];
            $newSudent->class = $_POST["class"];

            
        }
      
    }

    ?>

    <!-- <form action='<?php echo $_SERVER["PHP_SELF"]; ?>' method="POST"> -->
        <div style="padding:30px; background-color:LightGreen; ">
            <input type="hidden" name="action" value="select_studentr">
            <select name="t_index" style="width: 30%;" id='studentSelection'>
                <?php
                // $count = 0;
                // foreach ($studentsArray as $teacher) {
                //     echo '<option name="t_index" value=' . $count . '>' . $teacher->name . '</option>';
                //     $count++;
                // }
                ?>
                


            </select><br>

            <button onclick="getStudentId()">সিলেক্ট</button>
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
            <label for="phone">শ্রেণি</label>
            <input type="text" name="class" id="class" style="margin-bottom: 16px ;" value="<?php echo $selectedclass; ?>">
            <button onclick="editStudent()">পরিবর্তন কনফার্ম</button>
            <br>
            <br>
            <button onclick="deleteStudent()">শিক্ষার্থী বাতিল করুন</button>
            <p id="status"></p>
    
    <script src='../assets/getStudent.js'></script>
</body>
<?php

  include('footer.php');
  ?></div>