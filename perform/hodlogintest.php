<?php
$name=$_POST['username'];
$pass=$_POST['password'];


if (($name=="hod") &&($pass=="hod"))
{
header("Location:hod.php");

}

else

{ header("Location:start.php");}

?>
