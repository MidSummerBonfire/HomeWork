<?php
  $dbConn = mysqli_connect('localhost', 'helper', 'feelBetter', 'doctorwho');
  if(!$dbConn)
  {
    die('Could not Connect: ' . mysql_error());
  }
  //doctorwho is the name of the //
  $dbObj = mysqli_select_db($dbConn, "doctorwho");

 ?>
