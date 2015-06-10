<?php  session_start();?>
<!DOCTYPE html>

<html>
<head>
    <title>Login</title>
    <link rel="icon" type="image/gif" href="images/user.png">
   <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css"/>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<style>
    body {
  padding-top: 40px;
  padding-bottom: 40px;
  position: relative;
}

body::before {
  background: url(images/bg.jpg) no-repeat center center fixed;
  content: '';
  z-index: -1;
  width: 100%;
  height: 100%;
  position:absolute; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  -webkit-filter: blur(5px);
  -moz-filter: blur(5px);
  -o-filter: blur(5px);
  -ms-filter: blur(5px);
  filter: blur(5px);
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
 

    <div class="container" style="margin-top:100px">
		<div class="pull-left"><a href="/rvce/index.html" class="btn btn-warning" role="button">Go Back</a></div>
<center>
		<div class="row">
			<div class="col-sm-6 col-md-4 col-md-offset-4">
			
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="text-primary">Sign in to Continue</h4>
					</div>

					<div class="panel-body">
						 <form id="loginform" class="form-horizontal" action="login1.php" role="form" method="post">
							<fieldset>
								<div class="row">
									<div class="center-block">
										<img class="profile-img" src="images/user.png" alt="">
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12 col-md-10  col-md-offset-1 ">
										<div class="form-group">
											<div class="input-group">
												<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
														  <!--   <input id="login-username" type="text" class="form-control" name="uname" value="" placeholder="username" required autofocus>-->
						<input id="login-password" type="text" class="form-control" name="username" placeholder="username" required>
											</div>
										</div>
										<div class="form-group">
											<div class="input-group">
												<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="login-password" type="password" class="form-control" name="password" placeholder="password" required>
											</div>
										</div>
										<div class="form-group">
											
										<input id="btn-login" name="submit" type="submit" value=" Sign in " class="btn btn-lg btn-primary btn-block">
										<br/>
                                                                              <?php
                                                                                $error='';
                                                                               if(isset($_SESSION['error']))
                                                                               {
                                                                                $error=$_SESSION['error'];
                                                                               echo "<center style='color:red'>$error<span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span></center>";
                                                                               
                                                                                unset($_SESSION['error']);
                                                                               }
                                                                               ?>
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
   </center>
</body>
</html>
