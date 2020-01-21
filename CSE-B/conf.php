
<?php
$hostname = 'localhost';
$userName = 'root';
$password ='';
$databasename = 'cseb';
$conn = mysqli_connect($hostname, $userName,$password,$databasename);
if($conn){
	echo" connection successful";
}
else
{
	echo"no connection";
}
?>