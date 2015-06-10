
<?php
//include('insert_to_db.php');
?>
<!DOCTYPE html>

<html>
<head>
    <title>Service Registry Form</title>
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
<div class="pull-left"><a href="admin_select.php" class="btn btn-warning" role="button">Go Back</a></div>
    <div class="container">
  <h3 align="center">R.V College of Engineering, Bengaluru-560 059</h3>
        <div id="appform" style="margin-top:50px;">                    
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">Service Registry Form</div>
                        
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >
                    
                          <form role="form" action="insert_service.php" method="POST">
                           <fieldset>
            <legend><br/><br/>Personal Details</legend>
            </fieldset>

                               
                       <div class="form-group">
                                         <div class="col-md-6">
                                            <label for="fname">1.(a) Name of the Employee</label>
                       <input type="text" name="ename" id="ename"  class="form-control input-sm" placeholder="Employee Name">
               </div>
                                         </div>                   
              
               <div class="form-group">
                                         <div class="col-md-6">
                                            <label for="fname">2.(a)Father's name</label>
                       <input type="text" name="fname" id="fname"  class="form-control input-sm" placeholder="Fathers's Name">
               </div>
                                         </div>
                <div class="form-group">
                                            <div class="col-md-6">
                                        <label for="eaddress"><br/> &nbsp &nbsp(b) Address of the Employee</label>
                       <textarea  cols="50" name="eaddress" id="eaddress"  class="form-control input-sm">
              </textarea>
                                            </div>
                                        </div>    
                                      
                <div class="form-group">
                                            <div class="col-md-6">
                                        <label for="faddress"><br/>&nbsp &nbsp(b)Address of the Father</label>
                       <textarea  cols="50"  name="faddress" id="faddress" class="form-control input-sm" >
              </textarea>
                                            </div>
                                        </div> 
                                         <div class="col-xs-4">
                                            <label for="hname">3.(a)Husband's/wife's name</label>
                       <input type="text" name="hname"  id="hname"  class="form-control input-sm" placeholder=" Husband's/wife's Name">
               </div>
                                        
                <div class="form-group">
                                            <div class="col-md-12">
                                        <label for="haddress"><br/>&nbsp &nbsp(b)Address of the Husband's/wife's</label>
                       <textarea  cols="50"  name="haddress" id="haddress" class="form-control input-sm">
              </textarea>
                                            </div>
                                        </div>  
                                   
                                  
              <div class="form-group">
                                         <div class="col-md-4">
                                            <label for="nat"><br/>4.Nationality</label>
                       <input type="text" name="nat" id="nat"  class="form-control input-sm" placeholder="Nationality">
               </div>
                                        </div>
                                        
                                        
                                      <div class="form-group">
                                            <div class="col-md-4">
                                       <label for="caste"><br/>5.Caste</label>
                                      <input type="text" name="caste" id="caste" class="form-control input-sm" placeholder="Caste">
                                            </div>
                                        </div>
                                     
                                  
           
           <div class="form-group">
                                            <div class="col-md-4">
                                        <label for="example1"><br/>6.DOB</label>
                       <input  type="text" placeholder="Select DOB"  name="dob" id="example1" class="form-control input-sm" placeholder="DOB">
                                            </div>
                                        </div>
           
            
            
             
             <div class="form-group">
                                            <div class="col-md-12">
                                        <fieldset>
            <legend><br/><br/>7.Education Qualification Details</legend>
            </fieldset>
                                            </div>
                                        </div>
             
            
             <div class="form-group">
                                            <div class="col-md-6">
                                        <label for="atp"><br/>(a) At the time of first appointment</label>
                       <input  type="text"  name="atp" id="atp" class="form-control input-sm">
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <div class="col-md-6">
                                        <label for="sc"><br/>(b) Subsequently acqired</label>
                       <input  type="text"  name="sc" id="sc" class="form-control input-sm">
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <div class="col-md-6">
                                        <label for="pdq"><br/>(c) Particulars of the department Qualifications</label>
                       <input  type="text"  name="pdq" id="pdq" class="form-control input-sm">
                                            </div>
                                        </div>
              <div class="form-group">
                                         <div class="col-md-6">
                                           <label for="ptq"><br/>8.Professional and technical qualification</label>
                                             <input type="text" name="ptq" id="ptq" class="form-control input-sm">   
               </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-md-12">
                                        <fieldset>
            <legend><br/><br/>Other Details</legend>
            </fieldset>
                                            </div>
                                        </div>
             
                                    
            <div class="form-group">
                                         <div class="col-xs-6">
                                           <label for="height"><br/>9.Exact height by measurment (without shoes)</label>
                                             <input type="text" name="height" id="height" class="form-control input-sm">   
               </div>
                                        </div>
            
            <div class="form-group">
                                         <div class="col-xs-6">
                                           <label for="mark"><br/>10.Personal mark of identification</label>
                                               <input type="text" name="mark" id="mark" class="form-control input-sm"> 
               </div>
               </div>
               <div class="form-group">
                                            <div class="col-md-12">
                                        <label for="paddress"><br/>11.Permanent home Address</label>
                       <textarea  cols="50" name="paddress" id="paddress"  class="form-control input-sm">
              </textarea>
                                            </div>
                                        </div>  
                                        <div class="form-group">
                                            <div class="col-md-12">
                                        <label for="htown"><br/>12.Home town or Village(for leave travel concession)</label>
                       <input  type="text"  name="htown" id="htown"  class="form-control input-sm">
              </textarea>
                                            </div>
                                        </div>   
            
          
          <div class="form-group">
             <div class="col-md-12">
              <br/><br/>
              <center>
 <!--             <button type="button" class="btn btn-info btn-lg">APPLY</button>-->
 
                                               <input id="btn-login" name="submit" type="submit" value=" NEXT " class="btn  btn-lg btn-info">
          </center>   
             </div>
          </div>           
        </form>             
                    </div>  
                </div>
       
            </div>
             </div>
</body>
</html>
