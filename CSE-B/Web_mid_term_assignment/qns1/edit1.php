<?php
include('config1.php');
?>
<?php $enroll= $_GET['enroll'];
?>

<?php
    $sql = "SELECT * FROM `info2` WHERE enroll='$enroll'";
    $result = mysqli_query($conn, $sql);
    $data = $result->fetch_assoc();
    $username = $data['name'];
    $age = $data['age'];
    $course = $data['course'];
    $branch = $data['branch'];
    $contact = $data['contact'];
    $email = $data['email'];
     
?>

<?php
if(isset($_POST['btn'])){
    $username = $_POST['username'];
    $age = $_POST['age'];
      $course = $_POST['course'];
 $branch = $_POST['branch'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];

    $sql = "UPDATE `info2` SET name='$username', age='$age',course='$course',branch='$branch', contact='$contact', email='$email'WHERE enroll='$enroll'";
    if(mysqli_query($conn, $sql)){
        echo "Data updated successfully...";
    }
    else{
        echo "Updation Failed...Try Again";
    }
}
else{
    echo "Please click update button";
}
?>

<html>
    <head>
    <title>Input Form</title>
    </head>
    
    <body>
    <form action="show.php?id=<?php echo $id ?>" method="post">
        Enrollment No.:<input type="text" name="enrollment" value="<?php echo $enroll; ?>"><br>
      Name: <input type="text" name="username" value="<?php echo $username; ?>"><br>
      Age:<input type="text" name="age"  value="<?php echo $age; ?>" placeholder="Enter Age"><br>
      Course:<input type="text" name="course" value="<?php echo $course; ?>"><br>
      Branch:<input type="text" name="branch" value="<?php echo $branch; ?>"><br>
      Contact:<input type="text" name="contact" value="<?php echo $contact; ?>" placeholder="Enter Age"><br>
      Email: <input type="email" name="email" value="<?php echo $email; ?>" placeholder="Enter Age"><br>
      <input type="submit" name='btn' value="Update">
    </form>
    </body>
</html>