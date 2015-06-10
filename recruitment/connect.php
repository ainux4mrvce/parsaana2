<!--Sagar S.N-->
<?php
//error_reporting(0); //To Hide Server and FilePath Details

// Creating MySql Connection and Assigning into $con Variable
$con=new mysqli('localhost','root','pachi','v5');  


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