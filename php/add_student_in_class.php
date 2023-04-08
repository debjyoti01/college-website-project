<!-- php\add_student_in_class.php -->

<?php
    $con_db=mysqli_connect("localhost","root","","college_website");
    if (mysqli_connect_errno()) {
        die( "Correction error while connecting database");
    }
    session_start();
    $id=$_SESSION['id'];
    $className=strtoupper($_POST['className']);
    $studentId=$_POST['id'];
    $sql="select * from class_details where teacher_id='$id' and name='$className';";
    $res=mysqli_query($con_db,$sql);
    if(mysqli_fetch_row($res) <=0){
        echo "<p class='error-in-student-add'>Class not Found against You Id</p>";
        exit();
    }
    $sql="select * from class_details where teacher_id='$id' and name='$className';";
    $res=mysqli_query($con_db,$sql);
    $row=mysqli_fetch_array($res);
    $sql="insert into class_participants(class_id,teacher_student_id) values({$row['id']},'$studentId');";
    if(mysqli_query($con_db,$sql))
    {
        echo  "<p class='success'>Participant Added succesfully</p>";
    }
    else{
        echo  "<p class='error'>Could not add Added Participants</p>";
    }
?>