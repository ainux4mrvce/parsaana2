<!--Sagar S.N-->
<!DOCTYPE html>
<html>
<head>
    <title>Saved Shorlist</title>
    <link rel="icon" type="image/gif" href="images/collogo.jpg">

 <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css"/>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>

<script>
$(document).ready(function(){
	$(".close").click(function(){
		$("#demo-alert").alert();
	});
});    
</script>
</head>

<?php
//error_reporting(0);
require "connect.php";

if(isset($_POST['agg'])&&isset($_POST['exp'])) //Multiple Filter
{
    $agg=$_POST['agg'];
    $exp=$_POST['exp'];
    $result = $con->query("SELECT * FROM registration WHERE pgagg > '$agg' AND noftexp > '$exp' ");
    $con->query("truncate table save_shortlist");
    while($row = mysqli_fetch_array($result))
    {
        $result2= $con->query("insert into save_shortlist(appid,name,average,notexp)values('{$row['appid']}','{$row['fname']}','{$row['pgagg']}','{$row['noftexp']}')");
    }
  
}

if(isset($_POST['q']))
{
$q=$_POST['q'];

if(($q==2)||($q==3)||($q==4))// Experience Based Filter
{
  $result = $con->query("SELECT * FROM registration WHERE noftexp > '$q' ");
  $con->query("truncate table save_shortlist");
   while($row = mysqli_fetch_array($result))
   {
        $result2= $con->query("insert into save_shortlist(appid,name,average,notexp)values('{$row['appid']}','{$row['fname']}','{$row['pgagg']}','{$row['noftexp']}')");
   }
}
}


if(isset($_POST['q']))
{
$q=$_POST['q'];

if(($q==70)||($q==65)||($q==60))// Aggregate Based Filter
{
  $result = $con->query("SELECT * FROM registration WHERE pgagg > '$q' ");
  $con->query("truncate table save_shortlist");
  while($row = mysqli_fetch_array($result))
   {
        $result2= $con->query("insert into save_shortlist(appid,name,average,notexp)values('{$row['appid']}','{$row['fname']}','{$row['pgagg']}','{$row['noftexp']}')");
   }
  
}
}
if($result2) //If any Filtered Candidates Success
{
    echo"<body style='font-family: Segoe UI,Arial'>
    <br/>
    <div class='container'>
     <div class='alert alert-success' id='demo-alert'>
        <a href='#' class='close' data-dismiss='alert'>×</a>
       <h2>Candidates Shortlisted!!</h2>
       <a href='javascript:history.go(-1)'>&laquo;Go Back</a>
   </div>
    </div>
</body>";
}
?>