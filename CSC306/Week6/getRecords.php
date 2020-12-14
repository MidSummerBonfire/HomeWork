<?php include ('assets/insert.php');
      include ('assets/getPatient.php');?>

<html>

  <head>
    <title>DoctorWho Website</title>
    <!--Adjusting the page on mobile screen  -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta charset="utf-8">

    <!--CSS -->
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/jquery.mobile-1.3.1.min.css"/>
    <script src="scripts/jquery-1.9.1.min.js"></script>
    <script src="scripts/jquery.mobile-1.3.1.min.js"></script>
  </head>

  <body>


    <!--Page Patient Records-->
    <div data-role="page" id="getPatient">
      <div data-role="header">
        <h1>Search Patient Portal</h1>
      </div>

      <form action="<?php echo
      $_SERVER['PHP_SELF'];?>"
      method = "post">
      <table>
        <tr>
          <td>
              <input type="submit" name="frmFindPatient" value="load records">
          </td>
        </tr>
      </table>
    </form>
    </div>


    <!--Javascript code -->
    <script src="scripts/password.js"></script>

  </body>

</html>
