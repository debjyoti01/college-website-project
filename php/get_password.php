<!-- php\get_password.php -->

<?php
$con_db = mysqli_connect("localhost", "root", "", "college_website");
if (mysqli_connect_errno()) {
    die("Correction error while connecting database");
}
$id = $_POST['id'];
$sequrityQuestion = (int)$_POST['sequrityQuestion'];
$sequrityAnswer = $_POST['sequrityAnswer'];
$sql = "select * from sequrity_question where teacher_student_id='$id' and question=$sequrityQuestion and answer='$sequrityAnswer'";
$res = mysqli_query($con_db, $sql);
if (mysqli_num_rows($res) <= 0) {
    echo "<p class='error'>Data Mismatch</p>";
    exit();
}
$sql2 = "select * from teacher_login where teacher_id='$id';";
$res = mysqli_fetch_assoc(mysqli_query($con_db, $sql2));
if ($res > 0) {
    $str = $res['password'];
    echo "<p class='success'>Your Password is : " . $str . "</p>";
    exit();
}
$sql2 = "select * from student_login where student_id='$id';";
$res = mysqli_fetch_assoc(mysqli_query($con_db, $sql2));
$str = $res['password'];
echo "<p class='success'>Your Password is : " . $str . "</p>";
