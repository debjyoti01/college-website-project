<!-- php\get_student_list_for_attendence.php -->

<?php
$con_db = mysqli_connect("localhost", "root", "", "college_website");
if (mysqli_connect_errno()) {
    die("Correction error while connecting database");
}
session_start();
$id = $_SESSION['id'];
$className = strtoupper($_POST['className']);
$sql = "select * from class_details where teacher_id='$id' and name='$className';";
$res = mysqli_query($con_db, $sql);
if (($row = mysqli_fetch_assoc($res)) <= 0) {
    echo "<p class='error'>Class not Found against You Id</p>";
    exit();
}
$classId = (int)$row['id'];
$sql = "select * from class_participants where class_id=$classId and teacher_student_id!='$id'";
$res = mysqli_query($con_db, $sql);
if (($row = mysqli_fetch_assoc($res)) <= 0) {
    echo "<p class='error'>No new Student found againts this course</p>";
    exit();
}
$res = mysqli_query($con_db, $sql);
$str = "<table class='dashboard-table' id='student-list'><tr><th>Student ID</th><th>Name</th><th>Present?</th></tr>";
while ($row = mysqli_fetch_assoc($res)) {
    $sql2="select * from student_details where student_id='{$row['teacher_student_id']}'";
    $res2 = mysqli_query($con_db, $sql2);
    $row2 = mysqli_fetch_assoc($res2);
    $student_id = $row2['student_id'];
    $student_name =(ucfirst($row2['fname']).'  '.ucfirst($row2['mname']).'  '.ucfirst($row2['lname']));
    $str .= "<tr id='$student_id'><td>$student_id</td><td>$student_name</td><td><button class='student-present' value='$student_id'>Present</button><button class='student-absent' value='$student_id'>Absent</button></td></tr>";
}
$str .= "</table>";
echo $str;
