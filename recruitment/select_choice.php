<!DOCTYPE html>
<html>
<head>
    <title>Select Choice</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css"/>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<style>
   .btn-outline {
    background-color: transparent;
    color: inherit;
    transition: all .5s;
}

.btn-primary.btn-outline {
    color: #428bca;
}

.btn-success.btn-outline {
    color: #5cb85c;
}

.btn-info.btn-outline {
    color: #5bc0de;
}

.btn-warning.btn-outline {
    color: #f0ad4e;
}

.btn-danger.btn-outline {
    color: #d9534f;
}

.btn-primary.btn-outline:hover,
.btn-success.btn-outline:hover,
.btn-info.btn-outline:hover,
.btn-warning.btn-outline:hover,
.btn-danger.btn-outline:hover {
    color: #fff;
}
</style>
<body style='font-family: Segoe UI,Arial'>
    <div class="container">
        <div class="jumbotron">
            <p class="text-center" style="font-family: Segoe UI,Arial; font-size: 48px; color: #47A3FF" >User Management</p>
            <h2 class="text-center" style="font-family: Segoe UI,Arial; color: #47A3FF">Student Module</h2>
      
        </div>
        
	<div class="row">
         <center>
       <a class="btn btn-success btn-outline btn-lg" href="user_management_student.php">Create Group</a>
    
             
       <a class="btn btn-success btn-outline btn-lg" href="add_user.php">Create Users</a>
   
      
        
         <a class="btn btn-success btn-outline btn-lg" href="delete_user.php">Delete</a>
      
         
         
           <a class="btn btn-success btn-outline btn-lg">Reset Password</a>
           
           <a class="btn btn-success btn-outline btn-lg" href="menu.php">Go Home</a>
          </center> 
    </div>
        
    </div>
</body>
</html>
