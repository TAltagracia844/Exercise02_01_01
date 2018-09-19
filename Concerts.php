< !DOCTYPE html >
    <html >
    <head >
    < meta charset = "utf-8" / >
    <meta http - equiv = "X-UA-Compatible" content = "IE=edge" >
    <title > Concerts </title> 
    <meta name = "viewport" content = "width=device-width, initial-scale=1" >
    <link rel = "stylesheet" type = "text/css" media = "screen" href = "main.css" />
    <script src = "main.js"> </script> </head> <body >
    <h1> Central Valley Civic Concerts </h1> 
    <h2> Summer Concert Season </h2>
<?php
    $concerts = array("Jimmy Buffet", "Chris Isaak", "bonnie Raitt", " James Taylor", "Alice Keys");
    $concerts[] = "Bob Dylan";
    $concerts[] = "Nick Jonas";

    echo "<P> The following " , count($concerts), " concerts are scheduled:</p>";

    echo "$concerts[0]<br>";
    echo "$concerts[1]<br>";
    echo "$concerts[2]<br>";
    echo "$concerts[3]<br>";
    echo "$concerts[4]<br>";
    echo "$concerts[5]<br>";
    echo "$concerts[6]</p>";

    echo "<pre>"; 
  print_r($concerts);
     echo "</pre>";
     
    echo "<pre>"; 
   var_dump($concerts);
    echo "</pre>";

    ?> 
    </body> 
</html>