<!DOCTYPE html>
<?php
require "connect.php";
$var=$_POST['rev'];
$result=$con->query("select * from registration where appid = $var");
while($row = mysqli_fetch_array($result))
{
$fname=$row['fname'];

$degree=$row['degree'];
$date1=$row['date1'];
$university=$row['university'];
$college=$row['college'];
$agg=$row['agg'];

$pdegree=$row['pdegree'];
$pdate=$row['pdate'];
$puniversity=$row['puniversity'];
$pcollege=$row['pcollege'];
$pagg=$row['pagg'];

$udegree=$row['udegree'];
$udate=$row['udate'];
$uuniversity=$row['uuniversity'];
$ucollege=$row['ucollege'];
$uagg=$row['uagg'];

$pgdegree=$row['pgdegree'];
$pgdate=$row['pgdate'];
$pguniversity=$row['pguniversity'];
$pgcollege=$row['pgcollege'];
$pgagg=$row['pgagg'];

$phdegree=$row['phdegree'];
$phdate=$row['phdate'];
$phuniversity=$row['phuniversity'];
$phcollege=$row['phcollege'];
$phagg=$row['phagg'];

$odegree=$row['odegree'];
$odate=$row['odate'];
$ouniversity=$row['ouniversity'];
$ocollege=$row['ocollege'];
$oagg=$row['oagg'];

$noftexp=$row['noftexp'];
$nofiexp=$row['nofiexp'];
$nofrexp=$row['nofrexp'];


}

?>
<html>
<head>
    <title>Review Applicant</title>
    <link rel="icon" type="image/gif" href="images/collogo.jpg">
   <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css"/>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>


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
<body style="font-family: Segoe UI,Arial">
    <div class="pull-left"><a href="javascript:history.go(-1)" class="btn btn-warning" role="button">&laquo;Go Back</a></div>
    <h2>
       <center><b>R.V College of Engineering</b></center>
    </h2>

    <div class="container" style="margin-top:40px">
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="text-primary">Review Applicant</h4>
					</div>
					<div class="panel-body">
						<form action="save_reviewed.php" method="post" role="form">
                                                    
                                                    <div class="form-group">
                                                     <div class="col-md-12">
                                         <label for="post">Application ID</label>
			                 <input type="text" name="appid" value="<?php echo $var ?>" id="name" class="form-control input-sm">  
			    		 </div>
                                         </div>
						    <div class="form-group">
                                                     <div class="col-md-12">
                                         <label for="post"><br/>Name of Candidate</label>
			                 <input type="text" name="name" value="<?php echo $fname ?>" id="name" class="form-control input-sm">  
			    		 </div>
                                         </div>
                                  
			    		 <div class="form-group">
                                            <div class="col-md-12">
                                        <fieldset>
						<legend><br/>Qualification Details</legend>
						</fieldset>
                                            </div>
                                        </div>
				     
				     <div class="form-group">
                                            <div class="col-md-12">
				     <table width="100%">
					<tr>
					    <td>
						<label for="dd">SSLC</label>
					    </td>
					    <td>
						
						<input type="text" name="degree" value="<?php echo $degree ?>" id="degree" class="form-control input-sm" placeholder="Specialization(Name of Degree)">
						
					    </td>
					    <td>
						
                                        
			                 <input  type="text" placeholder="Date/Year of Passed" name="date1" value="<?php echo $date1 ?>"id="example1" class="form-control input-sm">
                                          
                                        
					    </td>
					    <td>
						
						<input type="text" name="university" id="university" value="<?php echo $university ?>"class="form-control input-sm" placeholder="Name of University">
						
					    </td>
					<td>
						
						<input type="text" name="college" id="college" value="<?php echo $college ?>" class="form-control input-sm" placeholder="Name of College/School">
						
					    </td>
					<td>
						
						<input type="text" name="agg" id="agg" value="<?php echo $agg ?>" class="form-control input-sm" placeholder="Aggregate/Percentage">
						
					    </td>
					
					</tr>
					<tr>
					    <td>
						<br/>
					    </td>
					</tr>
					
					<tr>
					    <td>
						<label for="dd">PUC/+2</label>
					    </td>
					    <td>
						
						<input type="text" name="pdegree" value="<?php echo $pdegree ?>" id="pdegree" class="form-control input-sm" placeholder="Specialization(Name of Degree)">
						
					    </td>
					    <td>
						
                                        
			                 <input  type="text" placeholder="Date/Year of Passed" name="pdate" value="<?php echo $pdate ?>"id="example1" class="form-control input-sm">
                                          
                                        
					    </td>
					    <td>
						
						<input type="text" name="puniversity" id="puniversity" value="<?php echo $puniversity ?>"class="form-control input-sm" placeholder="Name of University">
						
					    </td>
					<td>
						
						<input type="text" name="pcollege" id="pcollege" value="<?php echo $pcollege ?>" class="form-control input-sm" placeholder="Name of College/School">
						
					    </td>
					<td>
						
						<input type="text" name="pagg" id="pagg" value="<?php echo $pagg ?>" class="form-control input-sm" placeholder="Aggregate/Percentage">
						
					    </td>
					</tr>
					
					<tr>
					    <td>
						<br/>
					    </td>
					</tr>
					
					<tr>
					    <td>
						<label for="dd">Under Graduate</label>
					    </td>
					    <td>
						
						<input type="text" name="udegree" value="<?php echo $udegree ?>" id="ugdegree" class="form-control input-sm" placeholder="Specialization(Name of Degree)">
						
					    </td>
					    <td>
						
                                        
			                 <input  type="text" placeholder="Date/Year of Passed" name="udate" value="<?php echo $udate ?>"id="example1" class="form-control input-sm">
                                          
                                        
					    </td>
					    <td>
						
						<input type="text" name="uuniversity" id="pguniversity" value="<?php echo $uuniversity ?>"class="form-control input-sm" placeholder="Name of University">
						
					    </td>
					<td>
						
						<input type="text" name="ucollege" id="college" value="<?php echo $ucollege ?>" class="form-control input-sm" placeholder="Name of College/School">
						
					    </td>
					<td>
						
						<input type="text" name="uagg" id="agg" value="<?php echo $uagg ?>" class="form-control input-sm" placeholder="Aggregate/Percentage">
						
					</td>
					
					</tr>
					
						<tr>
					    <td>
						<br/>
					    </td>
					</tr>
					
					<tr>
					    <td>
						<label for="dd">Post Graduate</label>
					    </td>
					  <td>
						
						<input type="text" name="pgdegree" value="<?php echo $pgdegree ?>" id="pgdegree" class="form-control input-sm" placeholder="Specialization(Name of Degree)">
						
					    </td>
					    <td>
						
                                        
			                 <input  type="text" placeholder="Date/Year of Passed" name="pgdate" value="<?php echo $pgdate ?>"id="example1" class="form-control input-sm">
                                          
                                        
					    </td>
					    <td>
						
						<input type="text" name="pguniversity" id="pguniversity" value="<?php echo $pguniversity ?>"class="form-control input-sm" placeholder="Name of University">
						
					    </td>
					<td>
						
						<input type="text" name="pgcollege" id="college" value="<?php echo $pgcollege ?>" class="form-control input-sm" placeholder="Name of College/School">
						
					    </td>
					<td>
						
						<input type="text" name="pgagg" id="agg" value="<?php echo $pgagg ?>" class="form-control input-sm" placeholder="Aggregate/Percentage">
						
					</td>
					
					</tr>
					
					<tr>
					    <td>
						<br/>
					    </td>
					</tr>
					
					<tr>
					    <td>
						<label for="dd">PhD</label>
					    </td>
					     <td>
						
						<input type="text" name="phdegree" value="<?php echo $phdegree ?>" id="degree" class="form-control input-sm" placeholder="Specialization(Name of Degree)">
						
					    </td>
					    <td>
						
                                        
			                 <input  type="text" placeholder="Date/Year of Passed" name="phdate" value="<?php echo $phdate ?>"id="example1" class="form-control input-sm">
                                          
                                        
					    </td>
					    <td>
						
						<input type="text" name="phuniversity" id="pguniversity" value="<?php echo $phuniversity ?>"class="form-control input-sm" placeholder="Name of University">
						
					    </td>
					<td>
						
						<input type="text" name="phcollege" id="college" value="<?php echo $phcollege ?>" class="form-control input-sm" placeholder="Name of College/School">
						
					    </td>
					<td>
						
						<input type="text" name="phagg" id="phagg" value="<?php echo $phagg ?>" class="form-control input-sm" placeholder="Aggregate/Percentage">
						
					    </td>
					
					</tr>
					
					<tr>
					    <td>
						<br/>
					    </td>
					</tr>
					
					<tr>
					    <td>
						<label for="dd">Others</label>
					    </td>
					    <td>
						
						<input type="text" name="odegree" value="<?php echo $odegree ?>" id="degree" class="form-control input-sm" placeholder="Specialization(Name of Degree)">
						
					    </td>
					    <td>
						
                                        
			                 <input  type="text" placeholder="Date/Year of Passed" name="odate" value="<?php echo $odate ?>"id="example1" class="form-control input-sm">
                                          
                                        
					    </td>
					    <td>
						
						<input type="text" name="ouniversity" id="university" value="<?php echo $ouniversity ?>"class="form-control input-sm" placeholder="Name of University">
						
					    </td>
					<td>
						
						<input type="text" name="ocollege" id="college" value="<?php echo $ocollege ?>" class="form-control input-sm" placeholder="Name of College/School">
						
					    </td>
					<td>
						
						<input type="text" name="oagg" id="agg" value="<?php echo $oagg ?>" class="form-control input-sm" placeholder="Aggregate/Percentage">
						
					    </td>
					
					</tr>
					
				     </table>
					    </div>
				     </div>
                                     
                                     
                                      <div class="form-group">
                                            <div class="col-md-12">
                                        <fieldset>
						<legend><br/><br/>Total Experience (Years)</legend>
						</fieldset>
                                            </div>
                                        </div>
                                      
                                       <div class="form-group">
                                            <div class="col-md-4">
                                        <label for="fname"><br/>Teaching Experience (No of Years)</label>
			                 <input type="text" name="noftexp" value="<?php echo $noftexp ?>" id="noftexp" class="form-control input-sm">
                                            </div>
                                        </div>
					
					<div class="form-group">
                                            <div class="col-md-4">
                                        <label for="fname"><br/>Industry Experience (No of Years)</label>
			                 <input type="text" name="nofiexp" value="<?php echo $nofiexp ?>" id="nofiexp" class="form-control input-sm">
                                            </div>
                                        </div>
					
					<div class="form-group">
                                            <div class="col-md-4">
                                        <label for="fname"><br/>Research (No of Years)</label>
			                 <input type="text" name="nofrexp" value="<?php echo $nofrexp ?>" id="nofrexp" class="form-control input-sm">
                                            </div>
                                        </div>
                                    
                                    <div class="form-group">
                                            <div class="col-md-12">
                                        <fieldset>
						<legend><br/><br/>Evaluation</legend>
						</fieldset>
                                            </div>
                                        </div>
                                    <div class="form-group">
                                                     <div class="col-md-12">
                                         <label for="post"><br/>Evaluation (100 Marks)</label>
			                 <input type="text" name="evalmarks" id="evalmarks" class="form-control input-sm">  
			    		 </div>
                                         </div>
                                    
                                    
                                  <div class="form-group">
                                            <div class="col-md-12">
                                        <label for="dob"><br/>Remarks</label>
			                 <textarea  cols="50" id="remarks" name="remarks" class="form-control input-sm">
					    </textarea>
                                            </div>
                                        </div>
    
                                      <div class="form-group">
					   <div class="col-md-12">
					    <br/><br/>
					    <center>
                                        <button type="submit" class="btn btn-info btn-lg">SUBMIT</button>
					</center>
					   </div>
					</div>
					
                                                </form>
					</div>
			    
                </div>
			</div>
		</div>
	</div>
</body>
</html>
