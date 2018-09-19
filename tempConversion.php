<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src = "modernizr.custom.65897.js" > </script> 
    <title>Coast City Computer</title>
</head>
<body>
    <?php
    echo"<h2>Temp Conversions</h2>";
    $fahrenheit = 0;
    while ($fahrenheit <= 100){
        $fahrenheit++;
            $celsius = $fahrenheit * (5/9) - 32;
    echo "{$fahrenheit}°" . ' =  ' . "{$celsius}°" . '<br> <br>';
} 
    ?>
</body>
</html>