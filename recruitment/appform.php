<!--Sagar S.N-->
<?php
//include('insert_to_db.php');
?>
<!DOCTYPE html>

<html>
<head>
    <title>Application Form</title>
    <link rel="icon" type="image/gif" href="images/collogo.jpg">

 <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css"/>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
	
<!-- Links for DatePicker-->
	<link rel="stylesheet" href="css/datepicker.css">

        <script src="js/jquery.js"></script>
        <script src="js/bootstrap-datepicker.js"></script>
	
	<script type="text/javascript">
            // When the document is ready
            $(document).ready(function () {
                
                $('#example1,#example2,#example3,#example4,#example5,#example6,#example7,#example8,#example9,#example10,#example11,#example12,#example13').datepicker({
                     endDate: '+0d',
                     autoclose: true,
		    changeMonth: true,
		    changeYear: true
                });  
            
            });
        </script>
	
	
	<!-- Links for Multiselect-->

    <!-- Include Bootstrap Multiselect CSS, JS -->
<script type="text/javascript" src="js/bootstrap-multiselect.js"></script>
<link rel="stylesheet" href="css/bootstrap-multiselect.css" type="text/css"/>
<!-- Initialize the plugin: -->

<script type="text/javascript">
    $(document).ready(function() {
        $('#example-getting-started1').multiselect();
    });
</script>


<script type="text/javascript">
    $(document).ready(function() {
        $('#example-getting-started2').multiselect();
    });
</script>

<!-- Validation Code-->

<script>
    function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
 
         return true;
      }
</script>
<script>
     function isAlpha(evt)
    {
        var keyCode = (evt.which) ? evt.which : evt.keyCode
        if ((keyCode < 65 || keyCode > 90) && (keyCode < 97 || keyCode > 123) && keyCode != 32)
         
        return false;
            return true;
    }
</script>

</head>

<body style="font-family: Segoe UI,Arial">
<div class="pull-left"><a href="home.php" class="btn btn-warning" role="button">Go Back</a></div>
    <div class="container">
	<h3 align="center">R.V College of Engineering, Bengaluru-560 059</h3>
        <div id="appform" style="margin-top:50px;">                    
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">Application Form</div>
                        
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >
                    
                        	<form role="form" action="insert_to_db.php" method="POST">
			    		 <div class="form-group">
                                            
                                         
                                         <div class="col-xs-4">
                                            <label for="post">Post Applied For</label>
			                 <input type="text" name="post" id="post" class="form-control input-sm" placeholder="Enter the post name" onkeypress="return isAlpha(event)" required>
			    		 </div>
                                         </div>
                                  
			    		<div class="form-group">
                                         <div class="col-xs-4">
                                            <label for="dept">Department</label>
			                 <input type="text" name="dept" id="dept" class="form-control input-sm"  placeholder="Enter the Department name" onkeypress="return isAlpha(event)" required>
			    		 </div>
                                        </div>
                                        
                                        <div class="form-group">
                                         <div class="col-xs-4">
                                           <label for="sel1">Nature of Job</label>
                                                <select class="form-control input-sm" id="nature" name="job" required >
                                                <option selected disabled>Choose Job</option>
                                                <option value="Teaching">Teaching</option>
                                                <option value="Technical Post">Technical Post</option>
                                                <option value="Support Position">Support Position</option>
                                                </select>
			    		 </div>
                                        </div>
                                        
                                      <div class="form-group">
                                            <div class="col-md-12">
                                        <fieldset>
						<legend><br/><br/>Personal Details</legend>
						</fieldset>
                                            </div>
                                        </div>
                                     
                                        <div class="form-group">
                                            <div class="col-md-6">
                                        <label for="fname">First Name</label>
			                 <input type="text" name="fname" id="fname" class="form-control input-sm" placeholder="Enter First name" onkeypress="return isAlpha(event)">
                                            </div>
                                        </div>
                                        
                                         <div class="form-group">
                                            <div class="col-md-6">
                                        <label for="lname">Last Name</label>
			                 <input type="text" name="lname" id="lname" class="form-control input-sm" placeholder="Enter the Last name"onkeypress="return isAlpha(event)">
                                            </div>
                                        </div>
                                         
                                         
                                         <div class="form-group">
                                         <div class="col-md-12">
                                            <label for="dept"><br/>Present Post Held</label>
			                 <input type="text" name="ppost" id="post" class="form-control input-sm" placeholder="Enter the Present Post Held" onkeypress="return isAlpha(event)">
			    		 </div>
                                        </div>
					 
					 
					 <div class="form-group">
                                            <div class="col-md-6">
                                        <label for="dob"><br/>DOB</label>
			                 <input  type="text" placeholder="Select DOB"  name="dob" id="example1" class="form-control input-sm" readonly>
                                            </div>
                                        </div>
					 
					  <div class="form-group">
                                            <div class="col-md-6">
                                        <label for="dob"><br/>Age</label>
			                 <input  type="text"   id="age" name="age" class="form-control input-sm" placeholder="Enter the Age" onkeypress="return isNumberKey(event)" maxlength="2">
                                            </div>
                                        </div>
					  
					  <div class="form-group">
                                            <div class="col-md-12">
                                        <label for="dob"><br/>Address</label>
			                 <textarea  cols="50" id="age" name="address" class="form-control input-sm" placeholder="Enter the Address">
					    </textarea>
                                            </div>
                                        </div>
					 
					 
					  <div class="form-group">
                                            <div class="col-md-6">
                                        <label for="fname"><br/>Tel/Mobile No</label>
			                 <input type="text" name="phone" id="phone" class="form-control input-sm" placeholder="Enter the Mobile number" onkeypress="return isNumberKey(event)" maxlength="12">
                                            </div>
                                        </div>
                                        
                                         <div class="form-group">
                                            <div class="col-md-6">
                                        <label for="lname"><br/>Email Id</label>
			                 <input type="email" name="email" id="email" class="form-control input-sm" placeholder="Enter the Email-Id">
                                            </div>
                                        </div>
					 
					      <div class="form-group">
                                         <div class="col-xs-3">
                                           <label for="sel1"><br/>Martial Status</label>
                                                <select class="form-control input-sm" id="nature" name="martial_status" required>
                                                <option selected disabled>Choose Status</option>
                                                <option value="Married">Married</option>
                                                <option value="Unmarried">Unmarried</option>
                                                
                                                </select>
			    		 </div>
                                        </div>
                                    
				    <div class="form-group">
                                         <div class="col-xs-3">
                                           <label for="sons"><br/><br/></label>
                                                <select class="form-control input-sm" id="nature" name="nofsons" required>
                                                <option selected disabled>No of Sons</option>
                                                 <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
						<option value="3">3</option>
                                                <option value="4">4</option>
						<option value="5">5</option>
                                                <option value="6">6</option>
                                                
                                                </select>
			    		 </div>
                                        </div>
				    
				    <div class="form-group">
                                         <div class="col-xs-3">
                                           <label for="sons"><br/><br/></label>
                                                <select class="form-control input-sm" id="nature" name="nofdaughters" required>
                                                <option selected disabled>No of Daughters</option>
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
						<option value="3">3</option>
                                                <option value="4">4</option>
						<option value="5">5</option>
                                                <option value="6">6</option>
                                                
                                                </select>
			    		 </div>
                                        </div>
				    
				     <div class="form-group">
                                         <div class="col-xs-3">
                                           <label for="sons"><br/><br/></label>
                                                <select class="form-control input-sm" id="nature" name="nofparents" required>
                                                <option selected disabled>No of Parents</option>
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                </select>
			    		 </div>
                                        </div>
				     
				     <div class="form-group">
                                            <div class="col-md-12">
                                        <fieldset>
						<legend><br/><br/>Qualification Details</legend>
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
						
						<input type="text" name="degree" id="degree" class="form-control input-sm" placeholder="Specialization(Name of Degree)" onkeypress="return isAlpha(event)">
						
					    </td>
					    <td>
						
                                        
			                 <input  type="text" placeholder="Date/Year of Passed" name="date1" id="example2" class="form-control input-sm" readonly>
                                          
                                        
					    </td>
					    <td>
						
						<input type="text" name="university" id="university" class="form-control input-sm" placeholder="Name of University" onkeypress="return isAlpha(event)">
						
					    </td>
					<td>
						
						<input type="text" name="college" id="college" class="form-control input-sm" placeholder="Name of College/School" onkeypress="return isAlpha(event)">
						
					    </td>
					<td>
						
						<input type="text" name="agg" id="agg" class="form-control input-sm" placeholder="Aggregate/Percentage" onkeypress="return isNumberKey(event)">
						
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
						
						<input type="text" name="pdegree" id="pdegree" class="form-control input-sm" placeholder="Specialization(Name of Degree)" onkeypress="return isAlpha(event)">
						
					    </td>
					    <td>
						
                                        
			                 <input  type="text" placeholder="Date/Year of Passed"  name="pdate" id="example3" class="form-control input-sm" readonly>
                                          
                                        
					    </td>
					    <td>
						
						<input type="text" name="puniversity" id="puniversity" class="form-control input-sm" placeholder="Name of University" onkeypress="return isAlpha(event)" >
						
					    </td>
					<td>
						
						<input type="text" name="pcollege" id="pcollege" class="form-control input-sm" placeholder="Name of College/School" onkeypress="return isAlpha(event)" >
						
					    </td>
					<td>
						
						<input type="text" name="pagg" id="pagg" class="form-control input-sm" placeholder="Aggregate/Percentage" onkeypress="return isNumberKey(event)">
						
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
						
						<input type="text" name="udegree" id="udegree" class="form-control input-sm" placeholder="Specialization(Name of Degree)" onkeypress="return isAlpha(event)">
						
					    </td>
					    <td>
						
                                        
			                 <input  type="text" placeholder="Date/Year of Passed"  name="udate" id="example4" class="form-control input-sm" readonly>
                                          
                                        
					    </td>
					    <td>
						
						<input type="text" name="uuniversity" id="uuniversity" class="form-control input-sm" placeholder="Name of University" onkeypress="return isAlpha(event)">
						
					    </td>
					<td>
						
						<input type="text" name="ucollege" id="ucollege" class="form-control input-sm" placeholder="Name of College/School" onkeypress="return isAlpha(event)">
						
					    </td>
					<td>
						
						<input type="text" name="uagg" id="uagg" class="form-control input-sm" placeholder="Aggregate/Percentage" onkeypress="return isNumberKey(event)">
						
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
						
						<input type="text" name="pgdegree" id="pgdegree" class="form-control input-sm" placeholder="Specialization(Name of Degree)" onkeypress="return isAlpha(event)">
						
					    </td>
					    <td>
						
                                        
			                 <input  type="text" placeholder="Date/Year of Passed"  name="pgdate" id="example5" class="form-control input-sm" readonly>
                                          
                                        
					    </td>
					    <td>
						
						<input type="text" name="pguniversity" id="pguniversity" class="form-control input-sm" placeholder="Name of University" onkeypress="return isAlpha(event)">
						
					    </td>
					<td>
						
						<input type="text" name="pgcollege" id="pgcollege" class="form-control input-sm" placeholder="Name of College/School" onkeypress="return isAlpha(event)">
						
					    </td>
					<td>
						
						<input type="text" name="pgagg" id="pgagg" class="form-control input-sm" placeholder="Aggregate/Percentage" onkeypress="return isNumberKey(event)">
						
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
						
						<input type="text" name="phdegree" id="phdegree" class="form-control input-sm" placeholder="Specialization(Name of Degree)" onkeypress="return isAlpha(event)">
						
					    </td>
					    <td>
						
                                        
			                 <input  type="text" placeholder="Date/Year of Passed"  name="phdate" id="example6" class="form-control input-sm" readonly>
                                          
                                        
					    </td>
					    <td>
						
						<input type="text" name="phuniversity" id="phuniversity" class="form-control input-sm" placeholder="Name of University" onkeypress="return isAlpha(event)">
						
					    </td>
					<td>
						
						<input type="text" name="phcollege" id="phcollege" class="form-control input-sm" placeholder="Name of College/School" onkeypress="return isAlpha(event)">
						
					    </td>
					<td>
						
						<input type="text" name="phagg" id="phagg" class="form-control input-sm" placeholder="Aggregate/Percentage" onkeypress="return isNumberKey(event)">
						
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
						
						<input type="text" name="odegree" id="odegree" class="form-control input-sm" placeholder="Specialization(Name of Degree)" onkeypress="return isAlpha(event)">
						
					    </td>
					    <td>
						
                                        
			                 <input  type="text" placeholder="Date/Year of Passed"  name="odate" id="example7" class="form-control input-sm" readonly>
                                          
                                        
					    </td>
					    <td>
						
						<input type="text" name="ouniversity" id="ouniversity" class="form-control input-sm" placeholder="Name of University" onkeypress="return isAlpha(event)">
						
					    </td>
					<td>
						
						<input type="text" name="ocollege" id="ocollege" class="form-control input-sm" placeholder="Name of College/School" onkeypress="return isAlpha(event)">
						
					    </td>
					<td>
						
						<input type="text" name="oagg" id="oagg" class="form-control input-sm" placeholder="Aggregate/Percentage" onkeypress="return isNumberKey(event)">
						
					    </td>
					
					</tr>
					
				     </table>
					    </div>
				     </div>
				     
				      <div class="form-group">
                                         <div class="col-xs-4">
                                           <label for="sel1"><br/>Area of Specialization</label>
                                             <input type="text" name="asp" id="asp" class="form-control input-sm" placeholder="Enter the Area of Specialization" onkeypress="return isAlpha(event)">   
			    		 </div>
                                        </div>
                                    
				    <div class="form-group">
                                         <div class="col-xs-4">
                                           <label for="sons"><br/>Professional Capablity (Subject)</label>
                                             <input type="text" name="pc" id="pc" class="form-control input-sm" placeholder="Enter the Professional Capablity (Subject)" onkeypress="return isAlpha(event)">   
			    		 </div>
                                        </div>
				    
				    <div class="form-group">
                                         <div class="col-xs-4">
                                           <label for="sons"><br/>No of Research Projects Executed</label>
                                               <input type="text" name="nofrpe" id="nofrpe" class="form-control input-sm" placeholder="Enter the No of Research Project Executed" onkeypress="return isNumberKey(event)"> 
			    		 </div>
                                        </div>
				    
				     <div class="form-group">
                                         <div class="col-xs-4">
                                           <label for="sons"><br/>No of Research Papers Published</label>
					    <input type="text" name="nofrpp" id="nofrpp" class="form-control input-sm" onkeypress="return isNumberKey(event)" placeholder="Enter the No of Research Papers Executed">
			    		 </div>
                                        </div>
				     
				     
				           <div class="form-group">
                                         <div class="col-xs-4">
                                           <label for="sons"><br/><br/>Competency in Computers&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp</label>
					   <select class="form-control input-xs" id="example-getting-started1" name="comp_skills" multiple="multiple">
						<option value="Word">Word</option>
						 <option value="Excel">Excel</option>
						<option value="Powerpoint">Powerpoint</option>
						<option value="Others">Others</option>
					</select>
			    		 </div>
                                        </div>
                                    
				    <div class="form-group">
                                         <div class="col-xs-4">
                                           <label for="sons"><br/><br/>Languages Known&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
					   
                                                <select class="form-control input-xs" id="example-getting-started2" name="lang" multiple="multiple">
						<option value="Kannada">Kannada</option>
						 <option value="English">English</option>
						<option value="Hindi">Hindi</option>
					        <option value="Tamil">Tamil</option>
					       <option value="Tamil">Telugu</option>
					     <option value="Malayalam">Malayalam</option>
						<option value="Others">Others</option>
					</select>
			    		 </div>
                                        </div>
				    
				    <div class="form-group">
                                            <div class="col-md-12">
                                        <fieldset>
						<legend><br/><br/>Previous Experience: Academic/Industry </legend>
						</fieldset>
                                            </div>
                                        </div>
				    
				     <div class="form-group">
                                            <div class="col-md-12">
				     <table width="100%">
					<tr>
					    <td>
						<label for="dd">a) </label>
					    </td>
					    <td>
						
						<input type="text" name="instnamea" id="instnamea" class="form-control input-sm" placeholder="Name of Institution/Industry" onkeypress="return isAlpha(event)">
						
					    </td>
					    <td>
						
                                        
			                 <input  type="text" placeholder="Designation" name="desga" id="desga" class="form-control input-sm" onkeypress="return isAlpha(event)">
                                          
                                        
					    </td>
					    <td>
						<input  type="text" placeholder="From Date" name="fdatea" id="example8" class="form-control input-sm" readonly>
					    </td>
					    <td>
						<input  type="text" placeholder="To Date" name="tdatea" id="example9" class="form-control input-sm" readonly>
					    </td>
					</tr>
					
					<tr>
					    <td>
						<br/>
					    </td>
					</tr>
					
					<tr>
					    <td>
						<label for="dd">b) </label>
					    </td>
					    <td>
						
						<input type="text" name="instnameb" id="instnamea" class="form-control input-sm" placeholder="Name of Institution/Industry" onkeypress="return isAlpha(event)">
						
					    </td>
					    <td>
						
                                        
			                 <input  type="text" placeholder="Designation" name="desgb" id="desgb" class="form-control input-sm" onkeypress="return isAlpha(event)">
                                          
                                        
					    </td>
					    <td>
						<input  type="text" placeholder="From Date" name="fdateb" id="example10" class="form-control input-sm" readonly>
					    </td>
					    <td>
						<input  type="text" placeholder="To Date" name="tdateb" id="example11" class="form-control input-sm" readonly="">
					    </td>
					</tr>
					
					
					<tr>
					    <td>
						<br/>
					    </td>
					</tr>
					
					<tr>
					    <td>
						<label for="dd">c) </label>
					    </td>
					    <td>
						
						<input type="text" name="instnamec" id="instnamec" class="form-control input-sm" placeholder="Name of Institution/Industry" onkeypress="return isAlpha(event)">
						
					    </td>
					    <td>
						
                                        
			                 <input  type="text" placeholder="Designation" name="desgc" id="desgc" class="form-control input-sm" onkeypress="return isAlpha(event)">
                                          
                                        
					    </td>
					    <td>
						<input  type="text" placeholder="From Date" name="fdatec" id="example12" class="form-control input-sm" readonly>
					    </td>
					    <td>
						<input  type="text" placeholder="To Date" name="tdatec" id="example13" class="form-control input-sm" readonly>
					    </td>
					</tr>
				     </table>
				     
					    </div>
				     </div>
				     
				     <div class="form-group">
                                            <div class="col-md-4">
                                        <label for="fname"><br/>Teaching Experience (No of Years)</label>
			                 <input type="text" name="noftexp" id="noftexp" class="form-control input-sm" placeholder="Enter the Teaching Experience" onkeypress="return isNumberKey(event)">
                                            </div>
                                        </div>
					
					<div class="form-group">
                                            <div class="col-md-4">
                                        <label for="fname"><br/>Industry Experience (No of Years)</label>
			                 <input type="text" name="nofiexp" id="nofiexp" class="form-control input-sm" placeholder="Enter the Industry Experience" onkeypress="return isNumberKey(event)">
                                            </div>
                                        </div>
					
					<div class="form-group">
                                            <div class="col-md-4">
                                        <label for="fname"><br/>Research (No of Years)</label>
			                 <input type="text" name="nofrexp" id="nofrexp" class="form-control input-sm" placeholder="Enter the Reasearch" onkeypress="return isNumberKey(event)">
                                            </div>
                                        </div>
					
				      <div class="form-group">
                                            <div class="col-md-6">
                                        <label for="fname"><br/>Hobbies and Other Interests</label>
			                 <input type="text" name="hob" id="hob" class="form-control input-sm"  placeholder="Enter the Hobbies" onkeypress="return isAlpha(event)">
                                            </div>
                                        </div>
					
					<div class="form-group">
                                            <div class="col-md-6">
                                        <label for="fname"><br/>Any Health Problems (Please Specify)</label>
			                 <input type="text" name="heal" id="heal" class="form-control input-sm" placeholder="Enter the Health Problems" onkeypress="return isAlpha(event)">
                                            </div> 
                                        </div>
					
					
					<div class="form-group">
                                            <div class="col-md-6">
                                        <label for="fname"><br/>Any Two References (With their Contact No)</label>
			                 <input type="text" name="ref1" id="ref1" class="form-control input-sm" placeholder="Name" onkeypress="return isAlpha(event)">
                                            </div>
                                        </div>
					
					<div class="form-group">
                                            <div class="col-md-6">
                                        <label for="fname"><br/><br/></label>
			                 <input type="text" name="con1" id="con1" class="form-control input-sm" maxlength="12" placeholder="Contact" onkeypress="return isNumberKey(event)" >
                                            </div>
                                        </div>
					
					<div class="form-group">
                                            <div class="col-md-6">
                                        <label for="fname"></label>
			                 <input type="text" name="ref2" id="ref2" class="form-control input-sm" placeholder="Name" onkeypress="return isAlpha(event)">
                                            </div>
                                        </div>
					
					<div class="form-group">
                                            <div class="col-md-6">
                                        <label for="fname"></label>
			                 <input type="text" name="con2" id="con2" class="form-control input-sm" maxlength="12" placeholder="Contact" onkeypress="return isNumberKey(event)">
                                            </div>
                                        </div>
                                        
					
					<div class="form-group">
					   <div class="col-md-12">
					    <br/><br/>
					    <center>
                                       <!-- <button type="button" class="btn btn-info btn-lg">APPLY</button>-->
					<input id="btn-login" name="submit" type="submit" value=" APPLY " class="btn  btn-lg btn-info">
					</center>
					   </div>
					</div>           
				</form>             
                    </div>  
                </div>
       
            </div>
</body>
</html>
