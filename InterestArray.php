<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Interest Array</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="modernizr.custom.65897.js"></script>
</head>
<body>
<?php
echo "<h2>Interest Array</h2>";
$interestRate1 = .0725;
$interestRate2 = .0750;
$interestRate3 = .0775;
$interestRate4 = .0800;
$interestRate5 = .0825;
$interestRate6 = .0850;
$interestRate7 = .0875;

$ratesArray = array($interestRate1, $interestRate2, $interestRate3, $interestRate4, $interestRate5, $interestRate6, $interestRate7);

echo "Interest rate 1: " , $ratesArray[0], "<br>";
echo "Interest rate 2: " , $ratesArray[1], "<br>";
echo "Interest rate 3: " , $ratesArray[2], "<br>";
echo "Interest rate 4: " , $ratesArray[3], "<br>";
echo "Interest rate 5: " , $ratesArray[4], "<br>";
echo "Interest rate 6: " , $ratesArray[5], "<br>";
echo "Interest rate 7: " , $ratesArray[6], "<br>";

echo "<h2>Days Array</h2>"; 

$days = array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");

echo "The days of the week" , $day[0] ,  $day[1],  $day[2],  $day[3]
    ?>
    </body>
</html>