<!-- php\get_student_attendance.php -->

<?php
$con_db = mysqli_connect("localhost", "root", "", "college_website");
if (mysqli_connect_errno()) {
    die("Correction error while connecting database");
}
session_start();
$studentId=$_SESSION['id'];
$classId=(int)$_POST['classId'];
$sql1 = "select * from  student_attendance where class_id=$classId and student_id='$studentId'";
$res1 = mysqli_query($con_db, $sql1);
$str = "<table class='dashboard-table'><tr><th>Date</th><th>Status</th></tr>";
while ($row1 = mysqli_fetch_assoc($res1)) {
    $str.="<tr><td>{$row1['date']}</td><td>{$row1['status']}</td></tr>";
}
$str.="</table>";
echo $str;

