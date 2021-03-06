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

    <!--login page -->
    <div data-role="page" id="loginPage">
      <div data-role="header">
        <h1>Login Doctor Who Portal</h1>
      </div>
      <div data-role="content">
        User Name:
        <input type="text" id ="userName"></input>
        Password :
        <input type="password" id="passcode"></input>

        <div data-role="controlgroup" id="numKeyPad">
          <a data-role="button" id="btnEnter" type="submit">Enter</a>
        </div>
      </div>
    </div>
    <!-- User Page  -->
    <div data-role="page" id="pageHome">
      <div data-role="header">
        <h1>Hello, Welcome to DoctorWho WebPage Terminal</h1>
      </div>
      <div data-role="content">
        <h2>Hello Nurse, are you Editing Patient Records or Searching Patient?</h2>
        <a href="#addPatient" data-role="button">Add Patient Records</a>
        <a href="#getPatient" data-role="button">Search Patient Records</a>
      </div>
    </div>

    <!--Page Nurse-->
    <div data-role="page" id="addPatient">
      <div data-role="header">
        <h1>Add Patient Portal</h1>
      </div>
      <div align="center">
        <p> Add New Patient Record</p>
      </div>

      <form action="<?php echo
      $_SERVER['PHP_SELF'];?>"
      method = "post">
      <table>
        <tr>
          <td>
            <div id=NewPatientRecord>
              Last Name: <br>
              First Name: <br>
              Date of Birth: <br>
              Address: <br>
              Age: <br>
              Gender:        <input type="checkbox" name=
                          "Gender" value='1'><br>
              Maritial Status:    <input type="checkbox" name=
                          "MaritialStatus" value='1'><br>
            </div>
          </td>
          <td>
            <input type="text" name=
            "LastName" size="16">

            <input type="text" name=
            "FirstName" size="16">

            <input type="date" name=
            "DateOfBirth" size="16">

            <input type="text" name=
            "Address" size="16">

            <input type="range" name=
            "Age" size="16" min='0' max='130'>

            <div><br>check if Male <br><br><br><br>
              check if Married</div>

          </td>
        </tr>
        <tr>
          <td>
            <input type="submit" name="frmAddPatient" value="Add Patient">
          </td>
        </tr>
      </table>
      </form>
    </div>
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
              <input type="submit" name="frmFindPatient" value="Find Patient">
          </td>
        </tr>
      </table>
    </form>
    </div>


    <!--Javascript code -->
    <script src="scripts/password.js"></script>

  </body>

</html>
