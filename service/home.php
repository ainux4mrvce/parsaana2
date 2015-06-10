<!--Sagar S.N-->
<?php
include('login_authorization.php'); // Includes Login Script

/*if(isset($_SESSION['login_user']))
{
 header("location: login_user.php");
}*/
?>
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link rel="icon" type="image/gif" href="images/collogo.jpg">

 <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css"/>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<style>
    .jumbotron {
    
    margin:0; /*add this*/
  

}
</style>
</head>
<body style="font-family: Segoe UI,Arial">
    
     <div class="container">
        <div class="jumbotron">
            <img src="images/collogo.jpg" align="right" class="img-circle" height="120px" width="120px">
            <p class="text-center" style="font-family: Segoe UI,Arial; font-size: 48px; color: #47A3FF" >Employee Recruitment Portal</p>
            <h2 class="text-center" style="font-family: Segoe UI,Arial; color: #47A3FF">R.V.C.E</h2>
      
        </div>
   
   <!--  <div class="well well-sm">Look at it</div>-->
     <!-- Navbar Starts Here-->
    <nav class="navbar navbar-inverse" >
    <!-- Adding Items to Navbar-->
      <ul class="nav navbar-nav">
        <li class=""><a href="appform.php">Apply Now</a></li>
      </ul>
     

                 <ul class="navbar-form navbar-right">
                <li>
<a href="#signup" class="btn btn-info" data-toggle="modal"><span class="glyphicon glyphicon-log-in"></span>&nbsp; Admin Login</a>
                </li>
            </ul>
  
</nav>
<!-- Navbar Ends Here-->
</div>
     
         <!-- Sign In Modalor POPUP Starts Here-->
    
    <div class="DemoModal2">
    <!-- Launch Modal -->
    
    
    <!-- Modal Contents -->
 <div id="signup" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
           <div class="modal-header">
     <button type="button" class="close" 
             data-dismiss="modal" aria-hidden="true">x</button>
     <h4 class="modal-title text-primary">Sign In</h4>
     
         </div>
     <div class="modal-body">
        <br/>
       <form id="loginform" class="form-horizontal" role="form" method="post">
							<fieldset>
								<div class="row">
									<div class="center-block">
										<!--<img class="profile-img"
											src="./images/collogo.jpg" alt="">-->
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12 col-md-10  col-md-offset-1 ">
										<div class="form-group">
											<div class="input-group">
												<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
														  <!--   <input id="login-username" type="text" class="form-control" name="uname" value="" placeholder="username" required autofocus>-->
						<select class="form-control" id="nature" name="uname" required autofocus>
                                                <option selected disabled>username</option>
                                                <option value="Admin">Admin</option>
                                                <option value="Principal">Principal</option>
                                                <option value="Advisor">Advisor</option>
                                                <option value="Vice Principal">Vice Principal</option>
						<option value="Registrar">Registrar</option>
						<option value="VTU Nominee">VTU Nominee</option>
						<option value="HOD">HOD</option>
                                                </select>
											</div>
										</div>
										<div class="form-group">
											<div class="input-group">
												<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="login-password" type="password" class="form-control" name="pass" placeholder="password" required>
											</div>
										</div>
										<div class="form-group">
											
										<input id="btn-login" name="submit" type="submit" value=" Sign in " class="btn btn-lg btn-primary btn-block">
										<br/>
										<span style="color: red"><center><?php echo $error  ?></center></span>
										</div>
									</div>
								</div>
							</fieldset>
						</form>  
     </div>
            </div>
        </div>
    </div>
</div>
    
     <!-- Sign In Modalor POPUP Ends Here-->
    
</body>