<?php
if(isset($_POST['submit'])){
$name = $_POST["name"];
$mobile = $_POST["phone"];
$emailaddress = $_POST["email"];
$date = $_POST["date"];
$time = $_POST['time'];
}
/*$EmailTo = "nitesh@digisajilo.com";*/
$EmailTo = "nitesh@digisajilo.com";
//$EmailTo = "nitesh@digisajilo.com";
$Subject = "Jaago hindustan party";
// prepare email body text
$Fields .= "<table border='2px' style='border-collapse:collapse; width:100%;'>";
$Fields .= "<tr>";
$Fields .= "<td style='padding:5px;'>Full Name</td>";
$Fields .= "<td style='padding:5px;'>".$name."</td>";
$Fields .= "</tr>";

$Fields .= "<tr>";
$Fields .= "<td style='padding:5px;'>Mobile</td> ";
$Fields .= "<td style='padding:5px;'>".$mobile."</td>";
$Fields .= "</tr>";

$Fields .= "<tr>";
$Fields.= "<td style='padding:5px;'>Email</td>";
$Fields .= "<td style='padding:5px;'>".$emailaddress."</td>";
$Fields .= "</tr>";

$Fields .= "<tr>";
$Fields .= "<td style='padding:5px;'>Date</td>";
$Fields .= "<td style='padding:5px;'>".$date."</td>";
$Fields .= "</tr>";

$Fields .= "<tr>";
$Fields .= "<td style='padding:5px;'>Time</td>";
$Fields .= "<td style='padding:5px;'>".$time."</td>";
$Fields .= "</tr>";
$Fields .= "</table>"; 
//
// send email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: '.$email. "\r\n";
$success = mail($EmailTo,  $Subject,  $Fields, $headers);
header("Location:thankyou.php");
echo " THIS IS A TEST ";

?>