<?php
session_start();
$usernname=$_SESSION['usernname'];
?>
<!DOCTYPE html>

<html>
<head>
    <title>Admin</title>
    <link rel="icon" type="image/gif" href="images/collogo.jpg">

 <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css"/>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
  
<!-- Links for DatePicker-->
  <link rel="stylesheet" href="css/datepicker.css">

        <script src="js/jquery.js"></script>
        <script src="js/bootstrap-datepicker.js"></script>
    <!-- Include Bootstrap Multiselect CSS, JS -->
<script type="text/javascript" src="js/bootstrap-multiselect.js"></script>
<link rel="stylesheet" href="css/bootstrap-multiselect.css" type="text/css"/>
<!-- Initialize the plugin: -->

<style>
     table,
    thead,
    tr,
    tbody,
    th,
    td {
        text-align: center;
    }
</style>
<style>
    .custom {

    width: 180px !important;
    height:40px !important;
}
</style>
</head>

<script>
function earned(str)
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
xmlhttp.open("GET","emp_earned_display.php",true);
xmlhttp.send();
}
</script>

<script>
function history(str)
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
xmlhttp.open("GET","emp_history_display.php",true);
xmlhttp.send();
}
</script>

<script>
function qualification(str)
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
xmlhttp.open("GET","emp_qualification_display.php",true);
xmlhttp.send();
}
</script>

<script>
function service(str)
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
xmlhttp.open("GET","emp_service_display.php",true);
xmlhttp.send();
}
</script>


<body style="font-family: Segoe UI,Arial">
     
       
       
       <!-- <div class="well well-sm">Look at it</div>-->        
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
   <div class="navbar-header">
      <a class="navbar-brand" href="#"><strong>RVCE SERVICE-REGISTRY</strong> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<I><strong>EMPLOYEE</strong></I></a>
    </div>
    <ul class="nav navbar-nav">
        
    </ul>
    <div>&nbsp;<center>
      <ul class="nav navbar-nav navbar-right">
       <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            <span class="glyphicon glyphicon-user"></span><?php  echo ' Signed in as '. $usernname?>
            <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
<center><br/><br/>
   <a href="#" onclick="earned(this.value)" value="earned" class="btn btn-primary btn-primary custom" role="button" value="">EARNED</a>
   <a href="#" onclick="history(this.value)" class="btn btn-primary btn-primary custom" role="button">HISTORY</a>
   <a href="#" onclick="qualification(this.value)" class="btn btn-primary btn-primary custom" role="button">QUALIFICATION</a>
   <a href="#" onclick="service(this.value)" class="btn btn-primary btn-primary custom" role="button">SERVICE</a>

<div id="display"></div>
</center>
</body>
</html>