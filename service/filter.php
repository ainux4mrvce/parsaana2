<!--Sagar S.N-->
<?php
require "connect.php";
/*session_start();
 $user_check=$_SESSION['loggedin_user'];
 $result=$con->query("select username from login where username='$user_check'");
 $row = mysqli_fetch_assoc($result);
 $login_session =$row['username'];
*/?>

<!DOCTYPE html>
<html>
<head>
    <title>Filter</title>
   <link rel="icon" type="image/gif" href="images/collogo.jpg">

 <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css"/>
 <script type="text/javascript" src="js/jquery.min.js"></script>
 <script type="text/javascript" src="js/bootstrap.min.js"></script>
 
 <script>

function showUser(str)
{
if (str=="")
  {
  document.getElementById("txtHint").innerHTML="";
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
    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","getdatafromDB.php?q="+str,true);
xmlhttp.send();
}
</script>
 
<!-- <script>

function showUser1(str,str2)
{
if ((str=="")||(str2==""))
  {
  document.getElementById("txtHint").innerHTML="";
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
    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","getdatafromDB.php?agg="+str+"&exp="+str2,true);
xmlhttp.send();
}
</script>
-->
</head>
<body style="font-family: Segoe UI,Arial">
<div style="width:100%; float:left; text-align:center;"><input style="min-width: 200px;font-weight: bold;height: 30px;padding: 5px;cursor: pointer;" type="button" onClick="printContent('ack')" value="PRINT" /></div>
<div id="ack">
   <center><h2><b>Employee information</b></h2></center>
   <!--<h3>
       <center>R.V College of Engineering</center>
    </h3>-->
   
    <div class="container">
        <div class="panel panel-info">
					<div class="panel-heading">
						<h4 class="text-primary">Filter By</h4>
					</div>
					<div class="panel-body">

      <div class="row">
        <div class="col-lg-4">
  <form role="form">
  
       
</div>
        
       
       
<div class="col-lg-4">
  
  <div class="well">
    
    <fieldset>
    <legend>Multiple</legend>
    <div class="form-group">
        <label for="sel1">ID</label>
       <input type="text"  onkeyup="showUser(this.value) " >
        </div>
 <!--
<label><input type="radio"  name="dddd" value="4" onChange="showUser1(agg.value,exp.value)"> > GO</label>-->
  </div></div>
    </div>
    </div>
    </div>
                                        </div></div>
  </form>
    </div>
  
<div id="txtHint"></div>

</div>
	
<script>
	function printContent(el){
	var restorepage = document.body.innerHTML;
	var printcontent = document.getElementById(el).innerHTML;
	document.body.innerHTML = printcontent;
	window.print();
	document.body.innerHTML = restorepage;
}
</script>
</body>
