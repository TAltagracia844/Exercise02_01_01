<html>
    <head>
    <title> Dice Roll < /title> 
    <meta charset = "utf-8" >
    <meta name = "viewport" content = "initial-scale=1.0" >
    <script src = "modernizr.custom.65897.js" > </script> 
    </head>
    <body>
    <h2> Dice Roll </h2>
<?php
// global arrays for displaying the user what the rolls were
$faceNamesSingular = array("one", "two", "three", "four", "five", "six");
$faceNamesPlural = array("ones", "twos", "threes", "fours", "fives", "sixes");
$doublesCount = 0;
$rollNumber = 1;
define("NBR_ROLLS", 4);
//function that will check if the users randomly gets two of the same die
function checkForDoubles($die1 , $die2) {
global $faceNamesSingular;
global $faceNamesPlural;
echo " Die 1: $die1 <br> Die 2: $die2<br>";
// runs if the dice are the same
if ($die1 === $die2) {
echo "The roll was double ", $faceNamesPlural[$die1 - 1], ".<br>";
$returnValue = true;
}
// runs if the dice are different 
if($die1 !== $die2){
echo "The roll was a ", $faceNamesSingular[$die1 - 1], " and a ", $faceNamesSingular[$die2 - 1], ".<br>";
$returnValue = false;
}
return $returnValue;
}
// gives the name of the score for the game 
function displayScoreText($score, $doubles) {
    if($doubles){if ($score === 2) {
        echo "You rolled snake eyes!<br>";
    }
    else if ($score === 12) {
        echo "You rolled box cars!<br>";
        }}
        else{
         if ($score === 3) {
                echo "You rolled loose deuce!<br>";
                }
                else if ($score === 5) {
                echo "You rolled fever five!<br>";
                }
                else if ($score === 7) {
                echo "You rolled a natural!<br>";
                }
                else if ($score === 9) {
                echo "You rolled a nina!<br>";
                }
                else if ($score === 11) {
                echo "You rolled a yo!<br>";
                }
                else if ($score === 12) {
                echo "You rolled box cars!<br>";
                }
                else{
                    echo"Your roll has no nickname!<br>";
                }
        }
}
$dice = array();
while($rollNumber <= NBR_ROLLS){
    $dice[0] = rand(1, 6);
    $dice[1] = rand(1, 6);
    echo "<p>";
    $score = $dice[0] + $dice[1];
    echo "the total score for this role was $score.<br>";
    $doubles = checkForDoubles($dice[0], $dice[1]);
    displayScoreText($score, $doubles);
    echo "</p>";
    if ($doubles){
        ++$doublesCount;
    }
    ++$rollNumber;
}
echo "<p>Doubles occurred on $doublesCount of the " . NBR_ROLLS . " rolls. </p>";
        ?> <
/body> <
/html>