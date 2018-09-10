<head>

<!-- 
    
    Exercise 02_01_01
Name: Tiffany Altagracia
Date: 9.10.18 

-->

    <meta charset="UTF-8">
    <title>PHP Code Blocks</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>
<body>
  <p>
      <h3>This is HTML</h3>
      <?php
echo  "This text is displayed using standard PHP Script delimiters.<br>";
print "Second String";
print (" <br> Third String");
echo "<h1>This is a " , "multiple argument string. </h1>";
echo ("<h1>This is a " . "multiple argument string. </h1>");
print("<h2>This is some math: " . ( 2 + 3 ) . " </h2>")
      ?>
  </p>
</body>
</html>