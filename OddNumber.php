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
$num = 0;
while ($num <= 100){
    ++$num;
    if( $num % 2 == 1){
        echo "$num <br>";
    }
    }
    ?>
</body>
</html>