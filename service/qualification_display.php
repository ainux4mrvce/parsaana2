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
    
  <center><h2><u>LIST OF QUALIFICATION</u></h2></center>  
</body>
<?php
require"connect.php";
$result = $con->query("SELECT * from qual");
if(mysqli_num_rows($result))
{
echo "<div class='container'>";
echo "<form action='' method='POST'>";
echo "<table border='1' class='table table-bordered' align='center'>
<tr class='info'>
<th>Q ID</th>
<th>QFID</th>
<th>FROM</th>
<th>TO</th>
<th>POST</th>
<th>ORDER</th>
<th>FROM</th>
<th>TO</th>
<th>FPOST</th>
<th>PENSION</th>
<th>AMOUNT</th>
<th>CHOOSE</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
  echo "<tr>";
   echo "<td>" . $row['qid'] . "</td>";
   $qid=$row['qid'];
  echo "<td>" . $row['qfid'] . "</td>";
  //$uname=$row['name'];
  echo "<td>" . $row['from1'] . "</td>";
  echo "<td>" . $row['to1']  . "</td>";
  echo "<td>" . $row['post'] . "</td>";
  echo "<td>" . $row['order1'] . "</td>";
  echo "<td>" . $row['from2']  . "</td>";
  echo "<td>" . $row['to2'] . "</td>";
   echo "<td>" . $row['fpost'] . "</td>";
    echo "<td>" . $row['pension'] . "</td>";
   echo "<td>" . $row['amount'] . "</td>";
   echo "<td> <button type='submit' name ='qualdel' value='$qid' class='btn btn-warning btn-md'>Delete</button> </td>";
 
 // echo "<td> <button type='submit' name ='uname' value='$uname' class='btn btn-warning btn-md'>Delete</button> </td>";
  echo "</tr>";
  }
echo "</table>";
echo "</form>";
}
if(isset($_POST['qualdel']))
{
    $tobedeleted=$_POST['qualdel'];
   // echo $tobedeleted;
    if($con->query("delete from qual where qid='$tobedeleted'"))
    {
        echo "Employee ID - $tobedeleted Deleted Successfully!";
    }
}
?>