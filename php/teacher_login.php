<?php
// php\teacher_login.php
$con_db = mysqli_connect("localhost", "root", "", "college_website");
if (mysqli_connect_errno()) {
    die("Correction error while connecting database");
}

$id = $_POST['id'];
$password = $_POST['password'];
$sql = "select * from teacher_login where teacher_id='$id' and password='$password';";
$res = mysqli_query($con_db, $sql);
if (mysqli_num_rows($res) > 0) {
    session_start();
    $_SESSION['id'] = $id;
    echo 1;
} else {
    echo 0;
}
