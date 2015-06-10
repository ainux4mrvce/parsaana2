<!DOCTYPE html>
<html>
<head>
    <title>Delete User</title>
    
   <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css"/>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <style>
    #header
{
    background-color:#1E90FF;
    color:white;
    text-align:center;
    padding:5px;
}

</style>
    <!-- AJAX Script-->

<script>
function displaygroup(str)
{
var xmlhttp;    
if (str=="")
  {
  document.getElementById("display").innerHTML="";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("display").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","displayusersgroup.php",true);
xmlhttp.send();
}
</script>

<script>
function displayusers(str)
{
var xmlhttp;    
if (str=="")
  {
  document.getElementById("display").innerHTML="";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("display").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","displayusers.php",true);
xmlhttp.send();
}
</script>
    
</head>
<body style="font-family: Segoe UI,Arial">
<div id="header">
<h2>Delete User</h2>
</div>

<div class="container">
    
	<ul class="nav nav-tabs">
        <li><a href="#" onclick="displaygroup(this.value)">Delete User Group</a></li>
        <li><a href="#" onclick="displayusers(this.value)">Delete Users</a></li>
       
       <li class="pull-right"><a href='javascript:history.go(-1)'></span> Go Back</a></li>
        </ul>
         <div id="display"></div>
    </div>

</body>