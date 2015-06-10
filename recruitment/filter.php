<!--Sagar S.N-->
<?php
require "connect.php";
session_start();
 $user_check=$_SESSION['loggedin_user'];
 $result=$con->query("select username from login where username='$user_check'");
 $row = mysqli_fetch_assoc($result);
 $login_session =$row['username'];
?>

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
 
 <script>

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

</head>
<body style="font-family: Segoe UI,Arial">
   <center><h2><b>Candidate Shortlisting</b></h2></center>
   <!--<h3>
       <center>R.V College of Engineering</center>
    </h3>-->
   <?php echo '<strong class="text-success"> Welcome '.$login_session .'!</strong>';
 echo '<a href="logout.php"><br/>Logout</a>';?>
    <div class="container">
        <div class="panel panel-info">
					<div class="panel-heading">
						<h4 class="text-primary">Filter By</h4>
					</div>
					<div class="panel-body">

      <div class="row">
        <div class="col-lg-4">
  <form role="form">
  <div class="well">
    <fieldset>
    <legend>Agregate</legend>
    <div class="checkbox">
      <label><input type="radio" name="avg" value="70" onChange="showUser(this.value)">Average > 70%</label>
    </div>
    <div class="checkbox">
     <label><input type="radio"  name="avg" value="65" onChange="showUser(this.value)">Average > 65%</label>
    </div>
    <div class="checkbox">
     <label><input type="radio"  name="avg" value="60" onChange="showUser(this.value)">Average > 60%</label>
    </div>
    </div>
       
</div>
        <div class="col-lg-4">
  
  <div class="well">
    
    <fieldset>
    <legend>Teaching Experience</legend>
    
    <div class="checkbox">
      <label><input type="radio" name="avg" value="2" onChange="showUser(this.value)"> > 2 Years</label>
    </div>
    
    <div class="checkbox">
     <label><input type="radio"  name="avg" value="3" onChange="showUser(this.value)"> > 3 Years</label>
    </div>
   
    <div class="checkbox">
     <label><input type="radio"  name="avg" value="4" onChange="showUser(this.value)"> > 4 Years</label>
    </div>
    </div>
    </div>
       
       
<div class="col-lg-4">
  
  <div class="well">
    
    <fieldset>
    <legend>Multiple</legend>
    <div class="form-group">
        <label for="sel1">Aggregate</label>
        
                                                <select class="form-control input-sm " id="nature" name="agg" required>
                                                <!--<option selected disabled>Choose Aggregate</option>-->
                                                <option value="70">70</option>
                                                <option value="65">65</option>
                                                <option value="60">60</option>
                                                </select>
        </div>
  <label for="sel1">Experience</label>
  <div class="form-group">
                                                <select class="form-control input-sm" id="nature" name="exp" required>
                                               <!-- <option selected disabled>Choose Teaching Experience</option>-->
                                                <option value="2"> > 2</option>
                                                <option value="3"> > 3</option>
                                                <option value="4"> > 4</option>
                                                </select>
  </div>
                                            <div class="form-group">
                                              <input  id="btn-login" name="submit" type="button" class="btn  btn-sm btn-info form-control" value="APPLY" onclick="showUser1(agg.value,exp.value)">

<!--  <label><input type="radio"  name="dddd" value="4" onChange="showUser1(agg.value,exp.value)"> > GO</label>-->
  </div></div>
    </div>
    </div>
    </div>
                                        </div></div>
  </form>
    </div>
  
<div id="txtHint"></div>


</body>
