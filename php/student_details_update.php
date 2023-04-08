<!-- php\student_details_update.php -->

<?php
$con_db = mysqli_connect("localhost", "root", "", "college_website");
if (mysqli_connect_errno()) {
    die("Correction error while connecting database");
}
$contactNumber = (int)$_POST['contactNumber'];
$email = $_POST['email'];
session_start();
$id = $_SESSION['id'];
$sql = "update student_details set contact_number=$contactNumber, email='$email' where student_id='$id';";
if (mysqli_query($con_db, $sql)) {
    echo "<p class='success'>Details Updated</p>";
} else {
    echo "<p class='error'>Error Occur</p>";
}
?>