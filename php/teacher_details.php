<!-- php\teacher_details.php -->

<?php
$con_db = mysqli_connect("localhost", "root", "", "college_website");
if (mysqli_connect_errno()) {
    die("Correction error while connecting database");
}
session_start();
$id = $_SESSION['id'];
$sql = "select * from teacher_details where teacher_id ='$id';";
$res = mysqli_query($con_db, $sql);
$row = mysqli_fetch_assoc($res);
$name = (ucfirst($row['fname']) . '  ' . ucfirst($row['mname']) . '  ' . ucfirst($row['lname']));
$dob = strtoupper($row['dob']);
$fatherName = strtoupper($row['father_name']);
$gender = strtoupper($row['gender']);
$dept = strtoupper($row['dept']);
$stream = strtoupper($row['stream']);
$str = "<table class='teacher-details'><tr><td class='subject'>Name :</td><td>{$name}</td><td class='subject'>Date of Birth :</td><td>{$dob}</td></tr><tr><td class='subject'>Father Name :</td><td>{$fatherName}</td><td class='subject'>Gender :</td><td>{$gender}</td></tr><tr><td class='subject'>Contact Number :</td><td><input id='update-contact-number' type='number' value={$row['contact_number']}></td><td class='subject'>Email :</td><td><input id='update-email' type='email' value='{$row['email']}'></td></tr><tr><td class='subject'>Stream :</td><td>{$stream}</td><td class='subject'>Department :</td><td>{$dept}</td>";
echo $str;
?>