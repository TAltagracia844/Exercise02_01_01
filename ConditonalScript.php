<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src = "modernizr.custom.65897.js" > </script> 
    <title>Document</title>
</head>
<body>
    <?php
    $intVariable = 75;
    $result = "";
    // ($intVariable > 100) ? $result = '$intVariable is greater than 100':
    // $result = '$intVariable is less than or equal 100';
    echo "<h2>Conditional Script </h2>";
if($intVariable > 100){
    $result = '$intVariable is greater than 100';
}
else{
    $result = '$intVariable is less than or equal 100';
}
echo '<h3> $result:'." $result </h3>";
    ?>
</body>
</html>