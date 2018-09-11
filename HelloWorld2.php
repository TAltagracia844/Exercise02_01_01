<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PHP Page #3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="modernizr.custom.65897.js"></script>
</head>
<body>
    <?php
$worldVar = "world";
$sunVar = "Sun";
$moonVar = "Moon";

define("WORLD_INFO", 92897000);
define("SUN_INFO", 72000000 );
define("MOON_IFO", 3456);

echo "<p> Hello $worldVar!<br>";
echo "The $worldVar is", number_format(WORLD_INFO, 2) ,"miles form the $sunVar.<br>";
echo "Hello ", $sunVar, "!<br>";
echo "The $sunVar's core temperture is approx. ", SUN_INFO ," degrees Fahreheit.<br>";
echo "Hello ", $moonVar, "!<br>";
echo "The $moonVar is ", number_format(MOON_INFO, 0) ,"miles in diameter.</p>";

// echo "This is a {$moonVar}embedded in double quotes.";
// echo "This is a $moonVarembedded in double quotes.";

  ?>
</body>
</html>