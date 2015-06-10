<?php
include("config.php");
$name=$_GET["name"];
$sql = "SELECT * from reg WHERE name = '$name'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       
$eid=$row["eid"];
$name=$row["name"];
$post=$row["post"];
$doj=	$row["doj"];
$dob=	$row["do"];
$ps1=	$row["ps1"];
$pn1=	$row["pn1"];
$pp1=	$row["pp1"];
$ps2=	$row["ps2"];
$pn2=	$row["pn2"];
$pp2=	$row["pp2"];
$ps3=	$row["ps3"];
$pn3=	$row["pn3"];
$pp3=	$row["pp3"];
$effort=$row["effort"];
$speak=$row["speak"];
$read=$row["readss"];
$write=$row["writes"];
$s1=	$row["s1"];
$s2=	$row["s2"];    
$s3=	$row["s3"];
$s4=	$row["s4"];
$s5=	$row["s5"];
$s6=	$row["s6"];
$s7=	$row["s7"];
$s8=	$row["s8"];
$s9=	$row["s9"];
$s10=	$row["s10"];
$s11=	$row["s11"];

$ho1=$row["ho1"];
$ho2=$row["ho2"];
$ho3=$row["ho3"];
$ho4=$row["ho4"];
$ho5=$row["ho5"];
$ho6=$row["ho6"];
$ho7=$row["ho7"];
$ho8=$row["ho8"];
$ho9=$row["ho9"];
$ho10=$row["ho10"];
$ho11=$row["ho11"];

$pr1=$row["pr1"];
$pr2=$row["pr2"];
$pr3=$row["pr3"];
$pr4=$row["pr4"];
$pr5=$row["pr5"];
$pr6=$row["pr6"];
$pr7=$row["pr7"];
$pr8=$row["pr8"];
$pr9=$row["pr9"];
$pr10=$row["pr10"];
$pr11=$row["pr11"];


$a1=	$row["a1"];
$a2=	$row["a2"];
$a3=	$row["a3"];
$a4=	$row["a4"];
$a5=	$row["a5"];
$a6=	$row["a6"];
$a7=	$row["a7"];
$a8=	$row["a8"];
$a9=	$row["a9"];
$a10=	$row["a10"];
$b1=	$row["b1"];
$b2=	$row["b2"];
$b3=	$row["b3"];
$b4=	$row["b4"];
$b5=	$row["b5"];
$b6=	$row["b6"];
$b7=	$row["b7"];
$b8=	$row["b8"];
$b9=	$row["b9"];
$b10=	$row["b10"];
$c1=	$row["c1"];
$c2=	$row["c2"];
$c3=	$row["c3"];
$c4=	$row["c4"];
$c5=	$row["c5"];
$c6=	$row["c6"];
$c7=	$row["c7"];
$c8=	$row["c8"];
$c9=	$row["c9"];
$c10=	$row["c10"];
$d1=	$row["d1"];
$d2=	$row["d2"];
$d3=	$row["d3"];
$d4=	$row["d4"];
$d5=	$row["d5"];
$d6=	$row["d6"];
$d7=	$row["d7"];
$d8=	$row["d8"];
$d9=	$row["d9"];
$d10=	$row["d10"];
$e1=	$row["e1"];
$e2=	$row["e2"];
$e3=	$row["e3"];
$e4=	$row["e4"];
$e5=	$row["e5"];
$e6=	$row["e6"];
$e7=	$row["e7"];
$e8=	$row["e8"];
$e9=	$row["e9"];
$e10=	$row["e10"];
$f1=	$row["f1"];
$f2=	$row["f2"];
$f3=	$row["f3"];
$f4=	$row["f4"];
$f5=	$row["f5"];
$f6=	$row["f6"];
$f7=	$row["f7"];
$f8=	$row["f8"];
$f9=	$row["f9"];
$f10=	$row["f10"];
$g1=	$row["g1"];
$g2=	$row["g2"];
$g3=	$row["g3"];
$g4=	$row["g4"];
$g5=	$row["g5"];
$g6=	$row["g6"];
$g7=	$row["g7"];
$g8=	$row["g8"];
$g9=	$row["g9"];
$g10=	$row["g10"];
$h1=	$row["h1"];
$h2=	$row["h2"];
$h3=	$row["h3"];
$h4=	$row["h4"];
$h5=	$row["h5"];
$h6=	$row["h6"];
$h7=	$row["h7"];
$h8=	$row["h8"];
$h9=	$row["h9"];
$h10=	$row["h10"];
$la1=	$row["la1"];
$la2=	$row["la2"];
$la3=	$row["la3"];
$la4=	$row["la4"];
$la5=	$row["la5"];
$la6=	$row["la6"];
$la7=	$row["la7"];
$la8=	$row["la8"];
$la9=	$row["la9"];
$la10=	$row["la10"];
$lb1=	$row["lb1"];
$lb2=	$row["lb2"];
$lb3=	$row["lb3"];
$lb4=	$row["lb4"];
$lb5=	$row["lb5"];
$lb6=	$row["lb6"];
$lb7=	$row["lb7"];
$lb8=	$row["lb8"];
$lb9=	$row["lb9"];
$lb10=	$row["lb10"];
$lc1=	$row["lc1"];
$lc2=	$row["lc2"];
$lc3=	$row["lc3"];
$lc4=	$row["lc4"];
$lc5=	$row["lc5"];
$lc6=	$row["lc6"];
$lc7=	$row["lc7"];
$lc8=	$row["lc8"];
$lc9=	$row["lc9"];
$lc10=	$row["lc10"];
$ld1=	$row["ld1"];
$ld2=	$row["ld2"];
$ld3=	$row["ld3"];
$ld4=	$row["ld4"];
$ld5=	$row["ld5"];
$ld6=	$row["ld6"];
$ld7=	$row["ld7"];
$ld8=	$row["ld8"];
$ld9=	$row["ld9"];
$ld10=	$row["ld10"];
$le1=	$row["le1"];
$le2=	$row["le2"];
$le3=	$row["le3"];
$le4=	$row["le4"];
$le5=	$row["le5"];
$le6=	$row["le6"];
$le7=	$row["le7"];
$le8=	$row["le8"];
$le9=	$row["le9"];
$le10=	$row["le10"];
$lf1=	$row["lf1"];
$lf2=	$row["lf2"];
$lf3=	$row["lf3"];
$lf4=	$row["lf4"];
$lf5=	$row["lf5"];
$lf6=	$row["lf6"];
$lf7=	$row["lf7"];
$lf8=	$row["lf8"];
$lf9=	$row["lf9"];
$lf10=	$row["lf10"];
$pa1=	$row["pa1"];
$pa2=	$row["pa2"];
$pa3=	$row["pa3"];
$pa4=	$row["pa4"];
$pb1=	$row["pb1"];
$pb2=	$row["pb2"];
$pb3=	$row["pb3"];
$pb4=	$row["pb4"];
$pc1=	$row["pc1"];
$pc2=	$row["pc2"];
$pc3=	$row["pc3"];
$pc4=	$row["pc4"];
$pd1=	$row["pd1"];
$pd2=	$row["pd2"];
$pd3=	$row["pd3"];
$pd4=	$row["pd4"];
$pe1=	$row["pe1"];
$pe2=	$row["pe2"];
$pe3=	$row["pe3"];
$pe4=	$row["pe4"];
$pf1=	$row["pf1"];
$pf2=	$row["pf2"];
$pf3=	$row["pf3"];
$pf4=	$row["pf4"];
$totals1=$s1+$s2+$s3+$s4+$s5+$s6+$s7+$s8+$s9+$s10+$s11;
$totalho=$ho1+$ho2+$ho3+$ho4+$ho5+$ho6+$ho7+$ho8+$ho9+$ho10+$ho11;
$totalpr=$pr1+$pr2+$pr3+$pr4+$pr5+$pr6+$pr7+$pr8+$pr9+$pr10+$pr11;




    }
} else {
    echo "0 results";
}
$conn->close();
?> 





<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PERFORMANCE TRACKING</title>
 <link rel="icon" type="image/gif" href="images/collogo.jpg">
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>





 <script>


  function generatePDF(){ 

  var conv = new ActiveXObject("pdfServMachine.converter");
  conv.convert("http://www.google.com", "c:\\google.pdf", false);
  WScript.Echo("finished conversion");
 }

 </script>
 <body onload="generatePDF()">
 
<div class="container">
<form action="checkstatus.php" ><input class="btn btn-primary btn-primary custom" type="submit" value="GO BACK"/></form>
</div>










<form action="principalinsertdb.php" method="POST">
<div style="width:100%; float:left; text-align:center;"><input style="min-width: 200px;font-weight: bold;height: 30px;padding: 5px;cursor: pointer;" type="button" onClick="printContent('ack')" value="PRINT" /></div>
<div id="ack">
<center>
 <img src="images/collogo.jpg" class="img-circle" height="120px" width="120px">
 </center>
   <div class="container">
   <div class="row">
   <center>
  <pre>  R.V. COLLEGE OF ENGINEERING
        BANGALORE-560059.
(Autonomous Institution Affiliated to VTU, Belgaum)
FACULTY PERFORMANCE APPRAISAL REPORT
FOR THE ACADEMIC YEAR 2015
(EVEN & ODD SEMESTER)<br><br></pre>
<hr>

   </center>

   </div>

   <div class="row">
   <div class="col-lg-2">
   </div>
   <div class="col-lg-8">
   Part – A: General Information<br>
   Employee Id<input type="text" name="eid" value="<?php echo "$eid"; ?>" readonly  class="form-control">
   <input type="hidden" value="<?php echo "$eid"; ?>" readonly  name="eeid">
   <table class="table table-bordered">
   
   <th></th>


   
   <tr><td>1</td><td width="40%">Name of the Faculty with Designation</td><td width="60%"><input type="text" name="name" value="<?php echo "$name"; ?>" readonly  class="form-control"></td><tr>
   <tr><td>2</td><td>Post held during the year & Details of previous positions in the institute from the latest</td><td><input type="text" name="post" value="<?php echo "$post"; ?>" readonly  class="form-control"></td></tr>
   <tr><td>3</td><td>Date of Joining the College</td><td><input type="text" name="doj" value="<?php echo "$doj"; ?>" readonly  class="form-control"></td></tr>
   <tr><td>4</td><td>Date of Birth</td><td><input type="text" name="dob" value="<?php echo "$dob"; ?>" readonly   
   class="form-control"></td></tr>
   <tr><td>5</td><td>Period of absence from duty on Leave, Training etc., during the year under report</td><td>Sl.<input type="text" name="ps1" value="<?php echo "$ps1"; ?>" readonly   size="1"> Nature of Absence <input type="text" name="pn1" value="<?php echo "$pn1";?>" readonly  size="10">Period<input type="text" name="pp1" value="<?php echo "$pp1"; ?>" readonly  size="11">Sl.<input type="text" name="ps2" value="<?php echo "$ps2"; ?>" readonly  size="1"> Nature of Absence <input type="text" name="pn2" value="<?php echo "$pn2"; ?>" readonly  size="10">Period<input type="text" name="pp2" value="<?php echo "$pp2"; ?>" readonly  size="11">Sl.<input type="text" name="ps3" value="<?php echo "$ps3"; ?>" readonly  size="1"> Nature of Absence <input type="text" name="pn3" value="<?php echo "$pn3"; ?>" readonly size="10">Period<input type="text" name="pp3" value="<?php echo "$pp3"; ?>" readonly size="11"></td></tr>
   <tr><td>6</td><td>Efforts made to compensate classes during the period of absence.</td><td><input type="text" name="effort" value="<?php echo "$effort"; ?>" readonly  class="form-control"></td></tr>
   <tr><td>7</td><td>Knowledge of Kannada   (Yes/No)</td>
       <td>Speak<input type="text" name="speak" value="<?php echo "$speak"; ?>" readonly   size=5 >
           Read <input type="text" name="read" value="<?php echo "$read"; ?>" readonly  size=5>
           Write <input type="text" name="write" value="<?php echo "$write"; ?>" readonly  size=5></td>
           


        </tr>       


   
   </table>
   
   </div>
   
   </div>
   </div>
<hr>

<br><br><br>


   <div class="container">
    <div class="col-lg-2">
   </div>
   <div class="col-lg-8">


  Part B: Detailed Appraisal to be filled by the faculty and evaluated by Concerned HOD / Principal
   <table class="table table-bordered">
   
   <th>Sl no<td>Description</td><td>Self Appraisal  Faculty</td><td>HOD</td><td>Principal</td></th>


   
   <tr><td>1</td><td width="70%">Academic Performance (Details)  (40 Points):  Subject Taught ( Theory & Lab) / B.Tech / M.Tech students projects guided with title (Internal and External activities)/Lesson Plans (5), Teaching/course material preparation and submission in time (5),  Course delivery /Student Feedback /(20) ,
Facilitating Experiential  learning, Assignment, effective examination process enabling etc.(10) in the year of assessment (also provide Previous two years data for comparison.) ( Annexure I).
</td><td width="10%"><input type="text" name="s1" value="<?php echo "$s1"; ?>" readonly  class="form-control"></td><td width="10%"><input type="text" name="ho1" value="<?php echo "$ho1"; ?>" readonly class="form-control"></td><td width="10%"><input type="text" name="pr1" value="<?php echo "$pr1"; ?>" readonly class="form-control"></td><tr>
   <tr><td>2</td><td>Contribution to Departmental Activities (30 Points) including facilitation for compliance activities. (UG Accreditation (10), PG Accreditation (10), VTU LIC visit and Research Centre (10) (Annexure II) </td><td><input type="text" name="s2" value="<?php echo "$s2"; ?>" readonly class="form-control"></td><td><input type="text"  name="ho2" value="<?php echo "$ho2"; ?>" readonly  class="form-control"></td><td><input type="text" name="pr2" value="<?php echo "$pr2"; ?>"  readonly class="form-control"></td></tr>
   <tr><td>3</td><td>No. of Research Publications (20 Points): National and International (Journals / Conferences should be shown separately). Please add names of all the contributors, including external collaborators with Titles/Journals Name /Volume/page no/year. (Annexure III) [Indexed journal publications/ patents(10), Other journals (5) & Conference papers (5)</td><td><input type="text" name="s3" value="<?php echo "$s3"; ?>" readonly  class="form-control"></td><td><input type="text" name="ho3" value="<?php echo "$ho3"; ?>" readonly class="form-control"></td><td><input type="text" name="pr3" value="<?php echo "$pr3"; ?>" readonly class="form-control"></td></tr>
   <tr><td>4</td><td>Other Publications Academic community Interaction: (10 Points) Books published, Invited talks /Sessions Chaired / Organized  Symposium / Conference / Workshop / FDP Program. etc (Annexure IV) </td><td><input type="text" name="s4" value="<?php echo "$s4"; ?>" readonly   class="form-control"></td><td><input type="text" name="ho4" value="<?php echo "$ho4"; ?>" readonly class="form-control"></td><td><input type="text" name="pr4"  value="<?php echo "$pr4"; ?>" readonly class="form-control"></td></tr>
   <tr><td>5</td><td>PhD Status ( 10 Points): Faculty pursuing PhD provide details included course work, experiments, and exam work. For Faculty guiding Research Scholars, provide the details about the No of students, status of progress with copy of review report submitted, papers published etc (Annexure V)  </td><td><input type="text" name="s5" value="<?php echo "$s5"; ?>" readonly  class="form-control"></td><td><input type="text" name="ho5" value="<?php echo "$ho5"; ?>" readonly  class="form-control"></td><td><input type="text" name="pr5"  value="<?php echo "$pr5"; ?>"  readonly class="form-control"></td></tr>
   <tr><td>6</td><td>R&D Projects ( 25 Points). List of on-going Projects, Consultancy, royalties received(20), Research Proposal sent (5)  ( Annexure VI) </td><td><input type="text" name="s6" value="<?php echo "$s6"; ?>" readonly class="form-control"></td><td><input type="text" name="ho6" value="<?php echo "$ho6"; ?>" readonly class="form-control"></td><td><input type="text" name="pr6" value="<?php echo "$pr6"; ?>" readonly class="form-control"></td></tr>
   <tr><td>7</td><td>Counselor /Mentoring(15 Points): Counselor to provide a list of students, (with details of meeting & any facilitation). Mentoring  younger faculty in your areas of teaching or  R&D  expertise (Annexure VII)</td><td><input type="text" name="s7" value="<?php echo "$s7"; ?>" readonly class="form-control"></td><td><input type="text" name="ho7" value="<?php echo "$ho7"; ?>" readonly  class="form-control"></td><td><input type="text" name="pr7" value="<?php echo "$pr7"; ?>" readonly class="form-control"></td></tr>
   <tr><td>8</td><td>Initiative, Interpersonal Skills & drive (10 Points): Motivation towards works, Discipline, Attendance, Willingness to stay overtime to finish pending work. Willingness to learn about new areas, Willingness to accept the responsibility and to take decision. Attitude towards colleagues, parents  Students and other external visitors. (Annexure VIII)</td><td><input type="text" name="s8" value="<?php echo "$s8"; ?>" readonly  class="form-control"></td><td><input type="text" name="ho8" value="<?php echo "$ho8"; ?>" readonly class="form-control"></td><td><input type="text" name="pr8" value="<?php echo "$pr8"; ?>" readonly class="form-control"></td></tr>
   <tr><td>9</td><td>Future Plan (20 Points): Plans for the next year in terms of Academics / Research / Consultancy/ Funded Projects/Institutional activities with specific details. (Annexure IX) </td><td><input type="text" name="s9" value="<?php echo "$s9"; ?>" readonly class="form-control"></td><td><input type="text" name="ho9" value="<?php echo "$ho9"; ?>" readonly class="form-control"></td><td><input type="text" name="pr9" value="<?php echo "$pr9"; ?>" readonly class="form-control"></td></tr>          
   <tr><td>10</td><td>Contribution to Institutional Activities (10 Points) including volunteering for new initiatives respect to other  institutional  activities / Compliance / Extracurricular / Co-Curricular/ Professional bodies  and Interdepartmental activities, Industrial Collaboration  (Annexure III)</td><td><input type="text" name="s10" value="<?php echo "$s10"; ?>" readonly class="form-control"></td><td><input type="text" name="ho10" value="<?php echo "$ho10"; ?>" readonly class="form-control"></td><td><input type="text" name="pr10" value="<?php echo "$pr10"; ?>"readonly  class="form-control"></td></tr>
   <tr><td>11</td><td>Any other initiative/Achievement (10 Points):  Relevant to Facilitating/ Enhancing Teaching / Learning / Research, Industry interaction, Societal enabling and Consultancy. (Annexure X)</td><td><input type="text" name="s11" value="<?php echo "$s11"; ?>" readonly class="form-control"></td><td><input type="text" name="ho11" value="<?php echo "$ho11"; ?>" readonly class="form-control"></td><td><input type="text" name="pr11" value="<?php echo "$pr11"; ?>" readonly class="form-control"></td></tr>
   <tr><td></td><td> Total Points</td><td><input type="text" value="<?php echo "$totals1"; ?>" readonly class="form-control">/200</td><td><input type="text" value="<?php echo "$totalho"; ?>" readonly class="form-control">/200</td><td><input type="text" value="<?php echo "$totalpr"; ?>" readonly class="form-control">/200</td></tr>
   </table>


   </div>
   </div>

<hr>
   <div class="container">
    
   <div class="col-lg-12">

<pre>ANNEXURE – I: ACADEMIC PERFORMANCE (WITH SUPPORINTG DOCUMENTS)



<table class="table table-bordered">
<th><td></td><td></td><td></td><td colspan="2">Total No. of Classes</td><td></td><td colspan="2">Percentage of Pass & Grades </td><td> </td><td></td></th>
<tr><td></td><td>Course Code & Name </td><td>Class & Strength of Students</td><td>Average Percentage Attendance for the Semester</td><td>As per 
Time Table</td><td>Actually Held</td><td>Percentage of Syllabus covered</td><td>CIE</td><td>SEE</td><td>Students Feedback in the Courses </td><td>Remarks</td></tr>

<tr><td>1</td><td><input type="text" name="a1" value="<?php echo "$a1"; ?>" readonly class="form-control"></td><td><input type="text" name="a2" value="<?php echo "$a2"; ?>" readonly class="form-control"></td><td><input type="text" name="a3" value="<?php echo "$a3"; ?>" readonly class="form-control"> </td><td><input type="text" name="a4"    value="<?php echo "$a4"; ?>" readonly class="form-control"></td><td><input type="text" name="a5" value="<?php echo "$a5"; ?>" readonly class="form-control"></td><td><input type="text" name="a6" value="<?php echo "$a6"; ?>" readonly class="form-control"></td><td><input type="text" name="a7" value="<?php echo "$a7"; ?>" readonly class="form-control"></td><td><input type="text" name="a8" value="<?php echo "$a8"; ?>" readonly class="form-control"></td><td><input type="text" name="a9" value="<?php echo "$a9"; ?>" readonly class="form-control"></td><td><input type="text" name="a10" value="<?php echo "$a10"; ?>" readonly class="form-control"></td></tr>
<tr><td>2</td><td><input type="text" name="b1" value="<?php echo "$b1"; ?>" readonly class="form-control"></td><td><input type="text" name="b2" value="<?php echo "$b2"; ?>" readonly class="form-control"></td><td><input type="text" name="b3" value="<?php echo "$b3"; ?>" readonly class="form-control"></td><td><input type="text" name="b4"     value="<?php echo "$b4"; ?>" readonly class="form-control"></td><td><input type="text" name="b5"  value="<?php echo "$b5"; ?>" readonly class="form-control"></td><td><input type="text" name="b6" value="<?php echo "$b6"; ?>" readonly class="form-control"></td><td><input type="text" name="b7" value="<?php echo "$b7"; ?>" readonly class="form-control"></td><td><input type="text" name="b8" value="<?php echo "$b8"; ?>" readonly class="form-control"></td><td><input type="text" name="b9" value="<?php echo "$b9"; ?>" readonly class="form-control"></td><td><input type="text" name="b10" value="<?php echo "$b10"; ?>" readonly class="form-control"></td></tr>
<tr><td>3</td><td><input type="text" name="c1" value="<?php echo "$c1"; ?>" readonly class="form-control"></td><td><input type="text"  name="c2" value="<?php echo "$c2"; ?>" readonly class="form-control"></td><td><input type="text"  name="c3" value="<?php echo "$c3"; ?>" readonly class="form-control"></td><td><input type="text"  name="c4"  value="<?php echo "$c4"; ?>" readonly class="form-control"></td><td><input type="text"  name="c5" value="<?php echo "$c5"; ?>" readonly class="form-control"></td><td><input type="text"  name="c6" value="<?php echo "$c6"; ?>" readonly class="form-control"></td><td><input type="text" name="c7" value="<?php echo "$c7"; ?>" readonly class="form-control"></td><td><input type="text" name="c8" value="<?php echo "$c8"; ?>" readonly class="form-control"></td><td><input type="text" name="c9" value="<?php echo "$c9"; ?>" readonly class="form-control"></td><td><input type="text" name="c10" value="<?php echo "$c10"; ?>" readonly class="form-control"></td></tr>
<tr><td>4</td><td><input type="text" name="d1" value="<?php echo "$d1"; ?>" readonly class="form-control"></td><td><input type="text"  name="d2" value="<?php echo "$d2"; ?>" readonly class="form-control"></td><td><input type="text"  name="d3" value="<?php echo "$d3"; ?>" readonly class="form-control"></td><td><input type="text"  name="d4"  value="<?php echo "$d4"; ?>" readonly class="form-control"></td><td><input type="text"  name="d5" value="<?php echo "$d5"; ?>" readonly class="form-control"></td><td><input type="text"  name="d6" value="<?php echo "$d6"; ?>" readonly class="form-control"></td><td><input type="text" name="d7" value="<?php echo "$d7"; ?>" readonly class="form-control"></td><td><input type="text" name="d8" value="<?php echo "$d8"; ?>" readonly class="form-control"></td><td><input type="text" name="d9" value="<?php echo "$d9"; ?>" readonly class="form-control"></td><td><input type="text" name="d10" value="<?php echo "$d10"; ?>" readonly class="form-control"></td></tr>
<tr><td>5</td><td><input type="text" name="e1" value="<?php echo "$e1"; ?>" readonly class="form-control"></td><td><input type="text"  name="e2" value="<?php echo "$e2"; ?>" readonly  class="form-control"></td><td><input type="text"  name="e3" value="<?php echo "$e3"; ?>" readonly class="form-control"></td><td><input type="text"  name="e4" value="<?php echo "$e4"; ?>" readonly class="form-control"></td><td><input type="text"  name="e5" value="<?php echo "$e5"; ?>" readonly class="form-control"></td><td><input type="text"  name="e6" value="<?php echo "$e6"; ?>" readonly class="form-control"></td><td><input type="text" name="e7" value="<?php echo "$e7"; ?>" readonly class="form-control"></td><td><input type="text" name="e8" value="<?php echo "$e8"; ?>" readonly class="form-control"></td><td><input type="text" name="e9" value="<?php echo "$e9"; ?>" readonly class="form-control"></td><td><input type="text" name="e10" value="<?php echo "$e10"; ?>" readonly class="form-control"></td></tr>
<tr><td>6</td><td><input type="text" name="f1" value="<?php echo "$f1"; ?>" readonly class="form-control"></td><td><input type="text"  name="f2" value="<?php echo "$f2"; ?>" readonly class="form-control"></td><td><input type="text"  name="f3" value="<?php echo "$f3"; ?>" readonly class="form-control"></td><td><input type="text"  name="f4"   value="<?php echo "$f4"; ?>" readonly class="form-control"></td><td><input type="text"  name="f5" value="<?php echo "$f5"; ?>" readonly class="form-control"></td><td><input type="text"  name="f6" value="<?php echo "$f6"; ?>" readonly class="form-control"></td><td><input type="text" name="f7" value="<?php echo "$f7"; ?>" readonly class="form-control"></td><td><input type="text" name="f8" value="<?php echo "$f8"; ?>" readonly class="form-control"></td><td><input type="text" name="f9" value="<?php echo "$f9"; ?>" readonly class="form-control"></td><td><input type="text" name="f10" value="<?php echo "$f10"; ?>" readonly class="form-control"></td></tr>
<tr><td>7</td><td><input type="text" name="g1" value="<?php echo "$g1"; ?>" readonly class="form-control"></td><td><input type="text"  name="g2" value="<?php echo "$g2"; ?>" readonly class="form-control"></td><td><input type="text"  name="g3" value="<?php echo "$g3"; ?>" readonly class="form-control"></td><td><input type="text"  name="g4"   value="<?php echo "$g4"; ?>" readonly class="form-control"></td><td><input type="text"  name="g5" value="<?php echo "$g5"; ?>" readonly class="form-control"></td><td><input type="text"  name="g6" value="<?php echo "$g6"; ?>" readonly class="form-control"></td><td><input type="text" name="g7" value="<?php echo "$g7"; ?>" readonly class="form-control"></td><td><input type="text" name="g8" value="<?php echo "$g8"; ?>" readonly class="form-control"></td><td><input type="text" name="g9" value="<?php echo "$g9"; ?>" readonly class="form-control"></td><td><input type="text" name="g10" value="<?php echo "$g10"; ?>" readonly class="form-control"></td></tr>
<tr><td>8</td><td><input type="text" name="h1" value="<?php echo "$h1"; ?>" readonly class="form-control"></td><td><input type="text"  name="h2" value="<?php echo "$h2"; ?>" readonly class="form-control"></td><td><input type="text"  name="h3" value="<?php echo "$h3"; ?>" readonly class="form-control"></td><td><input type="text"  name="h4"   value="<?php echo "$h4"; ?>" readonly class="form-control"></td><td><input type="text"  name="h5" value="<?php echo "$h5"; ?>" readonly class="form-control"></td><td><input type="text"  name="h6" value="<?php echo "$h6"; ?>" readonly class="form-control"></td><td><input type="text" name="h7" value="<?php echo "$h7"; ?>" readonly class="form-control"></td><td><input type="text" name="h8" value="<?php echo "$h8"; ?>" readonly  class="form-control"></td><td><input type="text" name="h9" value="<?php echo "$h9"; ?>" readonly class="form-control"></td><td><input type="text" name="h10" value="<?php echo "$h10"; ?>" readonly class="form-control"></td></tr>

 </table>
 
</div>
</div>
<hr>



   <div class="container">
    
   <div class="col-lg-12">

<pre><center>LABORATORY WORK (B.E / M.Tech)</center></pre>
<table class="table table-bordered">
<th><td></td><td></td><td></td><td colspan="2">Total No. of Classes</td><td></td><td colspan="2">Percentage of Pass & Grades </td><td> </td><td></td></th>
<tr><td></td><td>Course Code & Name </td><td>Class & Strength of Students</td><td>Average Percentage Attendance for the Semester</td><td>As per 
Time Table</td><td>Actually Held</td><td>Percentage of Syllabus covered</td><td>CIE</td><td>SEE</td><td>Students Feedback in the Courses </td><td>Remarks</td></tr>

<tr><td>1</td><td><input type="text" name="la1" value="<?php echo "$la1"; ?>" readonly class="form-control"></td><td><input type="text" name="la2" value="<?php echo "$la2"; ?>" readonly class="form-control"></td><td><input type="text" name="la3" value="<?php echo "$la3"; ?>" readonly class="form-control"></td><td><input type="text" name="la4" value="<?php echo "$la4"; ?>" readonly class="form-control"></td><td><input type="text" name="la5" value="<?php echo "$la5"; ?>" readonly class="form-control"></td><td><input type="text" name="la6" value="<?php echo "$la6"; ?>" readonly class="form-control"></td><td><input type="text" name="la7" value="<?php echo "$la7"; ?>" readonly class="form-control"></td><td><input type="text" name="la8" value="<?php echo "$la8"; ?>" readonly class="form-control"></td><td><input type="text" name="la9" value="<?php echo "$la9"; ?>" readonly class="form-control"></td><td><input type="text" name="la10" value="<?php echo "$la10"; ?>" readonly class="form-control"></td></tr>
<tr><td>2</td><td><input type="text" name="lb1" value="<?php echo "$lb1"; ?>" readonly class="form-control"></td><td><input type="text" name="lb2" value="<?php echo "$lb2"; ?>" readonly class="form-control"></td><td><input type="text" name="lb3" value="<?php echo "$lb3"; ?>" readonly class="form-control"></td><td><input type="text" name="lb4" value="<?php echo "$lb4"; ?>" readonly class="form-control"></td><td><input type="text" name="lb5" value="<?php echo "$lb5"; ?>" readonly class="form-control"></td><td><input type="text" name="lb6" value="<?php echo "$lb6"; ?>" readonly class="form-control"></td><td><input type="text" name="lb7" value="<?php echo "$lb7"; ?>" readonly class="form-control"></td><td><input type="text" name="lb8" value="<?php echo "$lb8"; ?>" readonly class="form-control"></td><td><input type="text" name="lb9" value="<?php echo "$lb9"; ?>" readonly class="form-control"></td><td><input type="text" name="lb10" value="<?php echo "$lb10"; ?>" readonly class="form-control"></td></tr>
<tr><td>3</td><td><input type="text" name="lc1" value="<?php echo "$lc1"; ?>" readonly class="form-control"></td><td><input type="text" name="lc2" value="<?php echo "$lc2"; ?>" readonly class="form-control"></td><td><input type="text" name="lc3" value="<?php echo "$lc3"; ?>" readonly class="form-control"></td><td><input type="text" name="lc4" value="<?php echo "$lc4"; ?>" readonly class="form-control"></td><td><input type="text" name="lc5" value="<?php echo "$lc5"; ?>" readonly class="form-control"></td><td><input type="text" name="lc6" value="<?php echo "$lc6"; ?>" readonly class="form-control"></td><td><input type="text" name="lc7" value="<?php echo "$lc7"; ?>" readonly class="form-control"></td><td><input type="text" name="lc8" value="<?php echo "$lc8"; ?>" readonly class="form-control"></td><td><input type="text" name="lc9" value="<?php echo "$lc9"; ?>" readonly class="form-control"></td><td><input type="text" name="lc10" value="<?php echo "$lc10"; ?>" readonly class="form-control"></td></tr>
<tr><td>4</td><td><input type="text" name="ld1" value="<?php echo "$ld1"; ?>" readonly class="form-control"></td><td><input type="text" name="ld2" value="<?php echo "$ld2"; ?>" readonly class="form-control"></td><td><input type="text" name="ld3" value="<?php echo "$ld3"; ?>" readonly class="form-control"></td><td><input type="text" name="ld4" value="<?php echo "$ld4"; ?>" readonly class="form-control"></td><td><input type="text" name="ld5" value="<?php echo "$ld5"; ?>" readonly class="form-control"></td><td><input type="text" name="ld6" value="<?php echo "$ld6"; ?>" readonly class="form-control"></td><td><input type="text" name="ld7" value="<?php echo "$ld7"; ?>" readonly class="form-control"></td><td><input type="text" name="ld8" value="<?php echo "$ld8"; ?>" readonly class="form-control"></td><td><input type="text" name="ld9" value="<?php echo "$ld9"; ?>" readonly class="form-control"></td><td><input type="text" name="ld10" value="<?php echo "$ld10"; ?>" readonly class="form-control"></td></tr>
<tr><td>5</td><td><input type="text" name="le1" value="<?php echo "$le1"; ?>" readonly class="form-control"></td><td><input type="text" name="le2" value="<?php echo "$le2"; ?>" readonly class="form-control"></td><td><input type="text" name="le3" value="<?php echo "$le3"; ?>" readonly class="form-control"></td><td><input type="text" name="le4" value="<?php echo "$le4"; ?>" readonly class="form-control"></td><td><input type="text" name="le5" value="<?php echo "$le5"; ?>" readonly class="form-control"></td><td><input type="text" name="le6" value="<?php echo "$le6"; ?>" readonly class="form-control"></td><td><input type="text" name="le7" value="<?php echo "$le7"; ?>" readonly class="form-control"></td><td><input type="text" name="le8" value="<?php echo "$le8"; ?>" readonly class="form-control"></td><td><input type="text" name="le9" value="<?php echo "$le9"; ?>" readonly class="form-control"></td><td><input type="text" name="le10" value="<?php echo "$le10"; ?>" readonly class="form-control"></td></tr>
<tr><td>6</td><td><input type="text" name="lf1" value="<?php echo "$lf1"; ?>" readonly class="form-control"></td><td><input type="text" name="lf2" value="<?php echo "$lf2"; ?>" readonly class="form-control"></td><td><input type="text" name="lf3" value="<?php echo "$lf3"; ?>" readonly class="form-control"></td><td><input type="text" name="lf4" value="<?php echo "$lf4"; ?>" readonly class="form-control"></td><td><input type="text" name="lf5" value="<?php echo "$lf5"; ?>" readonly class="form-control"></td><td><input type="text" name="lf6" value="<?php echo "$lf6"; ?>" readonly class="form-control"></td><td><input type="text" name="lf7" value="<?php echo "$lf7"; ?>" readonly class="form-control"></td><td><input type="text" name="lf8" value="<?php echo "$lf8"; ?>" readonly class="form-control"></td><td><input type="text" name="lf9" value="<?php echo "$lf9"; ?>" readonly class="form-control"></td><td><input type="text" name="lf10" value="<?php echo "$lf10"; ?>" readonly class="form-control"></td></tr>
 </table>


<pre><center>PROJECTS GUIDED (B.E / M.Tech)</center></pre>
<table class="table table-bordered">
<th>Sl<td>Project Title  & Names of Students </td><td>Place of Work  & Collaborators if Any</td><td>Outcome of the Project in terms of Patenting, applying for Funded Projects  </td><td>Any awards / recognition </td>

<tr><td>1</td><td><input type="text" name="pa1" value="<?php echo "$pa1"; ?>" readonly class="form-control"></td><td><input type="text" name="pa2" value="<?php echo "$pa2"; ?>" readonly class="form-control"></td><td><input type="text" name="pa3" value="<?php echo "$pa3"; ?>" readonly class="form-control"></td><td><input type="text" name="pa4" value="<?php echo "$pa4"; ?>" readonly class="form-control"></td></tr>
<tr><td>2</td><td><input type="text" name="pb1" value="<?php echo "$pb1"; ?>" readonly class="form-control"></td><td><input type="text" name="pb2" value="<?php echo "$pb2"; ?>" readonly class="form-control"></td><td><input type="text" name="pb3" value="<?php echo "$pb3"; ?>" readonly class="form-control"></td><td><input type="text" name="pb4" value="<?php echo "$pb4"; ?>" readonly class="form-control"></td></tr>
<tr><td>3</td><td><input type="text" name="pc1" value="<?php echo "$pc1"; ?>" readonly class="form-control"></td><td><input type="text" name="pc2" value="<?php echo "$pc2"; ?>" readonly class="form-control"></td><td><input type="text" name="pc3" value="<?php echo "$pc3"; ?>" readonly class="form-control"></td><td><input type="text" name="pc4" value="<?php echo "$pc4"; ?>" readonly class="form-control"></td></tr>
<tr><td>4</td><td><input type="text" name="pd1" value="<?php echo "$pd1"; ?>" readonly class="form-control"></td><td><input type="text" name="pd2" value="<?php echo "$pd2"; ?>" readonly class="form-control"></td><td><input type="text" name="pd3" value="<?php echo "$pd3"; ?>" readonly class="form-control"></td><td><input type="text" name="pd4" value="<?php echo "$pd4"; ?>" readonly class="form-control"></td></tr>
<tr><td>5</td><td><input type="text" name="pe1" value="<?php echo "$pe1"; ?>" readonly class="form-control"></td><td><input type="text" name="pe2" value="<?php echo "$pe2"; ?>" readonly class="form-control"></td><td><input type="text" name="pe3" value="<?php echo "$pe3"; ?>" readonly class="form-control"></td><td><input type="text" name="pe4" value="<?php echo "$pe4"; ?>" readonly class="form-control"></td></tr>
<tr><td>6</td><td><input type="text" name="pf1" value="<?php echo "$pf1"; ?>" readonly class="form-control"></td><td><input type="text" name="pf2" value="<?php echo "$pf2"; ?>" readonly class="form-control"></td><td><input type="text" name="pf3" value="<?php echo "$pf3"; ?>" readonly class="form-control"></td><td><input type="text" name="pf4" value="<?php echo "$pf4"; ?>" readonly class="form-control"></td></tr>

</th>

 </table>









 
</div>

</div>

</div>
<script>
	function printContent(el){
	var restorepage = document.body.innerHTML;
	var printcontent = document.getElementById(el).innerHTML;
	document.body.innerHTML = printcontent;
	window.print();
	document.body.innerHTML = restorepage;
}
</script>

</form>

<!-- Web2PDF Converter Button BEGIN -->
<!--<script type="text/javascript">
var
pdfbuttonlabel="Save page as PDF"
</script>
<script src="http://www.web2pdfconvert.com/pdfbutton2.js" id="Web2PDF" type="text/javascript"></script>
 Web2PDF Converter Button END -->

</body>



















</html>
