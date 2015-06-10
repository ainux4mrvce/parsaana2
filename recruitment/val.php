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
                
                $('#example1').datepicker({
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
			                 <input type="text" name="post" id="post" class="form-control input-sm">
			    		 </div>
                                         </div>
                                  
			    		<div class="form-group">
                                         <div class="col-xs-4">
                                            <label for="dept">Department</label>
			                 <input type="text" name="dept" id="dept" class="form-control input-sm">
			    		 </div>
                                        </div>