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
    
  <center><h2><u>LIST OF EARNED</u></h2></center>  
</body>
<?php
require"connect.php";
$result = $con->query("SELECT * from earned");
if(mysqli_num_rows($result))
{
echo "<div class='container'>";
echo "<form action='' method='POST'>";
echo "<table border='1' class='table table-bordered' align='center'>
<tr class='info'>
<th>Employee ID</th>
<th>EEID</th>
<th>FROM</th>
<th>TO</th>
<th>COMP</th>
<th>ELC</th>
<th>EOL</th>
<th>ELD</th>
<th>TEL</th>
<th>FROM</th>
<th>TO</th>
<th>NO</th>
<th>BAL</th>
<th>CHOOSE</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
  echo "<tr>";
   echo "<td>" . $row['eid'] . "</td>";
   $eid=$row['eid'];
  echo "<td>" . $row['eeid'] . "</td>";
  //$uname=$row['name'];
  echo "<td>" . $row['from1'] . "</td>";
  echo "<td>" . $row['to1']  . "</td>";
  echo "<td>" . $row['comp'] . "</td>";
  echo "<td>" . $row['elc'] . "</td>";
  echo "<td>" . $row['eol']  . "</td>";
  echo "<td>" . $row['eld'] . "</td>";
   echo "<td>" . $row['tel'] . "</td>";
  echo "<td>" . $row['from2'] . "</td>";
  echo "<td>" . $row['to2']  . "</td>";
  echo "<td>" . $row['no'] . "</td>";
  echo "<td>" . $row['bal'] . "</td>";
   echo "<td> <button type='submit' name ='eiddel' value='$eid' class='btn btn-warning btn-md'>Delete</button> </td>";
 
 // echo "<td> <button type='submit' name ='uname' value='$uname' class='btn btn-warning btn-md'>Delete</button> </td>";
  echo "</tr>";
  }
echo "</table>";
echo "</form>";
}

if(isset($_POST['eiddel']))
{
    $tobedeleted=$_POST['eiddel'];
   //echo $tobedeleted;
    if($con->query("delete from earned where eid='$tobedeleted'"))
    {
         echo "Employee ID - $tobedeleted Deleted Successfully!";
         
    }
}
?>