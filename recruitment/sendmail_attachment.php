<?php
// download fpdf class (http://fpdf.org)

require("connect.php");

$candidateid=$_POST['rev'];
$result=$con->query("select fname,lname,email,post,dept from registration where appid='$candidateid'");
$row=mysqli_fetch_array($result);
$email=$row['email'];
$fname=$row['fname'];
$lname=$row['lname'];
$post=$row['post'];
$dept=$row['dept'];

require("/fpdf/fpdf.php");
// fpdf object
$pdf = new FPDF('P', 'pt', 'A4');
// generate a simple PDF (for more info, see http://fpdf.org/en/tutorial/)
$pdf->AddPage();

//$pdf->SetFont("Arial","B",14);
//$pdf->Cell(150,50, "Appointment Letter");
$pdf->SetFont("Arial","",10);
$pdf->Cell(40,10, "Congratulations! ". $fname . " You are selected for ".$post." Post in ".$dept." Department");


// email stuff (change data below)
$to = $email; 
$from = "snsagar22@gmail.com"; 
$subject = "You are Selected"; 
$message = "<p>Please Find the Offer Letter</p>";
// a random hash will be necessary to send mixed content
$separator = md5(time());
// carriage return type (we use a PHP end of line constant)
$eol = PHP_EOL;
// attachment name
$filename = "offerletter.pdf";
// encode data (puts attachment in proper format)
$pdfdoc = $pdf->Output("", "S");
$attachment = chunk_split(base64_encode($pdfdoc));
// main header (multipart mandatory)
$headers  = "From: ".$from.$eol;
$headers .= "MIME-Version: 1.0".$eol; 
$headers .= "Content-Type: multipart/mixed; boundary=\"".$separator."\"".$eol.$eol; 
$headers .= "Content-Transfer-Encoding: 7bit".$eol;
$headers .= "This is a MIME encoded message.".$eol.$eol;
// message
$headers .= "--".$separator.$eol;
$headers .= "Content-Type: text/html; charset=\"iso-8859-1\"".$eol;
$headers .= "Content-Transfer-Encoding: 8bit".$eol.$eol;
$headers .= $message.$eol.$eol;
// attachment
$headers .= "--".$separator.$eol;
$headers .= "Content-Type: application/octet-stream; name=\"".$filename."\"".$eol; 
$headers .= "Content-Transfer-Encoding: base64".$eol;
$headers .= "Content-Disposition: attachment".$eol.$eol;
$headers .= $attachment.$eol.$eol;
$headers .= "--".$separator."--";
// send message
if(mail($to, $subject, "$message", $headers))
{
    echo "Email Sent Successfully to Application ID - $candidateid Name - $fname $lname";
    echo "<br/>";
    echo "<a href='evaluation.php'>Go Back</a>";
}

?>