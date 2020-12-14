
<html>
<head>
  <title></title>
</head>
<body>

  <table align="center" border="1px" style="width:1000px; line-height:40px;">
    <tr>
      <th colspan="8"><h2>Patient Records<br><a href="patient.php"><h2>Home Page</h2></a></h2></th>
    </tr>
    <tr>
      <th> Patient ID </th>
      <th> Last Name </th>
      <th> First Name </th>
      <th> Date of Birth </th>
      <th> Address</th>
      <th> Age </th>
      <th> Gender  1 = Male</th>
      <th> Maritial Status 1 = married</th>


    </tr>
<?php
    include("connectDB.php");

  if(isset($_POST['frmFindPatient']))
    {   $sql = "SELECT * FROM patient;";
        $result = mysqli_query($dbConn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if($resultCheck > 0)
        {
          while($row = mysqli_fetch_assoc($result))
          {
?>
            <tr>
              <td><?php echo $row['PatienID']; ?></td>
              <td><?php echo $row['LastName']; ?></td>
              <td><?php echo $row['FIrstName']; ?></td>
              <td><?php echo $row['DateOfBirth']; ?></td>
              <td><?php echo $row['Address']; ?></td>
              <td><?php echo $row['Age']; ?></td>
              <td><?php echo $row['Gender']; ?></td>
              <td><?php echo $row['MaritialStatus']; ?></td>
          </tr>

        <?php
          }
        }
        exit();
      }
      ?>

    </table>
</body>
<footer>

</footer>
</html>
