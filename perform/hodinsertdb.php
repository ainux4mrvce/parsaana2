<?php
$eid=$_POST['eid'];
$ho1=$_POST['ho1'];
$ho2=$_POST['ho2'];
$ho3=$_POST['ho3'];
$ho4=$_POST['ho4'];
$ho5=$_POST['ho5'];
$ho6=$_POST['ho6'];
$ho7=$_POST['ho7'];
$ho8=$_POST['ho8'];
$ho9=$_POST['ho9'];
$ho10=$_POST['ho10'];
$ho11=$_POST['ho11'];

include("config.php");
$sql = "UPDATE reg SET ho1='$ho1',ho2='$ho2',ho3='$ho3', ho4='$ho4', ho5='$ho5', ho6='$ho6', ho7='$ho7', ho8='$ho8', ho9='$ho9', ho10='$ho10',ho11='$ho11'  WHERE eid='$eid'";

if ($conn->query($sql) === TRUE) {
    echo "<center>Thank you HOD.... Your Details Submitted Successfully</center>";
    echo '<center><a href="hod.php">CLICK HERE TO GO BACK</a></center>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();









?>