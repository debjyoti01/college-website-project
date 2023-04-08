<!-- php\get-course.php -->

<?php
$con_db = mysqli_connect("localhost", "root", "", "college_website");
if (mysqli_connect_errno()) {
    die("Correction error while connecting database");
}

$stream = $_POST['stream'];
$sql = "select * from dept_details where stream='$stream';";
$res = mysqli_query($con_db, $sql);
$str = "";
while ($row = mysqli_fetch_assoc($res)) {
    $name = strtoupper($row['dept_name']);
    $str = "<option value='{$row['dept_code']}' class='added-course'>{$name}</option>";
    echo $str;
}
