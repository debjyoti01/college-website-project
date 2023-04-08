<?php
// php\get_class.php
$con_db = mysqli_connect("localhost", "root", "", "college_website");
if (mysqli_connect_errno()) {
    die("Correction error while connecting database");
}
session_start();
$id = $_SESSION['id'];
$sql = "select * from  class_participants where teacher_student_id='$id'";
$res = mysqli_query($con_db, $sql);
if($row = mysqli_num_rows($res)<=0){
    echo 0;
}
$sql = "select * from  class_participants where teacher_student_id='$id'";
$res = mysqli_query($con_db, $sql);
$str = "";
while ($row = mysqli_fetch_assoc($res)) {
    $id = (int)$row['class_id'];
    $sql = "select * from  class_details where id=$id;";
    $res2 = mysqli_query($con_db, $sql);
    $row2 = mysqli_fetch_assoc($res2);
    $className = strtoupper($row2['name']);
    $classDay = strtoupper($row2['day']);
    $classTime = strtoupper($row2['time']);
    $sql = "SELECT COUNT(	teacher_student_id) AS total_participants  FROM class_participants where class_id=$id;";
    $res3 = mysqli_query($con_db, $sql);
    $row3 = mysqli_fetch_assoc($res3);
    $total_participants = $row3['total_participants'];
    $str = "<div class='class-item current-classes' id='$id'>$className<hr><br><p>Total Participants: $total_participants </p><br><hr><br><p>Day : $classDay  </p><p>Time : $classTime</p></div>";
    echo $str;
}
