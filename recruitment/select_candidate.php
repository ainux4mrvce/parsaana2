<!--Sagar S.N-->
<!DOCTYPE html>
<html>
<head>
    <title>Select Candidate</title>
    <link rel="icon" type="image/gif" href="images/collogo.jpg">

 <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css"/>
 <script type="text/javascript" src="js/jquery.min.js"></script>
 <script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body style='font-family: Segoe UI,Arial'>
     <div class="container" style="margin-top:140px">
		<div class="row">
			<div class="col-sm-6 col-md-4 col-md-offset-4">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="text-primary">Select Candidate</h4>
					</div>
					<div class="panel-body">
<?php
require "connect.php";
$result = $con->query("select * from save_shortlist"); // Run your query
 echo "<form action='reviewform.php' method='POST'>";
echo '<select class="form-control input-md" name="appid">'; // Open your drop down box
echo '<option selected disabled>Choose Applicant ID</option>';
// Loop through the query results, outputing the options one by one
while($row = mysqli_fetch_array($result))
{
   echo '<option value="'.$row['appid'].'">'.$row['appid'].'</option>';
}

//echo "<center><input id='btn-login' name='submit' type='submit' value=' REVIEW ' class='btn  btn-md-2 btn-success form-control'></center>";

echo '</select>';
//echo "<center><input id='btn-login' name='submit' type='submit' value=' REVIEW ' class='btn  btn-md-2 btn-success form-control'></center>";

echo '<div class="form-group">
  
					   <div class="col-md-12">
					    <br/>
					    <center>
                                       <!-- <button type="button" class="btn btn-info btn-md">APPLY</button>-->
					<input id="btn-login" name="submit" type="submit" value=" REVIEW APPLICANT " class="btn  btn-md-2 btn-success form-control">
					</center>
					   </div>
                                           
                                           ';
                                           echo"</form>"

?>
</div>
</body>
