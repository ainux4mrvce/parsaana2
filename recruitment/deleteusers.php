<?php
//error_reporting(0); //To Hide Server and FilePath Details

// Creating MySql Connection and Assigning into $con Variable
$con=new mysqli('localhost','root','','user_management');  


//connect_errno = 0  ->SUCCESS
//connect_errno = !0 ->UNSUCCESS

if($con->connect_errno) //returns positive(other than 0)on Unsucess
{
    echo "<h2>Sorry! There's Problem with Database Setup</h2>";
    echo "<strong>Please Contact System Admin</strong>";
}

//else

//echo"Connection Successful!!!";
?>
<!DOCTYPE html>
<html>
<head>
   
    
   <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css"/>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<?php
$uname=$_POST['uname'];
if($result=$con->query("delete * from users where name='$uname' and su='0'"))
{
  echo "<div class='container'>";
     echo "<div class='alert alert-success' id='successmsg'>
        <strong>Success!</strong> User $uname Deleted Successfully!
     <br/>
     <a href='javascript:history.go(-1)'>&laquo;Go Back</a>
     </div>";
  echo "</div>";
}
else
{
    echo"<div class='container'>";
     echo"<div class='alert alert-danger' id='errormsg'>
   <strong>Error!</strong>User $uname Not Deleted
   <a href='javascript:history.go(-1)'>&laquo;Go Back</a>
 </div>";
  echo "</div>";
}

?>