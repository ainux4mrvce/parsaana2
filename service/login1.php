<html>
<head><link rel="stylesheet" href="screen.css" type="text/css" media="screen, projection">
<link rel="stylesheet" href="print.css" type="text/css" media="print">
<!--[if IE]><link rel="stylesheet" href="ie.css" type="text/css" media="screen, projection"><![endif]-->
</head>
<div class="container showgrid">
<?php
session_start();

$username=$_POST['username'];
$password=$_POST['password'];
if($username && $password)
{
$link = mysqli_connect('localhost', 'root', 'pachi','service'); //changet the configuration in required
if (!$link) {
    die('Could not connect: ' . mysqli_error());
}
//mysqli_select_db('petrolpump');
//$query="SELECT * FROM login  WHERE username='$username'";
$result=$link->query("SELECT * FROM login  WHERE username='$username'");
$numrows=mysqli_num_rows($result);
if($numrows!=0)
{
while($row=mysqli_fetch_array($result))
{
$dbusername=$row['username'];
$dbpassword=$row['password'];

}
//check to see if they match
if($username==$dbusername && $password==$dbpassword)
{
    $_SESSION['usernname']="$dbusername";
    if($dbusername=="admin")
    {
        header('location:admin_select.php');

    }
    else
    {
        header('location:emp_operations.php');

    }
}
else
{
echo "Incorrect password";
}

}
else
{
 $_SESSION['error']="Invalid Credentials";
 header('location:login.php');
}
}
else
{
die("Please enter all the details!");
}
?>
</div>
</html>