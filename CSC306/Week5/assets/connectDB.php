<?php
  $dbConn = mysql_connect('localhost', 'helper', 'feelBetter');
  if(!$dbConn)
  {
    die('Could not Connect: ' . mysql_error());
  }
  //doctorwho is the name of the //
  $dbObj = mysql_select_db('doctorwho', $dbConn);

 ?>
