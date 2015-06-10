<!--Sagar S.N-->
<?php require("connect.php");?>
<!DOCTYPE html>
<html>
<head>
    <title>Evaluated Sheet</title>
    <link rel="icon" type="image/gif" href="images/collogo.jpg">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css"/>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>

<style>
     table,
    thead,
    tr,
    tbody,
    th,
    td {
        text-align: center;
    }
</style>

<body style="font-family: Segoe UI,Arial">
    <div class="pull-left"><a href="loggedin_user.php" class="btn btn-warning" role="button">Go Back</a></div>
    <h2>
       <center><b>R.V College of Engineering</b></center>
    </h2>
    <br/>
     <h4>
       <center><u>CONSOLIDATED EVALUATION SHEET</u></center>
    </h4>
<div class="well well-lg">

<table class="table table-bordered table-hover">
    
    <tr class='info'>
        <th rowspan="2">
            Sl No
        </th>
    
        <th rowspan="2">
            Name of Candidate
        </th>
      
        <th rowspan="2">
            Qualification Details
        </th>
       
        <th colspan="3">
             Total Experience(Years)
        </th>
        
        <th colspan="7">
           Evaluation (100 Marks)
        </th>
        
        <th rowspan="2">
            Remarks
        </th>
        
        <th rowspan="2">
            Select Candidate
        </th>
                <tr class='info'>
                    <th>
                        Teaching
                    </th>
                    <th>
                        Industry
                    </th>
                    <th>
                        Research
                    </th>
            <th>
                1
            </th>
            
             <th>
                2
            </th>
             
            <th>
                3
            </th>
            
             <th>
                4
            </th>
             
              <th>
                5
            </th>
              
            <th>
                6
            </th>
            
             <th>
                Total <br/>(600 Marks)
            </th>
            </tr>
            </th>
    </tr>

<!--Heading ENDS-->
<form action="sendmail_attachment.php" method="POST">
<?php

$incr=1;

$result=$con->query('select * from save_shortlist');

while($row = mysqli_fetch_array($result))
{
  echo "<tr>";
  echo "<td>" .$row['appid']. "</td>";
  
  $app1=$row['appid'];
 
  $result1=$con->query("select nofiexp, nofrexp  from  registration where appid ='$app1'");
  $result2=$con->query("select evalmarks,remarks from save_reviewed where appid ='$app1'");
  $result3=$con->query("select evalmarks,remarks from save_reviewed2 where appid ='$app1'");
  $result4=$con->query("select evalmarks,remarks from save_reviewed3 where appid ='$app1'");
  $result5=$con->query("select evalmarks,remarks from save_reviewed4 where appid ='$app1'");
  $result6=$con->query("select evalmarks,remarks from save_reviewed5 where appid ='$app1'");
  $result7=$con->query("select evalmarks,remarks from save_reviewed6 where appid ='$app1'");
  
  $row1=mysqli_fetch_array($result1);
  $row2=mysqli_fetch_array($result2);
  $row3=mysqli_fetch_array($result3);
  $row4=mysqli_fetch_array($result4);
  $row5=mysqli_fetch_array($result5);
  $row6=mysqli_fetch_array($result6);
  $row7=mysqli_fetch_array($result7);
  
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['average'] . "</td>";
  echo "<td>" . $row['notexp'] . "</td>";
  echo "<td>" . $row1['nofiexp'] . "</td>";
  echo "<td>" . $row1['nofrexp'] . "</td>";
 
  $eval=$row2['evalmarks'];
  if($eval=="")
  {
    echo "<td> Awaiting </td>";
  }
  else
  {
  echo "<td>" . $row2['evalmarks'] . "</td>";
  }
  
  
  
  $eval=$row3['evalmarks'];
  if($eval=="")
  {
    echo "<td> Awaiting </td>";
  }
  else
  {
  echo "<td>" . $row3['evalmarks'] . "</td>";
  }
  
  $eval=$row4['evalmarks'];
  if($eval=="")
  {
    echo "<td> Awaiting </td>";
  }
  else
  {
  echo "<td>" . $row4['evalmarks'] . "</td>";
  }
  
  $eval=$row5['evalmarks'];
  if($eval=="")
  {
    echo "<td> Awaiting </td>";
  }
  else
  {
  echo "<td>" . $row5['evalmarks'] . "</td>";
  }
  
  $eval=$row6['evalmarks'];
  if($eval=="")
  {
    echo "<td> Awaiting </td>";
  }
  else
  {
  echo "<td>" . $row6['evalmarks'] . "</td>";
  }
  
  $eval=$row7['evalmarks'];
  if($eval=="")
  {
    echo "<td> Awaiting </td>";
  }
  else
  {
  echo "<td>" . $row7['evalmarks'] . "</td>";
  }
  
  $total=$row2['evalmarks']+$row3['evalmarks']+$row4['evalmarks']+$row5['evalmarks']+$row6['evalmarks']+$row7['evalmarks'];
  echo "<td style='color:blue'>".$total."</td>";
  
  echo "<td>". $row2['remarks']."</td>";
  
  echo "<td> <button type='submit' name ='rev' value='$app1' class='btn btn-success btn-xs'>SELECT CANDIDATE (ID-$app1) <br/> and  SEND E-MAIL </button> </td>";
  echo "</tr>";
  
}
?>
</table>
</form>
</div>
</body>
</html>
