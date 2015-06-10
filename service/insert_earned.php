
<?php
//Importing Database_Connection File
require "connect.php";

$from1=$_POST['from1'];
$to1=$_POST['to1'];
$comp=$_POST['comp'];
$elc=$_POST['elc'];
$eol=$_POST['eol'];
$eld=$_POST['eld'];
$tel=$_POST['tel'];
$from2=$_POST['from2'];
$to2=$_POST['to2'];
$no=$_POST['no'];
$bal=$_POST['bal'];

session_start();   
$a = $_SESSION['a'];

$sql = "INSERT INTO `service`.`earned` (`eid`, `eeid`, `from1`, `to1`, `comp`, `elc`, `eol`, `eld`, `tel`, `from2`, `to2`, `no`, `bal`) 
VALUES ('', '$a', 'dfd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);";
//Inserting Received Data from Client into Database STARTS

if ($con->query($sql) === TRUE) {
   //echo "success";

   include "earned.php";
    //  $success="Successfully inserted!";
  // $success1="Your Application Will be Reviewed and If You are Selected We will Contact You at EMAIL - $email";
//require "home.php"; 
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$con->close();

?>
