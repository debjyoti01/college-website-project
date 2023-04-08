<?php
// php\student-register.php
$con_db = mysqli_connect("localhost", "root", "", "college_website");
if (mysqli_connect_errno()) {
    die("Correction error while connecting database");
}
$fname = $_POST['fname'];
$mname = $_POST['mname'];
$lname = $_POST['lname'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$fatherName = $_POST['fatherName'];
$contactNumber = $_POST['contactNumber'];
$email = $_POST['email'];
$studentId = $_POST['id'];
$password = $_POST['password'];
$stream = $_POST['stream'];
$course = $_POST['course'];
$sequrityQuestion = (int)$_POST['sequrityQuestion'];
$sequrityAnswer = $_POST['sequrityAnswer'];
$sql1 = "select student_id from student_login where student_id='$studentId';";
$res1 = mysqli_query($con_db, $sql1);
$sql2 = "select teacher_id from teacher_login where teacher_id='$studentId';";
$res2 = mysqli_query($con_db, $sql2);
if (mysqli_num_rows($res1) > 0 || mysqli_num_rows($res2) > 0) {
    echo "Student Id already registered";
    exit();
}
$sql2 = "insert into student_details values ('$fname','$mname','$lname','$dob','$gender','$fatherName',$contactNumber,'$email','$studentId','$stream','$course');";
$sql3 = "insert into student_login values ('$studentId','$password');";
$sql4 = "insert into sequrity_question(teacher_student_id,question,answer) values ('$studentId',$sequrityQuestion,'$sequrityAnswer');";
if (mysqli_query($con_db, $sql2) && mysqli_query($con_db, $sql3) && mysqli_query($con_db, $sql4)) {
    echo 1;
} else {
    echo 0;
}
