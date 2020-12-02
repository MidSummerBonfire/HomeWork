<?php
    include("include/connectDB.php");
  //Variables from connectDB.php: $dbconn- connection object
    if(isset($_POST['frmAddPatient']))
    {
      $sqlStatement="INSERT INTO  patient (LastName)
                                  VALUES
                                  <'$POST[LastName]'";
      if(!mysql_query($sqlStatement, dbConn))
      {
        die('Error: ' . mysql_error());
      }
      echo "<h2>RECORD ADDED</h2>";
      include("include/closeDB.php");
    }

    ?>
