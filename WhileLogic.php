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
    echo "<h2>While Logic</h2>";
    $number = array();
$counter = 0;
while($counter <= 100){
    $number[] = $counter;
    ++$counter;
}
foreach($number as $currentNum){
    echo"$currentNum<br>";
}
    ?>
</body>
</html>