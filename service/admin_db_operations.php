<?php
session_start();
$usernname=$_SESSION['usernname'];
?>
<html>

<head>

<title>Petrolpump System</title>
 <link rel="stylesheet" href="css/bootstrap.min.css">
       
        <!-- Including JQuery--> 
        <script src="js/jquery-1.11.2.js"></script>
        <script src="js/jquery-migrate-1.2.1.js"></script>
       
        <!-- Including Bootstrap JS--> 
        <script src="js/bootstrap.min.js"></script>
        
        <!-- To ensure proper rendering and touch zooming
           
          -> width=device-width part sets the width of the page to follow the screen-width of the device (which will vary depending on the device).
         
          -> initial-scale=1 part sets the initial zoom level when the page is first loaded by the browser.
        -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

<style>

/* hover tab color */
.nav-tabs>li>a:hover {
 
  background-color: #40A6FF;
  color: white;
}
</style>
<script>
function adduser(str)
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
xmlhttp.open("GET","addemployee.php",true);
xmlhttp.send();
}
</script>

<script>
function updateuser(str)
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
xmlhttp.open("GET","updateemployee.php",true);
xmlhttp.send();
}
</script>

<script>
function deleteuser(str)
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
xmlhttp.open("GET","deleteemployee.php",true);
xmlhttp.send();
}
</script>
</head>

<body style="font-family: Segoe UI,Arial">
<div class="container">
        <div class="jumbotron" >
            <p class="text-center" style="font-family: Segoe UI,Arial; font-size: 36px; color: #47A3FF" >Admin Panel</p>
           
        </div>
       <!-- <div class="well well-sm">Look at it</div>-->
       
       
       	<ul class="nav nav-tabs">
        <li><a href="addemployee.php" >Add Employee</a></li>
        <li><a href="#" onclick="updateuser(this.value)">Update Employee Record</a></li>
       <li><a href="#" onclick="deleteuser(this.value)">Delete Employee Record</a></li>
       
   <li class="pull-right"> <a href="home.php" >&laquo Go Back</a></li>
      </ul>
       
        
    </div>
 <div id="display"></div>
</body>

</html>