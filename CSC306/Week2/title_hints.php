<?php
/*Array for movie titles*/

$movies = array("Portrait of a Lady on Fire (Portrait de la jeune fille en feu) (2020)", "1917 (2020)", "The Invisible Man (2020)",
                "Never Rarely Sometimes Always (2020)", "Hamilton (2020)", "Nomadland (2020)", "Da 5 Bloods (2020)",
                "Miss Juneteenth (2020)", "Onward (2020)", "Sound of Metal (2020)", "His House (2020)", "Crip Camp: A Disability Revolution (2020)",
                "The Trial of the Chicago 7 (2020)", "Time (2020)", "Palm Springs (2020)", "Blow the Man Down (2020)",
                "The Personal History of David Copperfield (2020)", "Dick Johnson Is Dead (2020)", "Host (2020)", "The Forty-Year-Old Version (2020)");
//get parameter from http_build_url
$q = $_GET["q"];

//look up hints from array
if(strlen($q) > 0)
{
  $hint="";
  for($i=0; $i<count($movies); i++)
  {
    if(strtolower($q)==strtolower(substr($movies[$i],0,strlen(q))))
    {
    if($hint=="")
    {
      $hint=$movies[$i];
    }
  else
  {
    $hint=$hint . " ; " . $movies[$i];
  }
  }
  }
  }
  //set output to no suggestions if none were found
  if($hint=="")
  {
    $response="no names match";
  }
  else
  {
    $response=$hint;
  }
  //output response
  echo $response;
 ?>
