
<?php

//session_start();   
$a= $_SESSION['a'];
//include('insert_to_db.php');
?>
<!DOCTYPE html>

<html>
<head>
    <title>Previous Qualifying Service and Foriegn Service</title>
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
                        <div class="panel-title">Previous Qualifying Service and Foriegn Service</div>
                        
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >
                    
                      <form role="form" action="insert_qualify.php" method="POST">
                           <fieldset>
            <legend><br/><br/>Previous Qualifying Service </legend>
            </fieldset>
               <div class="form-group">
                                            
                        <div class="col-md-12">                 
                                        
                  <label for="post">Period</label>
                  </div>
                  </div>
                  
                  
                    <div class="form-group">
                          <div class="col-md-6">
                              <label for="from"><br/>From</label>
                                <input  type="text" placeholder="Select FROM"  name="from1" id="example1" class="form-control input-sm">
                          </div>
                    </div>
                       <div class="form-group">                 
                                            <div class="col-md-6">
                                        <label for="to"><br/>To</label>
                       <input  type="text" placeholder="Select TO"  name="to1" id="example2" class="form-control input-sm">
                                            </div>
                                       
                       </div>

                       <div class="form-group">
                                         <div class="col-md-6">
                                            <label for="post"><br/>Post held</label>
                       <input type="text" name="post" id="post" class="form-control input-sm">
               </div>
                                        </div>
    
                                        
                <div class="form-group">
                                            <div class="col-md-12">
                                        <label for="order"><br/>No and date of the Government order accepting such period as qualifying service</label>
                       <textarea  cols="50" name="order1" id="order" class="form-control input-sm">
              </textarea>
                                            </div>
                                        </div> 

            <div class="form-group">
                                            <div class="col-md-12">
                                        <fieldset>
            <legend><br/><br/>Foriegn Service</legend>
            </fieldset>
                                            </div>
                                        </div>

            <div class="form-group">
                                            
                         <div class="col-md-12">                
                                        
                  <label for="fpost">Period</label>
                  </div>
                  </div>
                    <div class="form-group">
                          <div class="col-md-6">
                              <label for="from1"><br/>From</label>
                                <input  type="text" placeholder="Select FROM"  name="from2" id="example3" class="form-control input-sm">
                          </div>
                    </div>
                       <div class="form-group">                 
                                            <div class="col-md-6">
                                        <label for="to1"><br/>To</label>
                       <input  type="text" placeholder="Select TO"  name="to2" id="example4" class="form-control input-sm">
                                            </div>
                                       
                       </div>

                       <div class="form-group">
                                         <div class="col-md-6">
                                            <label for="fpost"><br/>Post held</label>
                       <input type="text" name="fpost" id="fpost" class="form-control input-sm">
               </div>
                                        </div>
    
                                        
                <div class="form-group">
                                            <div class="col-md-12">
                                        <label for="pension"><br/>Leave and pension contribution payable by</label>
                       <textarea  cols="50" name="pension" id="pension" class="form-control input-sm">
              </textarea>
                                            </div>
                                        </div> 
                <div class="form-group">
                                         <div class="col-md-6">
                                            <label for="amount"><br/>Amount of leave salary and pension contribution actually recieved</label>
                       <input type="text" name="amount" id="amount" class="form-control input-sm">
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
