
<?php

//include('insert_to_db.php');
?>
<!DOCTYPE html>

<html>
<head>
    <title>History and verification of Service </title>
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
                        <div class="panel-title">History and verification of Service </div>
                        
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >
                    
                          <form role="form" action="insert_history.php" method="POST">
                           <fieldset>
            <legend><br/><br/>History and verification of Service</legend>
            </fieldset><br/>
               <div class="form-group">
                                            
                        <div class="col-md-12">                 
                                        
                  <label for="post"><u>Period</u></label>
                  </div>
                  </div>
                    <div class="form-group">
                          <div class="col-md-6">
                              <label for="example1"><br/>From</label>
                                <input  type="text" placeholder="Select FROM"  name="from1" id="example1" class="form-control input-sm">
                          </div>
                    </div>
                       <div class="form-group">                 
                                            <div class="col-md-6">
                                        <label for="example2"><br/>To</label>
                       <input  type="text" placeholder="Select TO"  name="to1" id="example2" class="form-control input-sm">
                                            </div>
                                       
                       </div>
                       
                       <div class="form-group">
                                            
                        <div class="col-md-12">                 
                                        
                  <label for="post"><br/><u>Pay</u></label>
                  </div>
                  </div>
                  <div class="form-group">
                          <div class="col-md-6">
                              <label for="subs"><br/>Substantive</label>
                                <input  type="text" placeholder="Substantive"  name="sub" id="subs" class="form-control input-sm">
                          </div>
                    </div>
                       <div class="form-group">                 
                                            <div class="col-md-6">
                                        <label for="offi"><br/>Officiating</label>
                       <input  type="text" placeholder="officiating"  name="off" id="offi" class="form-control input-sm">
                                            </div>
                                       
                       </div>
                       <div class="form-group">
                                         <div class="col-md-6">
                                            <label for="post"><br/>Post,scale of pay and office</label>
                       <textarea  cols="50" name="post" id="post" class="form-control input-sm">
                       </textarea>
               </div>
                                        </div>
                       <div class="form-group">
                                         <div class="col-md-6">
                                            <label for="event"><br/>Event afffecting cols (pay ,post and scale of pay)</label>
                       <textarea  cols="50" name="event" id="event" class="form-control input-sm">
                       </textarea>
               </div>
                                        </div>
    
                                        
                <div class="form-group">
                                            <div class="col-md-12">
                                        <label for="rema"><br/>Remarks</label>
                       <input  type="text" placeholder="remarks"  name="remarks" id="rema" class="form-control input-sm">
                       
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
