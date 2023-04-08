<!-- php\contact_massage.php -->

<?php
$con_db = mysqli_connect("localhost", "root", "", "college_website");
if (mysqli_connect_errno()) {
    die("Correction error while connecting database");
}
session_start();
$name = $_POST['name'];
$email = $_POST['email'];
$massage = $_POST['massage'];
$sql = "insert into contact(name,email,massage) values('$name','$email','$massage');";
$res = mysqli_query($con_db, $sql);
echo "<p class='success'>Massage Send Successfully...</p>";
