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

<body font-family: Segoe UI,Arial><center>
<img src="images/collogo.jpg"  class="img-circle" height="120px" width="120px">
</center>
<div class="container">
<form action="start.php" ><input class="btn btn-primary btn-primary custom" type="submit" value="GO BACK"/></form>
</div>

<form action="insertdb.php" method="POST">
   <div class="container">
   <div class="row">
   <center>
  <pre>R.V. COLLEGE OF ENGINEERING
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
   Employee Id<input type="text" name="eid" class="form-control">
   <table class="table table-bordered">
   
   <th></th>


   
   <tr><td>1</td><td width="40%">Name of the Faculty with Designation</td><td width="60%"><input type="text" name="name" class="form-control"></td><tr>
   <tr><td>2</td><td>Post held during the year & Details of previous positions in the institute from the latest</td><td><input type="text" name="post" class="form-control"></td></tr>
   <tr><td>3</td><td>Date of Joining the College</td><td><input type="text" name="doj" class="form-control"></td></tr>
   <tr><td>4</td><td>Date of Birth</td><td><input type="text" name="dob" class="form-control"></td></tr>
   <tr><td>5</td><td>Period of absence from duty on Leave, Training etc., during the year under report</td><td>Sl.<input type="text" name="ps1" size="1"> Nature of Absence <input type="text" name="pn1" size="10">Period<input type="text" name="pp1" size="11">Sl.<input type="text" name="ps2" size="1"> Nature of Absence <input type="text" name="pn2" size="10">Period<input type="text" name="pp2" size="11">Sl.<input type="text" name="ps3" size="1"> Nature of Absence <input type="text" name="pn3" size="10">Period<input type="text" name="pp3" size="11"></td></tr>
   <tr><td>6</td><td>Efforts made to compensate classes during the period of absence.</td><td><input type="text" name="effort" class="form-control"></td></tr>
   <tr><td>7</td><td>Knowledge of Kannada   (Yes/No)</td>
       <td>Speak<input type="text" name="speak" size=5 >
           Read <input type="text" name="read" size=5>
           Write <input type="text" name="write" size=5></td>
           

        </tr>       


   
   </table><!--
   <pre><h4> Signature of the Faculty                     Signature of the HOD	</h4> 

            	<center><h4>Principal<br></h4></center></pre>-->
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
</td><td width="10%"><input type="text" name="s1" class="form-control"></td><td width="10%"><input type="text" name="h01" readonly class="form-control"></td><td width="10%"><input type="text" name="pr1" readonly class="form-control"></td><tr>
   <tr><td>2</td><td>Contribution to Departmental Activities (30 Points) including facilitation for compliance activities. (UG Accreditation (10), PG Accreditation (10), VTU LIC visit and Research Centre (10) (Annexure II) </td><td><input type="text" name="s2"class="form-control"></td><td><input type="text" name="ho2" readonly  class="form-control"></td><td><input type="text" name="pr2" readonly class="form-control"></td></tr>
   <tr><td>3</td><td>No. of Research Publications (20 Points): National and International (Journals / Conferences should be shown separately). Please add names of all the contributors, including external collaborators with Titles/Journals Name /Volume/page no/year. (Annexure III) [Indexed journal publications/ patents(10), Other journals (5) & Conference papers (5)</td><td><input type="text" name="s3" class="form-control"></td><td><input type="text" name="ho3" readonly class="form-control"></td><td><input type="text" name="pr3" readonly class="form-control"></td></tr>
   <tr><td>4</td><td>Other Publications Academic community Interaction: (10 Points) Books published, Invited talks /Sessions Chaired / Organized  Symposium / Conference / Workshop / FDP Program. etc (Annexure IV) </td><td><input type="text" name="s4" class="form-control"></td><td><input type="text" name="ho4" readonly  class="form-control"></td><td><input type="text" name="pr4" readonly  class="form-control"></td></tr>
   <tr><td>5</td><td>PhD Status ( 10 Points): Faculty pursuing PhD provide details included course work, experiments, and exam work. For Faculty guiding Research Scholars, provide the details about the No of students, status of progress with copy of review report submitted, papers published etc (Annexure V)  </td><td><input type="text" name="s5" class="form-control"></td><td><input type="text" name="ho5" readonly class="form-control"></td><td><input type="text" name="pr5" readonly class="form-control"></td></tr>
   <tr><td>6</td><td>R&D Projects ( 25 Points). List of on-going Projects, Consultancy, royalties received(20), Research Proposal sent (5)  ( Annexure VI) </td><td><input type="text" name="s6" class="form-control"></td><td><input type="text" name="ho6" readonly class="form-control"></td><td><input type="text" name="pr6" readonly  class="form-control"></td></tr>
   <tr><td>7</td><td>Counselor /Mentoring(15 Points): Counselor to provide a list of students, (with details of meeting & any facilitation). Mentoring  younger faculty in your areas of teaching or  R&D  expertise (Annexure VII)</td><td><input type="text" name="s7" class="form-control"></td><td><input type="text" name="ho7"  readonly class="form-control"></td><td><input type="text" name="pr7" readonly class="form-control"></td></tr>
   <tr><td>8</td><td>Initiative, Interpersonal Skills & drive (10 Points): Motivation towards works, Discipline, Attendance, Willingness to stay overtime to finish pending work. Willingness to learn about new areas, Willingness to accept the responsibility and to take decision. Attitude towards colleagues, parents  Students and other external visitors. (Annexure VIII)</td><td><input type="text" name="s8" class="form-control"></td><td><input type="text" name="ho8" readonly class="form-control"></td><td><input type="text" name="pr8" readonly class="form-control"></td></tr>
   <tr><td>9</td><td>Future Plan (20 Points): Plans for the next year in terms of Academics / Research / Consultancy/ Funded Projects/Institutional activities with specific details. (Annexure IX) </td><td><input type="text" name="s9" class="form-control"></td><td><input type="text" name="ho9" readonly class="form-control"></td><td><input type="text" name="pr9" readonly class="form-control"></td></tr>          
   <tr><td>10</td><td>Contribution to Institutional Activities (10 Points) including volunteering for new initiatives respect to other  institutional  activities / Compliance / Extracurricular / Co-Curricular/ Professional bodies  and Interdepartmental activities, Industrial Collaboration  (Annexure III)</td><td><input type="text" name="s10" class="form-control"></td><td><input type="text" name="ho10" readonly  class="form-control"></td><td><input type="text" name="pr10" readonly class="form-control"></td></tr>
   <tr><td>11</td><td>Any other initiative/Achievement (10 Points):  Relevant to Facilitating/ Enhancing Teaching / Learning / Research, Industry interaction, Societal enabling and Consultancy. (Annexure X)</td><td><input type="text" name="s11" class="form-control"></td><td><input type="text" name="ho11" readonly class="form-control"></td><td><input type="text" name="pr11" readonly  class="form-control"></td></tr>
   <tr><td></td><td> Total Points</td><td><input type="text" readonly class="form-control">/200</td><td><input type="text" readonly class="form-control">/200</td><td><input type="text" readonly class="form-control">/200</td></tr>
   </table>
<!--
     <pre><h4> Signature of the Faculty      Signature of the HOD	   Principal</h4></pre>
-->
   </div>
   </div>

<hr>
   <div class="container">
    
   <div class="col-lg-12">

<pre>ANNEXURE – I: ACADEMIC PERFORMANCE (WITH SUPPORINTG DOCUMENTS)

<!--NAME OF THE FACULTY :				                              					  PERIOD: </pre>-->

<table class="table table-bordered">
<th><td></td><td></td><td></td><td colspan="2">Total No. of Classes</td><td></td><td colspan="2">Percentage of Pass & Grades </td><td> </td><td></td></th>
<tr><td></td><td>Course Code & Name </td><td>Class & Strength of Students</td><td>Average Percentage Attendance for the Semester</td><td>As per 
Time Table</td><td>Actually Held</td><td>Percentage of Syllabus covered</td><td>CIE</td><td>SEE</td><td>Students Feedback in the Courses </td><td>Remarks</td></tr>

<tr><td>1</td><td><input type="text" name="a1" class="form-control"></td><td><input type="text" name="a2" class="form-control"></td><td><input type="text" name="a3"class="form-control"> </td><td><input type="text" name="a4" class="form-control"></td><td><input type="text" name="a5" class="form-control"></td><td><input type="text" name="a6" class="form-control"></td><td><input type="text" name="a7" class="form-control"></td><td><input type="text" name="a8" class="form-control"></td><td><input type="text" name="a9" class="form-control"></td><td><input type="text" name="a10" class="form-control"></td></tr>
<tr><td>2</td><td><input type="text" name="b1" class="form-control"></td><td><input type="text" name="b2" class="form-control"></td><td><input type="text" name="b3" class="form-control"></td><td><input type="text" name="b4" class="form-control"></td><td><input type="text" name="b5" class="form-control"></td><td><input type="text" name="b6"class="form-control"></td><td><input type="text" name="b7" class="form-control"></td><td><input type="text" name="b8" class="form-control"></td><td><input type="text" name="b9" class="form-control"></td><td><input type="text" name="b10"class="form-control"></td></tr>
<tr><td>3</td><td><input type="text" name="c1"class="form-control"></td><td><input type="text"  name="c2"class="form-control"></td><td><input type="text"  name="c3"class="form-control"></td><td><input type="text"  name="c4"class="form-control"></td><td><input type="text"  name="c5"class="form-control"></td><td><input type="text"  name="c6"class="form-control"></td><td><input type="text" name="c7" class="form-control"></td><td><input type="text" name="c8" class="form-control"></td><td><input type="text" name="c9" class="form-control"></td><td><input type="text" name="c10" class="form-control"></td></tr>
<tr><td>4</td><td><input type="text" name="d1"class="form-control"></td><td><input type="text"  name="d2"class="form-control"></td><td><input type="text"  name="d3"class="form-control"></td><td><input type="text"  name="d4"class="form-control"></td><td><input type="text"  name="d5"class="form-control"></td><td><input type="text"  name="d6"class="form-control"></td><td><input type="text" name="d7" class="form-control"></td><td><input type="text" name="d8" class="form-control"></td><td><input type="text" name="d9" class="form-control"></td><td><input type="text" name="d10" class="form-control"></td></tr>
<tr><td>5</td><td><input type="text" name="e1"class="form-control"></td><td><input type="text"  name="e2"class="form-control"></td><td><input type="text"  name="e3"class="form-control"></td><td><input type="text"  name="e4"class="form-control"></td><td><input type="text"  name="e5"class="form-control"></td><td><input type="text"  name="e6"class="form-control"></td><td><input type="text" name="e7" class="form-control"></td><td><input type="text" name="e8" class="form-control"></td><td><input type="text" name="e9" class="form-control"></td><td><input type="text" name="e10" class="form-control"></td></tr>
<tr><td>6</td><td><input type="text" name="f1"class="form-control"></td><td><input type="text"  name="f2"class="form-control"></td><td><input type="text"  name="f3"class="form-control"></td><td><input type="text"  name="f4"class="form-control"></td><td><input type="text"  name="f5"class="form-control"></td><td><input type="text"  name="f6"class="form-control"></td><td><input type="text" name="f7" class="form-control"></td><td><input type="text" name="f8" class="form-control"></td><td><input type="text" name="f9" class="form-control"></td><td><input type="text" name="f10" class="form-control"></td></tr>
<tr><td>7</td><td><input type="text" name="g1"class="form-control"></td><td><input type="text"  name="g2"class="form-control"></td><td><input type="text"  name="g3"class="form-control"></td><td><input type="text"  name="g4"class="form-control"></td><td><input type="text"  name="g5"class="form-control"></td><td><input type="text"  name="g6"class="form-control"></td><td><input type="text" name="g7" class="form-control"></td><td><input type="text" name="g8" class="form-control"></td><td><input type="text" name="g9" class="form-control"></td><td><input type="text" name="g10" class="form-control"></td></tr>
<tr><td>8</td><td><input type="text" name="h1"class="form-control"></td><td><input type="text"  name="h2"class="form-control"></td><td><input type="text"  name="h3"class="form-control"></td><td><input type="text"  name="h4"class="form-control"></td><td><input type="text"  name="h5"class="form-control"></td><td><input type="text"  name="h6"class="form-control"></td><td><input type="text" name="h7" class="form-control"></td><td><input type="text" name="h8" class="form-control"></td><td><input type="text" name="h9" class="form-control"></td><td><input type="text" name="h10" class="form-control"></td></tr>

 </table>
<!-- <pre><h4> Signature of the Faculty                                                  Signature of the HOD</h4></pre>-->
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

<tr><td>1</td><td><input type="text" name="la1" class="form-control"></td><td><input type="text" name="la2" class="form-control"></td><td><input type="text" name="la3" class="form-control"></td><td><input type="text" name="la4" class="form-control"></td><td><input type="text" name="la5" class="form-control"></td><td><input type="text" name="la6" class="form-control"></td><td><input type="text" name="la7" class="form-control"></td><td><input type="text" name="la8" class="form-control"></td><td><input type="text" name="la9" class="form-control"></td><td><input type="text" name="la10" class="form-control"></td></tr>
<tr><td>2</td><td><input type="text" name="lb1" class="form-control"></td><td><input type="text" name="lb2" class="form-control"></td><td><input type="text" name="lb3" class="form-control"></td><td><input type="text" name="lb4" class="form-control"></td><td><input type="text" name="lb5" class="form-control"></td><td><input type="text" name="lb6" class="form-control"></td><td><input type="text" name="lb7" class="form-control"></td><td><input type="text" name="lb8" class="form-control"></td><td><input type="text" name="lb9" class="form-control"></td><td><input type="text" name="lb10" class="form-control"></td></tr>
<tr><td>3</td><td><input type="text" name="lc1" class="form-control"></td><td><input type="text" name="lc2" class="form-control"></td><td><input type="text" name="lc3" class="form-control"></td><td><input type="text" name="lc4" class="form-control"></td><td><input type="text" name="lc5" class="form-control"></td><td><input type="text" name="lc6" class="form-control"></td><td><input type="text" name="lc7" class="form-control"></td><td><input type="text" name="lc8" class="form-control"></td><td><input type="text" name="lc9" class="form-control"></td><td><input type="text" name="lc10" class="form-control"></td></tr>
<tr><td>4</td><td><input type="text" name="ld1" class="form-control"></td><td><input type="text" name="ld2" class="form-control"></td><td><input type="text" name="ld3" class="form-control"></td><td><input type="text" name="ld4" class="form-control"></td><td><input type="text" name="ld5" class="form-control"></td><td><input type="text" name="ld6" class="form-control"></td><td><input type="text" name="ld7" class="form-control"></td><td><input type="text" name="ld8" class="form-control"></td><td><input type="text" name="ld9" class="form-control"></td><td><input type="text" name="ld10" class="form-control"></td></tr>
<tr><td>5</td><td><input type="text" name="le1" class="form-control"></td><td><input type="text" name="le2" class="form-control"></td><td><input type="text" name="le3" class="form-control"></td><td><input type="text" name="le4" class="form-control"></td><td><input type="text" name="le5" class="form-control"></td><td><input type="text" name="le6" class="form-control"></td><td><input type="text" name="le7" class="form-control"></td><td><input type="text" name="le8" class="form-control"></td><td><input type="text" name="le9" class="form-control"></td><td><input type="text" name="le10" class="form-control"></td></tr>
<tr><td>6</td><td><input type="text" name="lf1" class="form-control"></td><td><input type="text" name="lf2" class="form-control"></td><td><input type="text" name="lf3" class="form-control"></td><td><input type="text" name="lf4" class="form-control"></td><td><input type="text" name="lf5" class="form-control"></td><td><input type="text" name="lf6" class="form-control"></td><td><input type="text" name="lf7" class="form-control"></td><td><input type="text" name="lf8" class="form-control"></td><td><input type="text" name="lf9" class="form-control"></td><td><input type="text" name="lf10" class="form-control"></td></tr>
 </table>


<pre><center>PROJECTS GUIDED (B.E / M.Tech)</center></pre>
<table class="table table-bordered">
<th>Sl<td>Project Title  & Names of Students </td><td>Place of Work  & Collaborators if Any</td><td>Outcome of the Project in terms of Patenting, applying for Funded Projects  </td><td>Any awards / recognition </td>

<tr><td>1</td><td><input type="text" name="pa1" class="form-control"></td><td><input type="text" name="pa2" class="form-control"></td><td><input type="text" name="pa3" class="form-control"></td><td><input type="text" name="pa4" class="form-control"></td></tr>
<tr><td>2</td><td><input type="text" name="pb1" class="form-control"></td><td><input type="text" name="pb2" class="form-control"></td><td><input type="text" name="pb3" class="form-control"></td><td><input type="text" name="pb4" class="form-control"></td></tr>
<tr><td>3</td><td><input type="text" name="pc1" class="form-control"></td><td><input type="text" name="pc2" class="form-control"></td><td><input type="text" name="pc3" class="form-control"></td><td><input type="text" name="pc4" class="form-control"></td></tr>
<tr><td>4</td><td><input type="text" name="pd1" class="form-control"></td><td><input type="text" name="pd2" class="form-control"></td><td><input type="text" name="pd3" class="form-control"></td><td><input type="text" name="pd4" class="form-control"></td></tr>
<tr><td>5</td><td><input type="text" name="pe1" class="form-control"></td><td><input type="text" name="pe2" class="form-control"></td><td><input type="text" name="pe3" class="form-control"></td><td><input type="text" name="pe4" class="form-control"></td></tr>
<tr><td>6</td><td><input type="text" name="pf1" class="form-control"></td><td><input type="text" name="pf2" class="form-control"></td><td><input type="text" name="pf3" class="form-control"></td><td><input type="text" name="pf4" class="form-control"></td></tr>



 </table>







<!--

 <pre><h4> Signature of the Faculty                                                  Signature of the HOD</h4></pre>-->
</div><center>
<input class="btn btn-primary btn-primary custom" type="submit" value="SUBMIT DETAILS"/>
</center>
</div>



</form>



</body>



















</html>
