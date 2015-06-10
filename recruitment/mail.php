<?php
$to = "venkatrmn148@gmail.com";
$subject = "PHP mail() Function is Working in localhost!!! - It's a Test Mail";
$txt = "Yo Yo Honey Singhaa";
$headers = "From: snsagar22@gmail.com" . "\r\n" ;

if(mail($to,$subject,$txt,$headers))
{
    echo "Email Sent Successfully";
}
else
{
    echo "Email Not Sent <br/> <h4>Hmmmmm Keep Trying</h4>";
}
?>