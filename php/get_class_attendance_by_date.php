<!-- php\get_class_attendance_by_date.php -->

<?php
$con_db = mysqli_connect("localhost", "root", "", "college_website");
if (mysqli_connect_errno()) {
    die("Correction error while connecting database");
}
$classId = (int)$_POST['classId'];
$classDate = $_POST['classDate'];
$sql1 = "select * from  student_attendance where class_id=$classId and date='$classDate';";
$res1 = mysqli_query($con_db, $sql1);
$str = "<table class='dashboard-table detailed-attendence'><caption>Date : $classDate</caption><tr><th>Student Id</th><th>Student Name</th><th>Status</th></tr>";
while ($row1 = mysqli_fetch_assoc($res1)) {
    $sql2 = "select * from  student_details where student_id='{$row1['student_id']}'";
    $res2 = mysqli_query($con_db, $sql2);
    $row2 = mysqli_fetch_assoc($res2);
    $name=(ucfirst($row2['fname']).'  '.ucfirst($row2['mname']).'  '.ucfirst($row2['lname']));
    $str .= "<tr><td>{$row1['student_id']}</td><td>$name</td><td>{$row1['status']}</td></tr>";
}
$str .= "</table>";
echo $str;
