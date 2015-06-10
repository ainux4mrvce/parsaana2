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
    
  <center><h2><u>LIST OF HISTORY</u></h2></center>  
</body>
<?php
require"connect.php";
$result = $con->query("SELECT * from hist");
if(mysqli_num_rows($result))
{
echo "<div class='container'>";
echo "<form action='' method='POST'>";
echo "<table border='1' class='table table-bordered' align='center'>
<tr class='info'>
<th>H ID</th>
<th>EHID</th>
<th>FROM</th>
<th>TO</th>
<th>SUB</th>
<th>OFF</th>
<th>POST</th>
<th>EVENT</th>
<th>REMARKS</th>

</tr>";

while($row = mysqli_fetch_array($result))
{
  echo "<tr>";
   echo "<td>" . $row['hid'] . "</td>";
   $hid=$row['hid'];
  echo "<td>" . $row['ehid'] . "</td>";
  //$uname=$row['name'];
  echo "<td>" . $row['from1'] . "</td>";
  echo "<td>" . $row['to1']  . "</td>";
  echo "<td>" . $row['sub'] . "</td>";
  echo "<td>" . $row['off'] . "</td>";
  echo "<td>" . $row['post']  . "</td>";
  echo "<td>" . $row['event'] . "</td>";
   echo "<td>" . $row['remarks'] . "</td>";
  // echo "<td> <button type='submit' name ='hiddel' value='$hid' class='btn btn-warning btn-md'>Delete</button> </td>";
 
 // echo "<td> <button type='submit' name ='uname' value='$uname' class='btn btn-warning btn-md'>Delete</button> </td>";
  echo "</tr>";
  }
echo "</table>";
echo "</form>";
}

if(isset($_POST['hiddel']))
{
    $tobedeleted=$_POST['hiddel'];
   // echo $tobedeleted;
    if($con->query("delete from hist where hid='$tobedeleted'"))
    {
         echo "Employee ID - $tobedeleted Deleted Successfully!";
    }
}
?>