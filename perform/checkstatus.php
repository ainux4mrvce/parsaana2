

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

    width: 150px !important;
}
table, th, td {
    border: 1px solid green;
}


    </style>

</head>

<body>
<center>
<img src="images/collogo.jpg"  class="img-circle" height="120px" width="120px">
</center>
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
  




    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js">



</script>

</body><br>
<div class="container">
<form action="start.php" ><input class="btn btn-primary btn-primary custom" type="submit" value="GO BACK"></form>
</div>

</html>

<?php
include("config.php");
$result = mysqli_query($conn,"SELECT name FROM reg");
$storeArray = Array();
while ($row = mysqli_fetch_array($result)) {
    $storeArray[] =  $row['name'];  
}

         $ccc = count($storeArray);
        // echo $ccc;
                    echo '<div class="container">';
                    echo '<div class="row">';
                    echo '<center>';
                    
                    echo "<table><tr><th>EMPLOYEE NAMES</th></tr>";
                   for($i=0;$i<$ccc;$i++)
                   
                 {
                   
                   echo '<tr><td><a href="employeedetails.php?name='.$storeArray[$i].'">'.$storeArray[$i].'</a></td></tr>';
                 }
                   echo "</table>";
                   echo "</center></div></div>";
                          
$conn->close();
?> 