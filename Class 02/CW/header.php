<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hereDoc</title>
</head>
<body>

                 
    
<?php
    $content = <<<TEXT


        <h1 style="background-color:tomato;text-align:center">Email Company Name</h1>
        <div style="text-align:center">
        
        <img src="https://www.farehawker.com/img/image/Airline-flight/Biman-Bangladesh-Airlines-flight-image.jpg" height="450px">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil facilis voluptas sunt ratione culpa odit, earum iste atque eligendi velit!</p>
        <button style="background-color:orange; height:30px;width:150px">BooK Now</button>
        </div>
        
        
    TEXT;

echo $content;

?>
    
</body>
</html>