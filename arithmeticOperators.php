<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
</head>
<body>
   <?php 
   //addition
   $x = 100;
   $y = 200;
   $returnValue = $x + $y;
   echo "<h2>Addition</h2>";
   echo '<P>$returnValue after addition expression: ' , $returnValue, "</P>";
   

     //Subtraction
     $x = 10;
     $y = 7;
     $returnValue = $x -  $y;
     echo "<h2>Subtraction</h2>";
     echo '<P>$returnValue after subtraction expression: ' , $returnValue, "</P>";

       //division
   $x = 20;
   $y = 2;
   $returnValue = $x / $y;
   echo "<h2>Division</h2>";
   echo '<P>$returnValue after addition expression: ' , $returnValue, "</P>";

     //modulus
     $x = 100;
     $y = 200;
     $returnValue = $x % $y;
     echo "<h2>Modulus</h2>";
     echo '<P>$returnValue after Modulus expression: ' , $returnValue, "</P>";

     // unary
     echo "<h2>Unary increment: Prefix Notation </h2>";
     $studentID = 100;
     $curStudent = ++$studentID;
     echo "The first student is:" , $studentID, "<br>";
     $curStudent = ++$studentID;
     echo "The second student is:" , $studentID, "<br>";
     $curStudent = ++$studentID;
     echo "The third student is:" , $studentID, "<br>";

     // unary
     echo "<h2>Unary increment: Postfix Notation </h2>";
     $studentID = 100;
     $curStudent = $studentID++;
     echo "The first student is:" , $studentID, "<br>";
     $curStudent = $studentID++;
     echo "The second student is:" , $studentID, "<br>";
     $curStudent = $studentID++;
     echo "The third student is:" , $studentID, "<br>";

     echo "<h1>Assignment  Operator</h1>";
$number = 100;
$number += 50;
echo '$number:', $number;

echo "<h1>Conditional Operator</h1>";
$value1 = "first test string";
$value2 = "second text string";
$returnValue = ($value1 == $value2) ? "true" : "false";
echo "$returnValue is"
   ?> 
</body>
</html>
