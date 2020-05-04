<html>
<head>
<title>Random Image Generation</title>
    <style>
    </style>
</head>
<body>
    <img src="1.jpg" id="img" width="600px" height="500px">
    <input type="button" value="Change Image" id="btn">
    <script type="text/javascript">
    function randomImageGeneration(){
        random = 1+ Math.ceil(Math.random()*2);
        return random;
    }
        
    document.getElementById('btn').onclick = function(){
        var imageName = randomImageGeneration();
        document.getElementById('img').src=imageName+'.jpg';
    }
    </script>
</body>
</html>