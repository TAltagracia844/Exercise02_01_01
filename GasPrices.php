<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src = "modernizr.custom.65897.js" > </script> 
    <title>Is Even </title>
</head>
<body>
    <?php
    echo "<h2>Gas Prices</h2>";
    
    $gasPrice = 2.57;
    if($gasPrice >= 2){
        if($gasPrice <= 3){
            echo "<p>Gas prices are between $2.00 and $3.00</p>";
            
        }
    }
    ?>
</body>
</html>