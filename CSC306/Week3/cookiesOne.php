<?php
define("NEW_TIME",60*60*24*7);
$username=$_POST['name'];
$userage=$_POST['age'];
$usergender=$_POST['gender'];
setcookie("name",$username,time()+NEW_TIME);
setcookie("age",$userage,time()+NEW_TIME);
setcookie("gender",$usergender,time()+NEW_TIME);
 ?>

 <html>
  <head>
    <title>Setting the Cookie</title>
    <meta charset="utf-8">
  </head>

  <body>
    <div id="content" style="width:600px; margin-left:auto; margin-right: auto;">
      <h2>We set up a cookie on your hard drive</h2>
      <h2>it contains: </h2>
      <h3>your name:<?php echo($username)?></h3>
      <h3>your age:<?php echo($userage)?></h3>
      <h3>your gender:<?php echo($usergender)?></h3>
    </div>
  </body>
  </html>
