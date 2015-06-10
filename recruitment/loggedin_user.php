<!--Sagar S.N-->
<?php
require "connect.php";
//include 'save_reviewed.php';
session_start();
 $user_check=$_SESSION['loggedin_user'];
 $result=$con->query("select username from login where username='$user_check'");
 $row = mysqli_fetch_assoc($result);
 $login_session =$row['username'];
?>
<!DOCTYPE html>

<html>
<head>
    <title>Reviewer</title>
    <link rel="icon" type="image/gif" href="images/collogo.jpg">

 <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css"/>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>'
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
<style>
    .jumbotron {
    
    margin:0; /*add this*/
  

}
</style>
<body style="font-family: Segoe UI,Arial">
     <div class="container">
        <div class="container">
        <div class="jumbotron">
            <img src="images/collogo.jpg" align="right" class="img-circle" height="120px" width="120px">
            <p class="text-center" style="font-family: Segoe UI,Arial; font-size: 48px; color: #47A3FF" >Employee Recruitment Portal</p>
            <h2 class="text-center" style="font-family: Segoe UI,Arial; color: #47A3FF">R.V.C.E</h2>
        </div>
       <!-- <div class="well well-sm">Look at it</div>-->        
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
   <!-- <div class="navbar-header">
      <a class="navbar-brand" href="#"><strong>SHORTLISTED CANDIDATES</strong></a>
    </div>-->
    <div>
      <ul class="nav navbar-nav navbar-right">
       <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span><?php  echo ' Welcome '.$login_session;?> <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
</div>
</body>
</html>
<center><h3 class="text-info"><u>LIST OF SHORTLISTED CANDIDATES</u></h3></center>
<?php
echo "<form action='reviewform.php' method='POST'>";
$result = $con->query("SELECT * FROM save_shortlist");
echo "<div class='container'>";
echo "<table border='1' class='table table-bordered'>
<tr class='info'>
<th>Application ID</th>
<th>Name</th>
<th>Average</th>
<th>Teaching Experience</th>
<th>Candidate to Review</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
  echo "<tr>";
  echo "<td>" . $row['appid'] . "</td>";
  $app=$row['appid'];
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['average'] . "</td>";
  echo "<td>" . $row['notexp'] . "</td>";
  echo "<td> <button type='submit' name ='rev' value='$app' class='btn btn-warning btn-xs'>Review Application ID - $app </button> </td>";
  echo "</tr>";
  }
echo "</table>";
echo "</div>";
//echo "<center><input id='btn-login' name='submit' type='submit' value=' SHORTLIST ABOVE CANDIDATES ' class='btn  btn-lg btn-success'></center>";
//echo "<input type='hidden' name=agg value='$agg'>";
//echo "<input type='hidden' name=exp value='$exp'>";
echo "</form>";

?>

    