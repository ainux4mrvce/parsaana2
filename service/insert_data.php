<?php $success=''?>
<!DOCTYPE html>
<html>
<head>
    <title>Service Registry Form</title>
    <link rel="icon" type="image/gif" href="images/collogo.jpg">

 <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css"/>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>

<script>
$(document).ready(function(){
  $(".close").click(function(){
    $("#demo-alert").alert();
  });
});    
</script>
</head>
<?php
//Importing Database_Connection File
require "connect.php";

//if(isset($_POST['submit'])) //Once Submit Button is Clicked
//{
// Receiving From Client STARTS
$_1a=$_POST['1a'];
$_1b=$_POST['1b'];
$_2a=$_POST['2a'];
$_2b=$_POST['2b'];
$_3a=$_POST['3a'];
$_3b=$_POST['3b'];
$_4=$_POST['4'];
$_5=$_POST['5'];
$_6=$_POST['6'];
$_7a=$_POST['7a'];
$_7b=$_POST['7b'];
$_7c=$_POST['7c'];
$_8=$_POST['8'];
$_9=$_POST['9'];
$_10=$_POST['10'];
$_11=$_POST['11'];
$_12=$_POST['12'];

echo $_1a;
 // Receiving From Client ENDS

if($insert=$con->query("insert into ser1(id,s1a,s1b,s2a,s2b,s3a,s3b,s4,s5,s6,s7a,s7b,s7c,s8,s9,s10,s11,s12) VALUES(' ',['$_1a'],'{$_1b}','{$_2a}','{$_2b}','{$_3a}','{$_3b}','{$_4}',
'{$_5}','{$_6}','{$_7a}','{$_7b}','{$_7c}','{$_8}','{$_9}','{$_10}','{$_11}','{$_12}')"))
{
   $success="Successfully inserted!";
   $success1="Your Application Will be Reviewed and If You are Selected We will Contact You at EMAIL - $email";    
}
else
{
    echo "Failed to insert";
}
//Inserting Received Data from Client into Database ENDS

//}//isset ENDS Here
?>
<body style="font-family: Segoe UI,Arial">
    <br/>
    <div class="container">
     <div class="alert alert-success" id="demo-alert">
        <a href="#" class="close" data-dismiss="alert">×</a>
        <?php echo "<strong><h2>$success</h2></strong>"?>
        <?php echo "<strong><h4>$success1</h4></strong>"?>
        <a href="home.php">Go Home</a>
   </div>
    </div>
</body>
