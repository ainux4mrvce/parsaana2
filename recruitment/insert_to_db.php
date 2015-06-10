<!--Sagar S.N-->
<?php $success=''?>
<!DOCTYPE html>
<html>
<head>
    <title>Application Form</title>
    <link rel="icon" type="image/gif" href="images/collogo.jpg">

 <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css"/>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>

<script>
$(document).ready(function(){
	$(".close").click(function(){
		$("#demo-alert").alert();
	});
});    
</script>
</head>
<?php
//Importing Database_Connection File
require "connect.php";

//if(isset($_POST['submit'])) //Once Submit Button is Clicked
//{
// Receiving From Client STARTS
$post=$_POST['post'];
$dept=$_POST['dept'];
$job=$_POST['job'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$ppost=$_POST['ppost'];
$dob=$_POST['dob'];
$age=$_POST['age'];
$address=$_POST['address'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$martial_status=$_POST['martial_status'];
$nofsons=$_POST['nofsons'];
$nofdaughters=$_POST['nofdaughters'];
$nofparents=$_POST['nofparents'];

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

$asp=$_POST['asp'];
$pc=$_POST['pc'];
$nofrpe=$_POST['nofrpe'];
$nofrpp=$_POST['nofrpp'];
$comp_skills=$_POST['comp_skills'];
$lang=$_POST['lang'];

$instnamea=$_POST['instnamea'];
$desga=$_POST['desga'];
$fdatea=$_POST['fdatea'];
$tdatea=$_POST['tdatea'];

$instnameb=$_POST['instnameb'];
$desgb=$_POST['desgb'];
$fdateb=$_POST['fdateb'];
$tdateb=$_POST['tdateb'];

$instnamec=$_POST['instnamec'];
$desgc=$_POST['desgc'];
$fdatec=$_POST['fdatec'];
$tdatec=$_POST['tdatec'];

$noftexp=$_POST['noftexp'];
$nofiexp=$_POST['nofiexp'];
$nofrexp=$_POST['nofrexp'];

$hob=$_POST['hob'];
$heal=$_POST['heal'];

$ref1=$_POST['ref1'];
$con1=$_POST['con1'];

$ref2=$_POST['ref2'];
$con2=$_POST['con2'];
 

 // Receiving From Client ENDS


//Inserting Received Data from Client into Database STARTS
if($insert=$con->query("insert into registration
(post,dept,job,
 fname,lname,
 ppost,
 dob,age,
 address,
 phone,email,
 martial_status,nofsons,nofdaughters,nofparents,

 degree,date1,university,college,agg,
 pdegree,pdate,puniversity,pcollege,pagg,
 udegree,udate,uuniversity,ucollege,uagg,
 pgdegree,pgdate,pguniversity,pgcollege,pgagg,
 phdegree,phdate,phuniversity,phcollege,phagg,
 odegree,odate,ouniversity,ocollege,oagg,
 asp,pc,nofrpe,
 nofrpp,comp_skills,lang,

 instnamea,desga,fdatea,tdatea,
 instnameb,desgb,fdateb,tdateb,
 instnamec,desgc,fdatec,tdatec,

 noftexp,nofiexp,nofrexp,

 hob,heal,
 ref1,con1,
 ref2,con2
)
values

('{$post}','{$dept}','{$job}','{$fname}','{$lname}','{$ppost}','{$dob}','{$age}',
'{$address}','{$phone}','{$email}','{$martial_status}','{$nofsons}','{$nofdaughters}','{$nofparents}',

'{$degree}','{$date1}','{$university}','{$college}','{$agg}',
'{$pdegree}','{$pdate}','{$puniversity}','{$pcollege}','{$pagg}',
'{$udegree}','{$udate}','{$uuniversity}','{$ucollege}','{$uagg}',
'{$pgdegree}','{$pgdate}','{$pguniversity}','{$pgcollege}','{$pgagg}',
'{$phdegree}','{$phdate}','{$phuniversity}','{$phcollege}','{$phagg}',
'{$odegree}','{$odate}','{$ouniversity}','{$ocollege}','{$oagg}',
 
'{$asp}','{$pc}','{$nofrpe}',

'{$nofrpp}','{$comp_skills}','{$lang}',

'{$instnamea}','{$desga}','{$fdatea}','{$tdatea}',
'{$instnameb}','{$desgb}','{$fdateb}','{$tdateb}',
'{$instnamec}','{$desgc}','{$fdatec}','{$tdatec}',

'{$noftexp}','{$nofiexp}','{$nofrexp}',

'{$hob}','{$heal}',

'{$ref1}','{$con1}',
'{$ref2}','{$con2}')"))
{
   $success="Successfully Applied!!";
   $success1="Your Application Will be Reviewed and If You are Selected We will Contact You at EMAIL - $email";    
}
else
{
    echo "Failed to Apply";
}
//Inserting Received Data from Client into Database ENDS

//}//isset ENDS Here
?>
<body style="font-family: Segoe UI,Arial">
    <br/>
    <div class="container">
     <div class="alert alert-success" id="demo-alert">
        <a href="#" class="close" data-dismiss="alert">×</a>
        <?php echo "<strong><h2>$success</h2></strong>"?>
        <?php echo "<strong><h4>$success1</h4></strong>"?>
        <a href="home.php">Go Home</a>
   </div>
    </div>
</body>
