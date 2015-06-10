<!DOCTYPE html>
<html>
<head>
    <title>Filter</title>
    <link rel="icon" type="image/gif" href="images/collogo.jpg">

 <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css"/>
 <script type="text/javascript" src="js/jquery.min.js"></script>
 <script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>

<?php
error_reporting(0);
require "connect.php";

$q=$_GET["q"];
$agg=$_GET["agg"];
$exp=$_GET["exp"];

if(isset($agg)&&isset($exp))
{
echo "<form action='save_shortlist.php' method='POST'>";
$result = $con->query("SELECT * FROM registration WHERE pgagg > '$agg' AND noftexp > '$exp' ");
echo "<div class='container'>";
echo "<table border='1' class='table table-bordered'>
<tr>
<th>Application ID</th>
<th>Name</th>
<th>Average</th>
<th>Teaching Experience</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
  echo "<tr>";
  echo "<td>" . $row['appid'] . "</td>";
  echo "<td>" . $row['fname'] . "</td>";
  echo "<td>" . $row['pgagg'] . "</td>";
  echo "<td>" . $row['noftexp'] . "</td>";
  echo "</tr>";
  }
echo "</table>";
echo "</div>";
echo "<center><input id='btn-login' name='submit' type='submit' value=' SHORTLIST ABOVE CANDIDATES ' class='btn  btn-lg btn-success'></center>";
echo "<input type='hidden' name=agg value='$agg'>";
echo "<input type='hidden' name=exp value='$exp'>";
echo "</form>";
}

if(($q==2)||($q==3)||($q==4))
{
 echo "<form action='save_shortlist.php' method='POST'>"; 
$result = $con->query("SELECT * FROM registration WHERE noftexp > '$q' ");
echo "<div class='container'>";
echo "<table border='1' class='table table-bordered'>
<tr>
<th>Application ID</th>
<th>Name</th>
<th>Average</th>
<th>Teaching Experience</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
  echo "<tr>";
  echo "<td>" . $row['appid'] . "</td>";
  echo "<td>" . $row['fname'] . "</td>";
  echo "<td>" . $row['pgagg'] . "</td>";
  echo "<td>" . $row['noftexp'] . "</td>";
  echo "</tr>";
  }
echo "</table>";
echo "</div>";
echo "<center><input id='btn-login' name='submit' type='submit' value=' SHORTLIST ABOVE CANDIDATES ' class='btn  btn-lg btn-success'></center>";
echo "<input type='hidden' name=q value='$q'>";
echo "</form>";
}

if(($q==70)||($q==65)||($q==60))
{
echo "<form action='save_shortlist.php' method='POST'>";
$result = $con->query("SELECT * FROM registration WHERE pgagg > '$q' ");
echo "<div class='container'>";
echo "<table border='1' class='table table-bordered'>
<tr>
<th>Application ID</th>
<th>Name</th>
<th>Average</th>
<th>Teaching Experience</th>
</tr>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['appid'] . "</td>";
  echo "<td>" . $row['fname'] . "</td>";
  echo "<td>" . $row['pgagg'] . "</td>";
  echo "<td>" . $row['noftexp'] . "</td>";
  echo "</tr>";
  }
echo "</table>";
echo "</div>";
echo "<center><input id='btn-login' name='submit' type='submit' value=' SHORTLIST ABOVE CANDIDATESs ' class='btn  btn-lg btn-success'></center>";
echo "<input type='hidden' name=q value='$q'>";
echo "</form>";
}

mysqli_close($con);
?>