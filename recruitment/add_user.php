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
    <title>Add User</title>
    
   <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css"/>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>

<style>
    #header
{
    background-color:#1E90FF;
    color:white;
    text-align:center;
    padding:5px;
}

</style>
<style>
    .panel-heading {
    padding: 5px 15px;
}

.panel-footer {
	padding: 1px 15px;
	color: #A0A0A0;
}

.profile-img {
	width: 96px;
	height: 96px;
	margin: 0 auto 10px;
	display: block;
	-moz-border-radius: 50%;
	-webkit-border-radius: 50%;
	border-radius: 50%;
}
</style>
<style>
     table,
    thead,
    tr,
    tbody,
    th,
    td {
        text-align: center;
    }
</style>
<body style="font-family: Segoe UI,Arial">
 <div id="header">
<h2>Add User</h2>
</div>

    
	
       
       <div class="pull-right"><a href='javascript:history.go(-1)'></span> &laquo;Go Back</a></div>
       
        
    

    <div class="container" style="margin-top:40px">
		<div class="row">
			<div class="col-sm-6 col-md-4 col-md-offset-4">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="text-primary">User</h4>
					</div>
					<div class="panel-body">
					    <form action="" method="post">

					    <fieldset>
						<legend>Create User</legend>
						</fieldset>
					  
					   <div class="col-xs-12">
                                            <label for="dept">Username</label>
			                 <input type="text" name="uname" id="uname" class="form-control input-sm">
			    		 </div>
					   
					   <div class="col-xs-12">
                                            <label for="dept">Password</label>
			                 <input type="password" name="password" id="password" class="form-control input-sm">
			    		<br/>
					 </div>
					   
					
						<legend>Create User Group</legend>
						
					   
					   <div class="col-xs-12">
                                            <label for="dept">Group</label>
			                 <?php
    
   /*  $result = $con->query("select * from usersgroup");
     echo '<select class="form-control input-md" name="groupname">';
      echo '<option selected disabled>Choose Group Name</option>';
      // Loop through the query results, outputing the options one by one
      while($row = mysqli_fetch_array($result))
      {
        echo '<option value="'.$row['groupname'].'">'.$row['groupname'].'</option>';
      }
      echo '</select>';
      */?>
			    		 </div>
					   
					   <div class="col-xs-12">
                                            <label for="dept">Module Id</label>
			                 <input type="text" name="moduleid" id="moduleid" value="1" readonly class="form-control input-sm">
			    		<br/>
					 </div>
					   
					   <div class="col-xs-12">
                                          <input type="submit" name ="submit" class="btn btn-block btn-info" value="Create">
			    		<br/>
					 </div>
					    </form>
					</div>
					
					
			    
                </div>
				
			</div>
			
			
		</div>
	</div>
</body>
</html>
<?php
$error='';
if(isset($_POST['submit'])) //Once Submit Button is Clicked
{
   if(empty($_POST['uname']) || empty($_POST['password'])||empty($_POST['moduleid'])) //Checking Whether Textboxes are Empty or Not
   {
     echo"<div class='container'>";
     echo"<div class='alert alert-danger' id='errormsg'>
   <strong>Error!</strong> Please Enter All the Fields
 </div>";
  echo "</div>";
   }
   else
   {
     $uname=$_POST['uname']; 
     $pass=$_POST['password'];
     $options = ['cost' =>10,];
     $p=password_hash("$pass",PASSWORD_BCRYPT,$options);
     $groupname=$_POST['groupname'];
     $moduleid=$_POST['moduleid'];
     
     $result1=$con->query("insert into users(name,password,groupname,module_id,institution_id)values('{$uname}','{$p}','{$groupname}','{$moduleid}','{1}')");
     if($result1)
     {
      
        echo"<div class='container'>";
       echo "<div class='alert alert-success' id='successmsg'>
   <strong>Success!</strong> User $uname Added Successfully!
   <br/>
   <a href='javascript:history.go(-1)'>&laquo;Go Back</a>
  </div>";
  echo "</div>";
     }
     else
     {
        echo"<div class='container'>";
     echo"<div class='alert alert-danger' id='errormsg'>
   <strong>Error!</strong>User $uname Not Added
 </div>";
  echo "</div>";
     }
   }
}
?>