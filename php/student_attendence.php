<!-- php\student_attendence.php -->

<?php
$con_db = mysqli_connect("localhost", "root", "", "college_website");
if (mysqli_connect_errno()) {
    die("Correction error while connecting database");
}
session_start();
$id = $_SESSION['id'];
$className = strtoupper($_POST['className']);
$studentId = $_POST['studentId'];
$className = strtoupper($_POST['className']);
$status = $_POST['status'];
$sql = "select * from class_details where teacher_id='$id' and name='$className';";
$res = mysqli_query($con_db, $sql);
$row = mysqli_fetch_assoc($res);
$classId = (int)$row['id'];
$sql = "insert into student_attendance(class_id,student_id,date,time,status) values($classId,'$studentId',CURRENT_DATE,CURRENT_TIME,'$status');";
if (mysqli_query($con_db, $sql)) {
    echo  "<p class='success'>Attendance done succesfully for Student Id : $studentId</p>";
} else {
    echo  "<p class='error'>Could not add take attendance</p>";
}
