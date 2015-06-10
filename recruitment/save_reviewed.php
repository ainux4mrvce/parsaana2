<!--Sagar S.N-->
<!DOCTYPE html>

<html>
<head>
    <title>Reviewed</title>
    <link rel="icon" type="image/gif" href="images/collogo.jpg">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css"/>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<?php

require "connect.php";
session_start();
$user=$_SESSION['loggedin_user'];

$appid=$_POST['appid'];

$fname=$_POST['name'];

$degree=$_POST['degree'];
$date1=$_POST['date1'];
$university=$_POST['university'];
$college=$_POST['college'];
$agg=$_POST['agg'];

$pdegree=$_POST['pdegree'];
$pdate=$_POST['pdate'];
$puniversity=$_POST['puniversity'];
$pcollege=$_POST['pcollege'];
$pagg=$_POST['pagg'];

$udegree=$_POST['udegree'];
$udate=$_POST['udate'];
$uuniversity=$_POST['uuniversity'];
$ucollege=$_POST['ucollege'];
$uagg=$_POST['uagg'];

$pgdegree=$_POST['pgdegree'];
$pgdate=$_POST['pgdate'];
$pguniversity=$_POST['pguniversity'];
$pgcollege=$_POST['pgcollege'];
$pgagg=$_POST['pgagg'];

$phdegree=$_POST['phdegree'];
$phdate=$_POST['phdate'];
$phuniversity=$_POST['phuniversity'];
$phcollege=$_POST['phcollege'];
$phagg=$_POST['phagg'];

$odegree=$_POST['odegree'];
$odate=$_POST['odate'];
$ouniversity=$_POST['ouniversity'];
$ocollege=$_POST['ocollege'];
$oagg=$_POST['oagg'];

$noftexp=$_POST['noftexp'];
$nofiexp=$_POST['nofiexp'];
$nofrexp=$_POST['nofrexp'];

$evalmarks=$_POST['evalmarks'];
$remarks=$_POST['remarks'];


if($user=="Principal")
{
$result=$con->query("insert into save_reviewed(appid,fname,degree,date1,university,college,agg,
 pdegree,pdate,puniversity,pcollege,pagg,
 udegree,udate,uuniversity,ucollege,uagg,
 pgdegree,pgdate,pguniversity,pgcollege,pgagg,
 phdegree,phdate,phuniversity,phcollege,phagg,
 odegree,odate,ouniversity,ocollege,oagg,noftexp,nofiexp,nofrexp,evalmarks,remarks)values('{$appid}','{$fname}',
'{$degree}','{$date1}','{$university}','{$college}','{$agg}',
'{$pdegree}','{$pdate}','{$puniversity}','{$pcollege}','{$pagg}',
'{$udegree}','{$udate}','{$uuniversity}','{$ucollege}','{$uagg}',
'{$pgdegree}','{$pgdate}','{$pguniversity}','{$pgcollege}','{$pgagg}',
'{$phdegree}','{$phdate}','{$phuniversity}','{$phcollege}','{$phagg}',
'{$odegree}','{$odate}','{$ouniversity}','{$ocollege}','{$oagg}',
'{$noftexp}','{$nofiexp}','{$nofrexp}','{$evalmarks}','{$remarks}'
)");
}

if($user=="Advisor")
{
 $result=$con->query("insert into save_reviewed2(appid,fname,degree,date1,university,college,agg,
 pdegree,pdate,puniversity,pcollege,pagg,
 udegree,udate,uuniversity,ucollege,uagg,
 pgdegree,pgdate,pguniversity,pgcollege,pgagg,
 phdegree,phdate,phuniversity,phcollege,phagg,
 odegree,odate,ouniversity,ocollege,oagg,noftexp,nofiexp,nofrexp,evalmarks,remarks)values('{$appid}','{$fname}',
'{$degree}','{$date1}','{$university}','{$college}','{$agg}',
'{$pdegree}','{$pdate}','{$puniversity}','{$pcollege}','{$pagg}',
'{$udegree}','{$udate}','{$uuniversity}','{$ucollege}','{$uagg}',
'{$pgdegree}','{$pgdate}','{$pguniversity}','{$pgcollege}','{$pgagg}',
'{$phdegree}','{$phdate}','{$phuniversity}','{$phcollege}','{$phagg}',
'{$odegree}','{$odate}','{$ouniversity}','{$ocollege}','{$oagg}',
'{$noftexp}','{$nofiexp}','{$nofrexp}','{$evalmarks}','{$remarks}'
)");
}

if($user=="Vice Principal")
{
 $result=$con->query("insert into save_reviewed3(appid,fname,degree,date1,university,college,agg,
 pdegree,pdate,puniversity,pcollege,pagg,
 udegree,udate,uuniversity,ucollege,uagg,
 pgdegree,pgdate,pguniversity,pgcollege,pgagg,
 phdegree,phdate,phuniversity,phcollege,phagg,
 odegree,odate,ouniversity,ocollege,oagg,noftexp,nofiexp,nofrexp,evalmarks,remarks)values('{$appid}','{$fname}',
'{$degree}','{$date1}','{$university}','{$college}','{$agg}',
'{$pdegree}','{$pdate}','{$puniversity}','{$pcollege}','{$pagg}',
'{$udegree}','{$udate}','{$uuniversity}','{$ucollege}','{$uagg}',
'{$pgdegree}','{$pgdate}','{$pguniversity}','{$pgcollege}','{$pgagg}',
'{$phdegree}','{$phdate}','{$phuniversity}','{$phcollege}','{$phagg}',
'{$odegree}','{$odate}','{$ouniversity}','{$ocollege}','{$oagg}',
'{$noftexp}','{$nofiexp}','{$nofrexp}','{$evalmarks}','{$remarks}'
)");
}


if($user=="Registrar")
{
 $result=$con->query("insert into save_reviewed4(appid,fname,degree,date1,university,college,agg,
 pdegree,pdate,puniversity,pcollege,pagg,
 udegree,udate,uuniversity,ucollege,uagg,
 pgdegree,pgdate,pguniversity,pgcollege,pgagg,
 phdegree,phdate,phuniversity,phcollege,phagg,
 odegree,odate,ouniversity,ocollege,oagg,noftexp,nofiexp,nofrexp,evalmarks,remarks)values('{$appid}','{$fname}',
'{$degree}','{$date1}','{$university}','{$college}','{$agg}',
'{$pdegree}','{$pdate}','{$puniversity}','{$pcollege}','{$pagg}',
'{$udegree}','{$udate}','{$uuniversity}','{$ucollege}','{$uagg}',
'{$pgdegree}','{$pgdate}','{$pguniversity}','{$pgcollege}','{$pgagg}',
'{$phdegree}','{$phdate}','{$phuniversity}','{$phcollege}','{$phagg}',
'{$odegree}','{$odate}','{$ouniversity}','{$ocollege}','{$oagg}',
'{$noftexp}','{$nofiexp}','{$nofrexp}','{$evalmarks}','{$remarks}'
)");
}

if($user=="VTU Nominee")
{
 $result=$con->query("insert into save_reviewed5(appid,fname,degree,date1,university,college,agg,
 pdegree,pdate,puniversity,pcollege,pagg,
 udegree,udate,uuniversity,ucollege,uagg,
 pgdegree,pgdate,pguniversity,pgcollege,pgagg,
 phdegree,phdate,phuniversity,phcollege,phagg,
 odegree,odate,ouniversity,ocollege,oagg,noftexp,nofiexp,nofrexp,evalmarks,remarks)values('{$appid}','{$fname}',
'{$degree}','{$date1}','{$university}','{$college}','{$agg}',
'{$pdegree}','{$pdate}','{$puniversity}','{$pcollege}','{$pagg}',
'{$udegree}','{$udate}','{$uuniversity}','{$ucollege}','{$uagg}',
'{$pgdegree}','{$pgdate}','{$pguniversity}','{$pgcollege}','{$pgagg}',
'{$phdegree}','{$phdate}','{$phuniversity}','{$phcollege}','{$phagg}',
'{$odegree}','{$odate}','{$ouniversity}','{$ocollege}','{$oagg}',
'{$noftexp}','{$nofiexp}','{$nofrexp}','{$evalmarks}','{$remarks}'
)");
}

if($user=="HOD")
{
 $result=$con->query("insert into save_reviewed6(appid,fname,degree,date1,university,college,agg,
 pdegree,pdate,puniversity,pcollege,pagg,
 udegree,udate,uuniversity,ucollege,uagg,
 pgdegree,pgdate,pguniversity,pgcollege,pgagg,
 phdegree,phdate,phuniversity,phcollege,phagg,
 odegree,odate,ouniversity,ocollege,oagg,noftexp,nofiexp,nofrexp,evalmarks,remarks)values('{$appid}','{$fname}',
'{$degree}','{$date1}','{$university}','{$college}','{$agg}',
'{$pdegree}','{$pdate}','{$puniversity}','{$pcollege}','{$pagg}',
'{$udegree}','{$udate}','{$uuniversity}','{$ucollege}','{$uagg}',
'{$pgdegree}','{$pgdate}','{$pguniversity}','{$pgcollege}','{$pgagg}',
'{$phdegree}','{$phdate}','{$phuniversity}','{$phcollege}','{$phagg}',
'{$odegree}','{$odate}','{$ouniversity}','{$ocollege}','{$oagg}',
'{$noftexp}','{$nofiexp}','{$nofrexp}','{$evalmarks}','{$remarks}'
)");
}


if($result)
{
    echo"<body>
    <br/>
    <div class='container'>
     <div class='alert alert-success' id='demo-alert'>
        <a href='#' class='close' data-dismiss='alert'>×</a>
       <h2>Candidate with Application ID ' $appid ' Reviewed Successfully!!</h2>
     <!--  <a href='evaluation.php' >View Consolidated Evaluation Sheet</a>-->
     <a href='javascript:history.go(-1)' class='btn btn-warning' role='button'>&laquo;Go Back</a>
   </div>
    </div>
</body>";
}
else
{
    echo"<body style='font-family: Segoe UI,Arial'>
    <br/>
    
     <div class='alert alert-danger' id='demo-alert'>
        <a href='#' class='close' data-dismiss='alert'>×</a>
       <h2>Respected $user, You Have Already Reviewed Applicant with Application ID - '$appid'</h2>
       <a href='javascript:history.go(-1)' class='btn btn-warning' role='button'>&laquo;Go Back</a>
   </div>
   
</body>";
}

?>