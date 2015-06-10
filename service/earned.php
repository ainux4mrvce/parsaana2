
<?php
//include('insert_to_db.php');
?>
<!DOCTYPE html>

<html>
<head>
    <title>Earned Leave</title>
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
                        <div class="panel-title">Earned Leave</div>
                        
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >
                    
                          <form role="form" action="insert_earned.php" method="POST">
                          
                    
            <div class="form-group">
                                            <div class="col-md-12">
                                        <fieldset>
            <legend><br/><br/>Particulars of service in the calender half year</legend>
            </fieldset>
                                           
                  </div>
                  </div>
                    <div class="form-group">
                          <div class="col-md-6">
                              <label for="example1"><br/>1.From</label>
                                <input  type="text" placeholder="Select FROM"  name="from1" id="example1" class="form-control input-sm">
                          </div>
                    </div>
                       <div class="form-group">                 
                                            <div class="col-md-6">
                                        <label for="example2"><br/>2.To</label>
                       <input  type="text" placeholder="Select TO"  name="to1" id="example2" class="form-control input-sm">
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
                                            <label for="comp"><br/>3.Completed months of service in the calender half year</label>
                       <input type="text" name="comp" id="comp" class="form-control input-sm">
               </div>
                                        </div>
    
                                        
                <div class="form-group">
                                            <div class="col-md-6">
                                        <label for="elc><br/>4.E.L. credited at the begining of half year</label>
                       <input type="text" name="elc" id="elc" class="form-control input-sm">
              
                                            </div>
                                        </div> 
                                        <div class="form-group">
                                            <div class="col-md-12">
                                        <label for="eol"><br/>5.No of days EOL availed of or period treated as diesnon or non duty during the previous calender half year</label>
                       <input type="text" name="eol" id="eol" class="form-control input-sm">
                                            </div>
                                        </div> 
                                          <div class="form-group">
                                            <div class="col-md-6">
                                        <label for="eld"><br/>6.E.L. Deducted (1/10th of the period in col 5)subject to maximum of 15 days</label>
                       <input type="text" name="eld" id=eld" class="form-control input-sm">
              
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <div class="col-md-6">
                                        <label for="tel"><br/>7.Total E.L. at crdited in days(col 4+11-6)</label>
                       <input type="text" name="tel" id="tel" class="form-control input-sm">
              
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
                                <input  type="text" placeholder="Select FROM"  name="from2" id="example3" class="form-control input-sm">
                          </div>
                    </div>
                       <div class="form-group">                 
                                            <div class="col-md-6">
                                        <label for="example4"><br/>9.To</label>
                       <input  type="text" placeholder="Select TO"  name="to2" id="example4" class="form-control input-sm">
                                            </div>
                                       
                       </div>

            
              

         <div class="form-group">
                                         <div class="col-md-12">
                                            <label for="no"><br/>10.No of days</label>
                       <input type="text" name="no" id="no" class="form-control input-sm">
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
                                        <label for="bal"><br/>11. Balance of E.L. at the end of calender half year (col 7-10)</label>
        <input type="text" name="bal" id="bal" class="form-control input-sm">
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
