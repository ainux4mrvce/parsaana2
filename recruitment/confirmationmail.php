<?php
require("connect.php");

$candidateid=$_POST['rev'];
$result=$con->query("select fname,lname from registration where appid='$candidateid'");
$row=mysqli_fetch_array($result);

echo "Dear ".$row['fname']." "."Need to Implement E-Mail Feature :-(";

?>