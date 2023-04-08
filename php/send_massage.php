<!-- php\send_massage.php -->

<?php
$con_db = mysqli_connect("localhost", "root", "", "college_website");
if (mysqli_connect_errno()) {
    die("Correction error while connecting database");
}
session_start();
$id = $_SESSION['id'];
$text = $_POST['text'];
$classId = (int)$_POST['classId'];
$sql = "insert into massage(student_teacher_id,class_id,date,time,text) values('$id',$classId,CURRENT_DATE,CURRENT_TIME,'$text');";
$res = mysqli_query($con_db, $sql);
