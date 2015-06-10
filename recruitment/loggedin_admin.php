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
    <title>Admin Login</title>
    <link rel="icon" type="image/gif" href="images/collogo.jpg">

    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css"/>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<style>
    .jumbotron {
    
    margin:0; /*add this*/
  

}
</style>
<body>
     <div class="container">
        <div class="jumbotron" >
            <img src="images/collogo.jpg" align="right" class="img-circle" height="120px" width="120px">
            <p class="text-center" style="font-family: Segoe UI,Arial; font-size: 48px; color: #47A3FF">Employee Recruitment Portal</p>
            <h2 class="text-center" style="font-family: Segoe UI,Arial; color: #47A3FF">R.V.C.E</h2>
      </div>
       <!-- <div class="well well-sm">Look at it</div>-->        
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div>
      <ul class="nav navbar-nav">
        <li class=""><a href="filter.php">Shortlist Candidates</a></li>
        <li class=""><a href="select_candidate.php">Review Applicant</a></li>
        <li class=""><a href="evaluation.php">View Consolidated Evaluation</a></li>
      </ul>
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