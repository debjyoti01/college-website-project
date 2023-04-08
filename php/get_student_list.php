<!-- php\get_student_list.php -->

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
$stream = $_POST['stream'];
$course = $_POST['course'];
$sql = "select * from student_details where stream='$stream' and subject='$course' and student_id not in (SELECT teacher_student_id from class_participants where class_id=$classId);";
$res = mysqli_query($con_db, $sql);
if (($row = mysqli_fetch_assoc($res)) <= 0) {
    echo "<p class='error'>No new Student found againts this course</p>";
    exit();
}
$res = mysqli_query($con_db, $sql);
$str = "<table id='student-list' class='dashboard-table'><tr><th>Student ID</th><th>Name</th><th>Action</th></tr>";
while ($row = mysqli_fetch_assoc($res)) {
    $student_id = $row['student_id'];
    $student_name = (ucfirst($row['fname']).'  '.ucfirst($row['mname']).'  '.ucfirst($row['lname']));
    $str .= "<tr id='$student_id'><td>$student_id</td><td>$student_name</td><td><button class='add-student'  value='$student_id'>ADD</button></td></tr>";
}
$str .= "</table>";
echo $str;
