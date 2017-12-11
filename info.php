/*php build test*/

<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 <?php echo '<p>Hello World</p>'; ?> 
 </body>
</html>

<?php

  //create a connection string from the PG database URL and then use it to connect
  $url=parse_url(getenv("postgres://jozhonkxujrrgg:0f0cfe77f7d2f846ce0da3b2f02ac6c76e1bcb8dbd474d005471c36547ab6ca0@ec2-54-243-39-245.compute-1.amazonaws.com:5432/dc4q2j1hmmjls0"));
  
  $host = $url["host"];
  $port = $url["port"];
  $user = $url["user"];
  $password = $url["pass"];
  $dbname = substr($url["path"],1);
  
  $connect_string = "host='" . $host . "' ";
  $connect_string = $connect_string . "port=" . $port . " ";
  $connect_string = $connect_string . "user='" . $user . "' ";
  $connect_string = $connect_string . "password='" . $password . "' ";
  $connect_string = $connect_string . "dbname='" . $dbname . "' ";
  
  $db = pg_connect($connect_string);
  
  pg_close($db);

?> 