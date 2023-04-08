<!-- php\teacher_details_update.php -->

<?php
$con_db = mysqli_connect("localhost", "root", "", "college_website");
if (mysqli_connect_errno()) {
    die("Correction error while connecting database");
}
$contactNumber = (int)$_POST['contactNumber'];
$email = $_POST['email'];
session_start();
$id = $_SESSION['id'];
$sql = "update teacher_details set contact_number=$contactNumber, email='$email' where teacher_id='$id';";
if (mysqli_query($con_db, $sql)) {
    echo "Details Updated";
} else {
    echo "Error Occur";
}
