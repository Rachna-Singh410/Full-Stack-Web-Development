
<?php
$hostname = 'localhost';
$userName = 'root';
$password ='';
$databasename = 'cseb';
$conn = mysqli_connect($hostname, $userName,$password,$databasename);
if($conn){
	echo" connection successfull<br>";
}
else
{
	echo"no connection";
}
if(isset($_POST['btn']))
{
	$names = $_POST['name'];
$ages = $_POST['age'];
$cont = $_POST['contact'];
$mail = $_POST['email'];

	$qy = "insert into users(name , age,contact,email) values ('$names', '$ages', '$cont','$mail')";
$qt=mysqli_query($conn, $qy);
if($qt)
{
    echo "<script>alert('registeration Has been completed!')</script> ";
    echo "<script>window.open('files.php','_self')</script>";
}
}

?>