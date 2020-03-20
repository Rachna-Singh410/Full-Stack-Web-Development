<!DOCTYPE html> 
<html> 
<head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width">

    <title>Number Guessing Game</title> 
  
    <style> 
        html { 
    font-family: sans-serif; 
    } 
      
        body { 
    width: 50%; 
    max-width: 800px; 
    min-width: 480px; 
    margin: 0 auto; 
    background-color: #85C1E9 ;
    } 
    </style> 
</head> 
  
<body> 
<h1>Guess The Number</h1> 
  
<div class="form" method="post">
 
    <label for="guessField">Enter a guess: </label> 
    <input type = "text" id = "guessField" class = "guessField"> 
    <input type = "submit" value = "Submit guess" 
           class = "guessSubmit" id = "submitguess" onclick="document.getElementById('guessField').value = ''"> 
</div> 
  </body>
  <script type="text/javascript">
      var y = Math.floor(Math.random() * 10 + 1); 
      
    var guess = 1;
    var c = 1; 
     if( c > 1)
   {
    alert("start the game");
   }  

    document.getElementById("submitguess").onclick = function(){  
  
   if(guess < 3)
     {    
   var x = document.getElementById("guessField").value; 
  
   if(x == y) 
   {     
       alert("CONGRATULATIONS!!! YOU GUESSED IT RIGHT IN "
               + guess + " GUESS "); 
   } 
   else if(x > y) 
   {     
       guess++; 
       alert("OOPS SORRY!! TRY A SMALLER NUMBER"); 
   } 
   else
   { 
       guess++; 
       alert("OOPS SORRY!! TRY A GREATER NUMBER") 
   } 
} 

else
{    
      alert("OOPS SORRY!!  TRY AGAIN")
    
       Redirect();
}
}
function Redirect() {

               window.location = "c.php";
            
               
            }
</script>
  </html>