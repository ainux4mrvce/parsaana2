<!--
<?php
session_start();
$success=''?>
<!DOCTYPE html>
<html>
<head>
    <title>Service Registry Form</title>
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
</head>-->
<?php
//Importing Database_Connection File
require "connect.php";

//if(isset($_POST['submit'])) //Once Submit Button is Clicked
//{
// Receiving From Client STARTS
$ename=$_POST['ename'];
$eaddress=$_POST['eaddress'];
$fname=$_POST['fname'];
$faddress=$_POST['faddress'];
$hname=$_POST['hname'];
$haddress=$_POST['haddress'];
$nat=$_POST['nat'];
$caste=$_POST['caste'];
$dob=$_POST['dob'];
$atp=$_POST['atp'];
$sc=$_POST['sc'];
$pdq=$_POST['pdq'];
$ptq=$_POST['ptq'];
$height=$_POST['height'];
$mark=$_POST['mark'];
$paddress=$_POST['paddress'];
$htown=$_POST['htown'];

 // Receiving From Client ENDS
$sql = "INSERT INTO `service`.`ser1` (`id`, `ename`, `eaddress`, `fname`, `faddress`, `hname`, `haddress`, `nat`, `caste`, `dob`, `atp`, `sc`, `pdq`, `ptq`, `height`, `mark`, `paddress`, `htown`)
 VALUES (NULL, '$ename', '$eaddress', '$fname', '$faddress', '$hname', '$haddress', '$nat', '$caste', '$dob', '$atp', '$sc', '$pdq', '$ptq', '$height', '$mark', '$paddress', '$htown')";
//Inserting Received Data from Client into Database STARTS

if ($con->query($sql) === TRUE) {
  $last_id = $con->insert_id;


$_SESSION['a']=$last_id;
  include "qualify.php";
   /* $success="Successfully inserted!";
   $success1="Your Application Will be Reviewed and If You are Selected We will Contact You at EMAIL - $email";
require "home.php"; */
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$con->close();
?>
<!--
<body style="font-family: Segoe UI,Arial">
    <br/>
    <div class="container">
     <div class="alert alert-success" id="demo-alert">
        <a href="#" class="close" data-dismiss="alert">×</a>
        <?php// echo "<strong><h2>$success</h2></strong>"?>
        <?php //echo "<strong><h4>$success1</h4></strong>"?>
        <a href="home.php">Go Home</a>
   </div>
    </div>
</body>*/-->