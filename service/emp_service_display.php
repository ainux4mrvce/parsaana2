<!DOCTYPE html>
<html>
<head>
    <title>Report</title>
     <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css"/>
     <script type="text/javascript" src="js/jquery.min.js"></script>
     <script type="text/javascript" src="js/bootstrap.min.js"></script>
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
</head>
<body style="font-family: Segoe UI,Arial">
    
  <center><h2><u>LIST OF SERVICE</u></h2></center>  
</body>
<?php
require"connect.php";
$result = $con->query("SELECT * from ser1");
if(mysqli_num_rows($result))
{
echo "<div class='container'>";
echo "<form action='' method='POST'>";
echo "<table border='1' class='table table-bordered' align='center'>
<tr class='info'>
<th>ID</th>
<th>ENAME</th>
<th>E ADDRESS</th>
<th>F NAME</th>
<th>F ADDRESS</th>
<th>H NAME</th>
<th>H ADDRESS</th>
<th>NAT</th>
<th>CASTE</th>
<th>DOB</th>
<th>ATP</th>
<th>SC</th>
<th>PDQ</th>
<th>PTQ</th>
<th>HEIGHT</th>
<th>MARK</th>
<th>PADDRESS</th>
<th>HTOWN</th>

</tr>";

while($row = mysqli_fetch_array($result))
{
  echo "<tr>";
   echo "<td>" . $row['id'] . "</td>";
   $eid=$row['id'];
  echo "<td>" . $row['ename'] . "</td>";
  //$uname=$row['name'];
  echo "<td>" . $row['eaddress'] . "</td>";
  echo "<td>" . $row['fname']  . "</td>";
  echo "<td>" . $row['faddress'] . "</td>";
  echo "<td>" . $row['hname']  . "</td>";
  echo "<td>" . $row['haddress'] . "</td>";
  echo "<td>" . $row['nat'] . "</td>";
  echo "<td>" . $row['caste']  . "</td>";
  echo "<td>" . $row['dob'] . "</td>";
   echo "<td>" . $row['atp'] . "</td>";
    echo "<td>" . $row['sc'] . "</td>";
   echo "<td>" . $row['pdq'] . "</td>";
   echo "<td>" . $row['ptq'] . "</td>";
   echo "<td>" . $row['height'] . "</td>";
   echo "<td>" . $row['mark'] . "</td>";
   echo "<td>" . $row['paddress'] . "</td>";
   echo "<td>" . $row['htown'] . "</td>";
   //echo "<td> <button type='submit' name ='eiddel' value='$eid' class='btn btn-warning btn-md'>Delete</button> </td>";
 
 // echo "<td> <button type='submit' name ='uname' value='$uname' class='btn btn-warning btn-md'>Delete</button> </td>";
  echo "</tr>";
  }
echo "</table>";
echo "</form>";
}

if(isset($_POST['eiddel']))
{
    $tobedeleted=$_POST['eiddel'];
   // echo $tobedeleted;
    if($con->query("delete from ser1 where id='$tobedeleted'"))
    {
         echo "Employee ID - $tobedeleted Deleted Successfully!";
    }
}
?>