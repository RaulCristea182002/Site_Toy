<?php
 $serverName ="localhost";
 $dbUsername ="root";
 $dbpassword ="";
 $dbName ="database_web";

 $conn = mysqli_connect(" $serverName, $dbUsername, $dbpassword,  $dbName ");
  if(!$conn)
  {
    die("Connection failed: ". mysqli_connect_error());
  }

 ?>
