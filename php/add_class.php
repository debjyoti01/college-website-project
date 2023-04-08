<!-- php\add_class.php -->

<?php
    $con_db=mysqli_connect("localhost","root","","college_website");
    if (mysqli_connect_errno()) {
        die( "Correction error while connecting database");
    }
    session_start();
    $teacherId=$_SESSION['id'];
    $className=strtoupper($_POST['className']);
    $classDay=strtoupper($_POST['classDay']);
    $classTime=$_POST['classTime'];
    $sql="select * from class_details where name='$className' and teacher_id='$teacherId'";
    $res=mysqli_query($con_db,$sql);
    if(mysqli_fetch_row($res) >0){
        echo "<p class='error'>Class already Added against Your Id</p>";
        exit();
    }
    $sql1="insert into class_details(name,teacher_id,day,time) values('$className','$teacherId','$classDay','$classTime');";
    mysqli_query($con_db,$sql1);
    $sql2="select * from class_details where teacher_id='$teacherId' order by id desc limit 1; ";
    $res=mysqli_fetch_assoc(mysqli_query($con_db,$sql2));
    $classId=(int)$res['id'];
    $sql3="insert into class_participants(class_id,	teacher_student_id) values($classId,'$teacherId');";
    if(mysqli_query($con_db,$sql3)){
        echo "<p class='success'>Class Added Succesfully</p>";
    }
    else{
        echo "<p class='error'>Class can't add</p>";
    }
?>