<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src = "modernizr.custom.65897.js" > </script> 
    <title>Is odd</title>
</head>
<body>
    <?php 
    echo"<h2>Is odd</h2>";
    // Variable start the list
$num = 0;
//Conditional that will only count 100 numbers 
while ($num <= 100){
    //Increases the number by one 
    ++$num;
    if( $num % 2 == 1){
        //will only list numbers that have a remainder of 1 when divide by 2
    
        echo "$num <br>";
    }
    }
    ?>
</body>
</html>