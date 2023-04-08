<!-- php\get_massage.php -->

<?php
$con_db = mysqli_connect("localhost", "root", "", "college_website");
if (mysqli_connect_errno()) {
    die("Correction error while connecting database");
}
session_start();
$id = $_SESSION['id'];
$classId = $_POST['classId'];
$sql = "select * from massage where class_id='$classId' order by date asc,time asc;";
$res = mysqli_query($con_db, $sql);
$str = "";
while ($row = mysqli_fetch_assoc($res)) {
    if ($id == $row['student_teacher_id']) {
        $sql = "select * from teacher_details where teacher_id='{$row['student_teacher_id']}';";
        $res2 = mysqli_query($con_db, $sql);
        if (mysqli_num_rows($res2) > 0)
            $row2 = mysqli_fetch_assoc($res2);
        else {
            $sql = "select * from student_details where student_id='{$row['student_teacher_id']}';";
            $res2 = mysqli_query($con_db, $sql);
            $row2 = mysqli_fetch_assoc($res2);
        }
        $str = "<div class='massage self' ><h5 class='chat-person-name'>{$row2['fname']}</h5><p>{$row['text']}</p><p class='chat-date-time'>{$row['date']} {$row['time']}</p></div><div class='clear'></div>";
    } else {
        $sql = "select * from teacher_details where teacher_id='{$row['student_teacher_id']}';";
        $res2 = mysqli_query($con_db, $sql);
        if (mysqli_num_rows($res2) > 0)
            $row2 = mysqli_fetch_assoc($res2);
        else {
            $sql = "select * from student_details where student_id='{$row['student_teacher_id']}';";
            $res2 = mysqli_query($con_db, $sql);
            $row2 = mysqli_fetch_assoc($res2);
        }
        $str = "<div class='massage other' ><h5 class='chat-person-name'>{$row2['fname']}</h5><p>{$row['text']}</p><p class='chat-date-time'>{$row['date']} {$row['time']}</p></div><div class='clear'></div>";
    }
    echo $str;
}
