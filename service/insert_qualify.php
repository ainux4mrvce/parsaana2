
<?php
//Importing Database_Connection File
require "connect.php";
//$a =$_POST['qfid'];
$from1=$_POST['from1'];
$to1=$_POST['to1'];
$post=$_POST['post'];
$order1=$_POST['order1'];
$from2=$_POST['from2'];
$to2=$_POST['to2'];
$fpost=$_POST['fpost'];
$pension=$_POST['pension'];
$amount=$_POST['amount'];

session_start();   
$a= $_SESSION['a'];
/*
$strSQL = "SELECT id FROM `service`.`ser1` where id LIMIT 0,1";
$result = mysqli_query($con,$strSQL) or die('SQL Error :: '.mysql_error());
$row = mysqli_fetch_assoc($result);
$a=$row['id'];
$a;*/
$sql = "INSERT INTO `service`.`qual` (`qid`, `qfid`, `from1`, `to1`, `post`, `order1`, `from2`, `to2`, `fpost`, `pension`, `amount`) 
VALUES ('', '$a', '$from1', '$to1', '$post', '$order1', '$from2', '$to2', '$fpost', '$pension', '$amount')";
//Inserting Received Data from Client into Database STARTS

if ($con->query($sql) === TRUE) {
   //echo "success";
	//echo $last_id;
   include "history.php";
    //  $success="Successfully inserted!";
  // $success1="Your Application Will be Reviewed and If You are Selected We will Contact You at EMAIL - $email";
//require "home.php"; 
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$con->close();

?>
