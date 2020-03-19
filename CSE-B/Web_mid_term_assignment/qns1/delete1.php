<?php
 include 'config1.php';
 $enroll = $_GET['enroll'];

 $q = "DELETE FROM `info2` WHERE enroll = $enroll " ;

 mysqli_query($conn , $q);
 header('location:show.php');


?>