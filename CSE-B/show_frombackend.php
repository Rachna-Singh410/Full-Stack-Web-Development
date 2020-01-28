<?php 
session_start();
     
     
$conn = mysqli_connect('localhost','root');
mysqli_select_db($conn,'cseb');


  ?>
  <!DOCTYPE html>
<html>
<head>
	<title></title>
     
</head>
<body bgcolor="lightblue">
      	
			<table align="center" width="800" border="2" bgcolor="#EDE8B0">
  <tr>
    <th>ID</th>
    <th>name</th>
    <th>Contact</th>
    <th>Email</th>
  </tr>
  
					<?php
                    $sql = "select * from users";
                    $result = mysqli_query($conn , $sql);
                    
                    if($result->num_rows > 0)
                    {
                    	while ($data = $result->fetch_assoc())
                    	{ echo"<tr>";
                    		echo"<th> ";
                    		echo $data['id'];
                    		echo"</th>";

     						 echo"<th> ";
                    			echo  $data['name'];
             				   echo"</th>";
                			  echo"<th> ";
                    			echo  $data['contact'];
                 			  echo"</th>";
                     		echo"<th> ";
                   			echo  $data['email'];
               
                    		echo"</th>";
                    		echo"</tr>";
                    	}
                    }
                    ?>
            
          
                   
			</table>
</body>
</html>