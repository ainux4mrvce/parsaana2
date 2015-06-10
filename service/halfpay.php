
<?php
//include('insert_to_db.php');
?>
<!DOCTYPE html>

<html>
<head>
    <title>Half pay Leave</title>
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
                
                $('#example1,#example2,#example3,#example4').datepicker({
                     endDate: '+0d',
                     autoclose: true,
        changeMonth: true,
        changeYear: true
                });  
            
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
                        <div class="panel-title">half pay Leave</div>
                        
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >
                    
                          <form role="form" action="insert_to_db.php" method="POST">
                          
                    <!--
            <div class="form-group">
                                            <div class="col-md-12">
                                        <fieldset>
            <legend><br/><br/>Particulars of service in the calender half year</legend>
            </fieldset>
                                           
                  </div>
                  </div>-->
                    <div class="form-group">
                          <div class="col-md-6">
                              <label for="12"><br/>12.Particulars of service in the half year of a calender year</label>
                                <input  type="text" placeholder=""  name="12" id="12" class="form-control input-sm">
                          </div>
                    </div>

                    <div class="form-group">
                          <div class="col-md-6">
                              <label for="13"><br/>13.No of days treated as diesnon during the previous half year</label>
                                <input  type="text" placeholder=""  name="13" id="13" class="form-control input-sm">
                          </div>
                    </div>

                    <div class="form-group">
                          <div class="col-md-6">
                              <label for="14"><br/>14.HPL credited at the begining of the half year</label>
                                <input  type="text" placeholder=""  name="14" id="14" class="form-control input-sm">
                          </div>
                    </div>

                    <div class="form-group">
                          <div class="col-md-6">
                              <label for="12"><br/>15.Total HPL at credit in days col 14 + 32</label>
                                <input  type="text" placeholder="Select FROM"  name="12" id="12" class="form-control input-sm">
                          </div>
                    </div>

                    
                       <div class="form-group">                 
                                            <div class="col-md-6">
                                        <label for="example2"><br/>2.To</label>
                       <input  type="text" placeholder="Select TO"  name="2" id="example2" class="form-control input-sm">
                                            </div>
                                       
                       </div>

            <div class="form-group">
                                            <div class="col-md-12">
                                        <fieldset>
            <legend><br/><br/></legend>
            </fieldset>
                                           
                  </div>
                  </div>

                       <div class="form-group">
                                         <div class="col-md-6">
                                            <label for="3"><br/>3.Completed months of service in the calender half year</label>
                       <input type="text" name="3" id="3" class="form-control input-sm">
               </div>
                                        </div>
    
                                        
                <div class="form-group">
                                            <div class="col-md-6">
                                        <label for="4"><br/>4.E.L. credited at the begining of half year</label>
                       <input type="text" name="4" id="4" class="form-control input-sm">
              
                                            </div>
                                        </div> 
                                        <div class="form-group">
                                            <div class="col-md-12">
                                        <label for="5"><br/>5.No of days EOL availed of or period treated as diesnon or non duty during the previous calender half year</label>
                       <input type="text" name="5" id="5" class="form-control input-sm">
                                            </div>
                                        </div> 
                                          <div class="form-group">
                                            <div class="col-md-6">
                                        <label for="6"><br/>6.E.L. credited at the begining of half year</label>
                       <input type="text" name="6" id="6" class="form-control input-sm">
              
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <div class="col-md-6">
                                        <label for="7"><br/>7.Total E.L. at crdited in days(col 4+11-6)</label>
                       <input type="text" name="7" id="7" class="form-control input-sm">
              
                                            </div>
                                        </div> 
                    
            <div class="form-group">
                                            <div class="col-md-12">
                                        <fieldset>
            <legend><br/><br/>Leave Taken</legend>
            </fieldset>
                                            </div>
                                        </div>

                    <div class="form-group">
                          <div class="col-md-6">
                              <label for="example3"><br/>8.From</label>
                                <input  type="text" placeholder="Select FROM"  name="8" id="example3" class="form-control input-sm">
                          </div>
                    </div>
                       <div class="form-group">                 
                                            <div class="col-md-6">
                                        <label for="example4"><br/>9.To</label>
                       <input  type="text" placeholder="Select TO"  name="9" id="example4" class="form-control input-sm">
                                            </div>
                                       
                       </div>

            
              

         <div class="form-group">
                                         <div class="col-md-12">
                                            <label for="10"><br/>10.No of days</label>
                       <input type="text" name="10" id="10" class="form-control input-sm">
               </div>
                                        </div>
    
            <div class="form-group">
                                            <div class="col-md-12">
                                        <fieldset>
            <legend><br/><br/></legend>
            </fieldset>
                                           
                  </div>
                  </div>
                                        
                <div class="form-group">
                                            <div class="col-md-12">
                                        <label for="11"><br/>11. Balance of E.L. at the end of calender half year (col 7-10)</label>
        <input type="text" name="11" id="11" class="form-control input-sm">
                                            </div>
                                        </div> 
               
          
          <div class="form-group">
             <div class="col-md-12">
              <br/><br/>
              <center>
 <!--             <button type="button" class="btn btn-info btn-lg">APPLY</button>-->
 
                                               <input id="btn-login" name="submit" type="submit" value=" APPLY " class="btn  btn-lg btn-info">
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
