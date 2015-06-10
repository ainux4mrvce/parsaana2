<?php
$name=$_POST['username'];
$pass=$_POST['password'];


if (($name=="principal") &&($pass=="principal"))
{
header("Location:principal.php");

}

else

{ header("Location:start.php");}

?>
