<?php
include('config1.php');
?>


<?php 
if (isset($_POST['btn'])){
 echo "Dear, ".$_POST['username']." You are Welcome.".'<br>';
 $username = $_POST['username'];
 $age = $_POST['age'];
 $course = $_POST['course'];
 $branch = $_POST['branch'];
 $contact = $_POST['contact'];
 $email = $_POST['email'];
 $enroll = $_POST['enroll']; 
    
    $sql  = "INSERT INTO `info2` (name, age,course,branch, contact, email,enroll) 
    VALUES ('$username', '$age','$course','branch', '$contact', '$email','$enroll')";
    mysqli_query($conn, $sql);
    header("Location:assignment_add.php");
}
else{
    echo "Welcome Guest";
}
?>