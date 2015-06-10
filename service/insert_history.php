
<?php
//Importing Database_Connection File
require "connect.php";

$from1=$_POST['from1'];
$to1=$_POST['to1'];
$post=$_POST['post'];
$sub=$_POST['sub'];
$off=$_POST['off'];
$event=$_POST['event'];
$remarks=$_POST['remarks'];

session_start();   
$a = $_SESSION['a'];

$sql = "INSERT INTO `service`.`hist` (`hid`, `ehid`, `from1`, `to1`, `sub`, `off`, `post`, `event`, `remarks`) 
VALUES ('', '$a', '$from1', '$to1', '$sub', '$off', '$post', '$event', '$remarks');";
//Inserting Received Data from Client into Database STARTS

if ($con->query($sql) === TRUE) {
   //echo "success";

  // include "earned.php";
    echo "Successfully inserted!";
  // $success1="Your Application Will be Reviewed and If You are Selected We will Contact You at EMAIL - $email";
//require "home.php"; 
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$con->close();

?>
