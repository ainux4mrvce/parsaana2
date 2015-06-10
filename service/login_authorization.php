<!--Sagar S.N-->
<?php
 require "connect.php";
 
session_start();  //Session Started, Note: It Should be first line in PHP Script
$error='';

if(isset($_POST['submit'])) //Once Submit Button is Clicked
{
   if(empty($_POST['uname']) || empty($_POST['pass'])) //Checking Whether Textboxes are Empty or Not
   {
     $error="Please Enter Valid Credentials";          //Setting Message to $error Variable
   }
   else
   {
    //
    $uname=$_POST['uname']; //receiving values sent by html using $_POST and assigning it to Local Variable
    $pass=$_POST['pass'];
    
    
    
    // To protect MySQL injection for Security purpose STARTS
        $uname = stripslashes($uname);
        $pass = stripslashes($pass);
       // $uname = mysqli_real_escape_string($uname);
       // $pass= mysqli_real_escape_string($pass);
    // To protect MySQL injection for Security purpose ENDS
    
    
    // SQL Query to Check Whether User Exists and Retrieving Username
    $result=$con->query("select username from login where username='$uname' AND password='$pass'");
    $row = mysqli_fetch_array ($result);
    $admin=$row['username'];
    //echo "$principal";
     $rows=mysqli_num_rows($result);
    if($admin=="Admin")
    {
        $_SESSION['loggedin_user']= $uname;
        header("location: filter.php");
    }
    //Checking Whether Row exist in $result Result Set 
   else if($admin=="Principal")
   {
        $_SESSION['loggedin_user']= $uname;
        header("location: loggedin_principal.php");
   }
    
 else if($rows==1)
    {
        $_SESSION['loggedin_user']= $uname;
        header("location: loggedin_user.php");
    }
    else
    {
        $error="Please Enter Valid Credentials";
    }
    
   }
}

?>