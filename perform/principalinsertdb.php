<?php
$eid=$_POST['eid'];
$pr1=$_POST['pr1'];
$pr2=$_POST['pr2'];
$pr3=$_POST['pr3'];
$pr4=$_POST['pr4'];
$pr5=$_POST['pr5'];
$pr6=$_POST['pr6'];
$pr7=$_POST['pr7'];
$pr8=$_POST['pr8'];
$pr9=$_POST['pr9'];
$pr10=$_POST['pr10'];
$pr11=$_POST['pr11'];

include("config.php");



$sql = "UPDATE reg SET pr1='$pr1',pr2='$pr2',pr3='$pr3', pr4='$pr4', pr5='$pr5', pr6='$pr6', pr7='$pr7', pr8='$pr8', pr9='$pr9', pr10='$pr10',pr11='$pr11'  WHERE eid='$eid'";

if ($conn->query($sql) === TRUE) {
    echo "<center>Thank you Principal.... Your Details Submitted Successfully</center>";
    echo '<center><a href="principal.php">CLICK HERE TO GO BACK</a></center>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();









?>