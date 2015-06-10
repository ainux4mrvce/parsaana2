<?php
//error_reporting(0); //To Hide Server and FilePath Details

// Creating MySql Connection and Assigning into $con Variable
$con=new mysqli('localhost','root','','user_management');  


//connect_errno = 0  ->SUCCESS
//connect_errno = !0 ->UNSUCCESS

if($con->connect_errno) //returns positive(other than 0)on Unsucess
{
    echo "<h2>Sorry! There's Problem with Database Setup</h2>";
    echo "<strong>Please Contact System Admin</strong>";
}

//else

//echo"Connection Successful!!!";

?>
<!DOCTYPE html>
<html>
<head>
    <title>Add User</title>
    
   <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css"/>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<center><h3 class="text-info"><u>Delete User Group</u></h3></center>
<?php
echo "<form action='deleteusersgroup.php' method='POST'>";
$result = $con->query("SELECT * from usersgroup");
echo "<div class='container'>";
echo "<table border='1' class='table table-bordered'>
<tr class='info'>
<th>Group Name</th>
<th>Option</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
  echo "<tr>";
  echo "<td>" . $row['groupname'] . "</td>";
  $groupname=$row['groupname'];
  echo "<td> <button type='submit' name ='gname' value='$groupname' class='btn btn-warning btn-xs'>Delete</button> </td>";
  echo "</tr>";
  }
echo "</table>";
echo "</div>";
//echo "<center><input id='btn-login' name='submit' type='submit' value=' SHORTLIST ABOVE CANDIDATES ' class='btn  btn-lg btn-success'></center>";
//echo "<input type='hidden' name=agg value='$agg'>";
//echo "<input type='hidden' name=exp value='$exp'>";
echo "</form>";
?>