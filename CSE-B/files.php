<?php
include('conf.php');
?>

<html>
<head>
 <title>first page</title>
         <link rel="stylesheet" type="text/css" href="pii.css">
<body>
           
          

<form action="conf.php" method="post">
<p>Username</p>
<input type="text" name="name"  placeholder="Enter Username">
<p>age</p>
<input type="text" name="age"  placeholder="Enter age">
<p>Contact</p>
<input type="text" name="contact"  placeholder="contact no.">
<p>Email</p>
<input type="text" name="email"  placeholder="Enter email id">

<input type="submit" name="btn" value="submit">
</form>
</body>
</head>
</html>
