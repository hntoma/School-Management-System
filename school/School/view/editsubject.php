<?php
$title = "login";
session_start();
if (isset($_COOKIE['flag'])) {
    // header('location: admin_home.php');
}
?>

<body style="background-color: LightGoldenrodYellow;">

    <?php

    $selectedName = $selectedclass = $selecteddivision = $selectedIdx = '';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if ($_POST["action"] == "select_subject") {
            $selectedIdx = $_POST["t_index"];
            $selectedName = $subjectsArray[$selectedIdx]->name;
            $selectedclass = $subjectsArray[$selectedIdx]->class;
            $selecteddivision = $subjectsArray[$selectedIdx]->division;
          
        }
        // print_r($subjectsArray);
        if ($_POST["action"] == "edit_subject") {

            class subject
            {
                public $name;
                public $class;
                public $division;
               
            }

            $newsubject = new subject();

            $newsubject->name = $_POST["name"];
            $newsubject->class = $_POST["class"];
            $newsubject->division = $_POST["division"];
           

            
        }
      
    }

    ?>

    <!-- <form action='<?php echo $_SERVER["PHP_SELF"]; ?>' method="POST"> -->
        <div style="padding:30px; background-color:LightGreen; ">
            <input type="hidden" name="action" value="select_subject">
            <select name="t_index" style="width: 30%;" id='subjectSelection'>
                <?php
                // $count = 0;
                // foreach ($subjectsArray as $teacher) {
                //     echo '<option name="t_index" value=' . $count . '>' . $teacher->name . '</option>';
                //     $count++;
                // }
                ?>
                


            </select><br>

            <button onclick="getSubjectId()">সিলেক্ট</button>
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
            <label for="class">শ্রেণী</label>
            <input type="text" name="class" id="classes" style="margin-bottom: 16px ;" value="<?php echo $selectedclass; ?>">
            <label for="division">বিভাগ</label>
            <input type="text" name="division" id="division" style="margin-bottom: 16px ;" value="<?php echo $selecteddivision; ?>">
            <button onclick="editSubject()">পরিবর্তন কনফার্ম</button>
            <br>
            <br>
            <button onclick="deleteSubject()">বিষয় বাতিল করুন</button>
            <p id="status"></p>
    
    <script src='../assets/getSubject.js'></script>
</body>
<?php

  include('footer.php');
  ?></div>