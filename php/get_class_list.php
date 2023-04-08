<?php
// php\get_class_list.php
$con_db = mysqli_connect("localhost", "root", "", "college_website");
if (mysqli_connect_errno()) {
    die("Correction error while connecting database");
}
session_start();
$id = $_SESSION['id'];
$sql = "select * from  class_details where teacher_id='$id';";
$res = mysqli_query($con_db, $sql);
$str = "<label>Chose Class Name : </label>&nbsp;&nbsp;<select id='class-name'>";
if(mysqli_num_rows($res)<=0){
    $str .= "<option class='class-name' value='null'>No class available</option>";
    $str .= "</select>";
}
$sql = "select * from  class_details where teacher_id='$id';";
$res = mysqli_query($con_db, $sql);
while ($row = mysqli_fetch_assoc($res)) {
    $class_name = strtoupper($row['name']);
    if ($class_name != "")
        $str .= "<option class='class-name' value='$class_name'>$class_name</option>";
}
$str .= "</select>";
echo $str;
?>