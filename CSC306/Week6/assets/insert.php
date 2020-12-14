<?php
    include("connectDB.php");
  //Variables from connectDB.php: $dbconn- connection object
    if(isset($_POST['frmAddPatient']))
    {
      $sqlStatement="INSERT INTO  patient (LastName,
                                  FirstName, DateOfBirth,
                                  Address, Age, Gender, MaritialStatus)
                                  VALUES
                                  ('$_POST[LastName]', '$_POST[FirstName]',
                                    '$_POST[DateOfBirth]', '$_POST[Address]',
                                    '$_POST[Age]', '$_POST[Gender]',
                                    '$_POST[MaritialStatus]') ";
      if(!mysqli_query($dbConn, $sqlStatement))
      {
        die('Error: ' . mysql_error());
      }
      echo '<h1>Record Added</h1>';
      include("closeDB.php");
    }

    ?>
