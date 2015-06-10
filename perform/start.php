<?php
session_start();
session_destroy();


?>

<!DOCTYPE html>
<html>
<body>


</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PERFORMANCE TRACKING</title>
    <link rel="icon" type="image/gif" href="images/collogo.jpg">

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- success: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
.custom {

    width: 300px !important;
    height:400px !important;
}
table, th, td {
    border: 1px solid green;
}


    </style>

</head>

<body>

<div class="container">
        <div class="jumbotron">
            <img src="images/collogo.jpg" align="right" class="img-circle" height="120px" width="120px">
            <p class="text-center" style="font-family: Segoe UI,Arial; font-size: 48px; color: #47A3FF" >Employee Performance Tracking</p>
            <h2 class="text-center" style="font-family: Segoe UI,Arial; color: #47A3FF">R.V.C.E</h2>
      
        </div>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                   
                </button>
               
            </div>
           
                
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
<div class="pull-left"><a href="/rvce/index.html" class="btn btn-warning" role="button">Go Back</a></div>  
<div class="container"><hr>
<form action="checkstatus.php" ><CENTER><input class="btn btn-primary btn-primary" type="submit" value="EMPLOYEE VIEW DETAILS AND TAKE PRINTOUT"/></CENTER></form>
</div>



<div class="container"><br><br>
 <div class="row">
   <div class="col-lg-4">
    <form action="employee.php" >
    <input class="btn btn-primary btn-primary custom" type="submit" value="EMPLOYEE SELF APPRAISAL FORM"/>
    </form>
   </div>
    <div class="col-lg-4">
<form action="hodlogin.php" >
    <input class="btn btn-primary btn-primary custom" type="submit" value="HOD Login"/>
    </form>
   </div>
  <div class="col-lg-4">
<form action="principallogin.php" >
    <input class="btn btn-primary btn-primary custom" type="submit" value="Principal Login"/>
    </form>
   </div>
</div>

</div>



    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js">



</script>

</body>

</html>
