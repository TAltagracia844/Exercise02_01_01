<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="modernizr.custom.65897.js"></script>
</head>
<body>
   <h1>PHP Environment Info
   </h1> 
   <p>
       The php code was rendered with php version
       <? php
       echo phpversion();
       ?>
   </p>
   <p>
       The php code was rendered with zend engine version
       <? php
       echo zend_version();
       ?>
   </p>
   <p>
      PHP's default MINE type is
       <? php
       echo ini_get("default_minetype");
       ?>
   </p>
   <p>
      The maximum allowable execution time of a PHP Script is
       <? php
       echo ini_get("max_execution_time");
       ?>
   </p>
</body>
</html>