<html>

<head>

  <title>Movies Search Array</title>
  <meta charset="utf-8">
</head>

<body>
  <?php
    include('header.php')
  ?>
  <div id="content">
    <h3>Enter the first word in the movie title to see all the movies in the list that begin with that word: </h3>
    <form>
      <h3>First Word: <input type="text" onkeyup="showHint(this.value)" size='20'></h3>
    </form>
    <h3>Suggestions: <span id="txtHint"></span></h3>
  </div>

</body>
<html>
