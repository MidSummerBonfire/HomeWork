<!DOCTYPE html>

<html>

<head>
  <title>header file</title>
  <script language="JavaScript" type="text/javascript">

    function showHint(str)
    {
      if(str.length==0)
      {
        document.getElementById('txtHint').innerHTML="";
        return;
      }
    if(window.XMLHttpRequest)
    {
      var xmlhttp = new XMLHttpRequest();
    }
    else
    {
      var xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function()
    {
      if(xmlhttp.readyState==4 && xmlhttp.status==200)
      {
        document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
      }
    }
    xmlhttp.open("GET","title_hints.php?q="+str,true);
    xmlhttp.send();
    }

  </script>
</head>
<html>
