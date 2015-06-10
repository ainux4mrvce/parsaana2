<?php
session_start();
$usernname=$_SESSION['usernname'];
?>
<!DOCTYPE html>

<html>
<head>
    <title>Admin</title>
    <link rel="icon" type="image/gif" href="images/collogo.jpg">

 <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css"/>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
  
<!-- Links for DatePicker-->
  <link rel="stylesheet" href="css/datepicker.css">

        <script src="js/jquery.js"></script>
        <script src="js/bootstrap-datepicker.js"></script>
    <!-- Include Bootstrap Multiselect CSS, JS -->
<script type="text/javascript" src="js/bootstrap-multiselect.js"></script>
<link rel="stylesheet" href="css/bootstrap-multiselect.css" type="text/css"/>
<!-- Initialize the plugin: -->

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
<style>
    .custom {

    width: 180px !important;
    height:120px !important;
}
</style>
</head>

</style>
<body style="font-family: Segoe UI,Arial">
     
       
       
       <!-- <div class="well well-sm">Look at it</div>-->        
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
   <div class="navbar-header">
      <a class="navbar-brand" href="#"><strong>RVCE SERVICE-REGISTRY</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i><strong>ADMIN</strong></i> </a>
    </div>
    <ul class="nav navbar-nav">
        
    </ul>
    <div>
      <ul class="nav navbar-nav navbar-right">
       <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            <span class="glyphicon glyphicon-user"></span><?php  echo ' Signed in as '. $usernname?>
            <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
<center><br/><br/>
    <a href="service.php" class="btn btn-primary btn-primary custom" role="button" value=""><br/><br/>ADD</a>
    <a href="admin_operations.php" class="btn btn-primary btn-primary custom" role="button" value=""><br/><br/>VIEW</a>