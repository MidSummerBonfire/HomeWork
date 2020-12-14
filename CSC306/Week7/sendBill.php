<html>
<head>
  <title></title>
</head>
<body>
  <table align="center" border="1px" style="width:1000px; line-height:40px;">
    <tr>
      <th colspan="8"><h2>Customer Records<br><a href="patient.php"><h2>Home Page</h2></a></h2></th>
    </tr>
        <tr>
          <th> Customer ID</th>
          <th> Customer Last Name</th>
          <th> Customer First Name</th>
          <th> Customer Street Address</th>
          <th> Service</th>
          <th> Customer Bills </th>
          <th> Amount Paid </th>
          <th> Bill Date </th>
          <th> Bill Status </th>
          <th> Email Sent </th>
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
               <td><?php echo $row['customer_ID']; ?></td>
               <td><?php echo $row['customer_L_Name']; ?></td>
               <td><?php echo $row['customer_F_Name']; ?></td>
               <td><?php echo $row['street_Address']; ?></td>
               <td><?php echo $row['service']; ?></td>
               <td><?php echo $row['customer_bill']; ?></td>
               <td><?php echo $row['amt_paid']; ?></td>
               <td><?php echo $row['bill_date']; ?></td>
               <td><?php echo $row['customer_bill']; ?></td>
               <td><?php echo $row['customer_bill']; ?></td>
           </tr>

         }
       }
     }

   </table>
</body>
</html>
