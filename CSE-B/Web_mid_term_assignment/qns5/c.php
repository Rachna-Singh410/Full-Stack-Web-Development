<!DOCTYPE html> 
<html> 
<head> 
    <meta charset="utf-8">
    
    

    <title>Number Guessing Game</title> 
  
    <style> 
        html { 
    font-family: sans-serif; 
    } 
      
     body 
     {
    
          margin: 0;
          padding: 0;
          
          background-color: #F4D03F;
     }
    .guessSubmit {
  display: block;
  width: 60%;
  border: none;
  margin-top: 20%;
    margin-left: 25%;
  background-color: #4CAF50;
  padding: 14px 28px;
  font-size: 16px;
  font-weight: bold;
  cursor: pointer;
  text-align: center;
}
    </style> 
</head> 
  
<body > 

  
<div class="form" method="post">
 
    
    
    <input type = "button" value = "NEW GAME" 
           class = "guessSubmit" id = "submitguess" onclick="Redirect()"> 
</div> 
  </body>
  <script type="text/javascript">
  function Redirect() {

               window.location = "guess1.php";
            
               
            }
            </script>