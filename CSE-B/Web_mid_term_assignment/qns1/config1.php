<?php
$hostName = 'localhost';
$userName = 'root';
$password = '';
$databaseName = 'mid';
    
$conn = mysqli_connect($hostName, $userName, $password, $databaseName);
if ($conn){
}
else{
    echo "Connection failed!!" + mysqli_connect_error();
}
?>