<!-- php\get_class_attendance.php -->

<?php
$con_db = mysqli_connect("localhost", "root", "", "college_website");
if (mysqli_connect_errno()) {
    die("Correction error while connecting database");
}
$classId=(int)$_POST['classId'];
$sql1 = "select count(*) as present, date from  student_attendance where class_id=$classId and status='Present' group by date order by date desc;";
$res1 = mysqli_query($con_db, $sql1);
$str = "<table class='dashboard-table'><tr><th>Date</th><th>Total Student Present</th><th>Total Student Absent</th></tr>";
while ($row1 = mysqli_fetch_assoc($res1)) {
    $totalPresent=$row1['present'];
    $date=$row1['date'];
    $sql2 = "select count(*) as absent from  student_attendance where class_id=$classId and status='Absent' and date='$date';";
    $res2 = mysqli_query($con_db, $sql2);
    $row2 = mysqli_fetch_assoc($res2);
    $totalAbsent=$row2['absent'];
    $str.="<tr class='class-date' id='$date'><td id='$date'>$date</td><td>$totalPresent</td><td>$totalAbsent</td></tr>";
}
$str.="</table>";
echo $str;

