<?php
// if(isset($_POST['submit'])){
//     $patient_name = $_POST['name'];
//     $patient_phone = $_POST['phone'];
//     $patient_email = $_POST['email'];
//     $patient_date = $_POST['date'];
//     $patient_time = $_POST['time'];
// }
/*$EmailTo = "info@medicalhelpdesk.com";*/
// $EmailTo = "info@medicalhelpdesk.com";
//$EmailTo = "info@medicalhelpdesk.com";
// $Subject = "Medical Help Desk";
// prepare email body text
// $Fields .= "<table border='2px' style='border-collapse:collapse; width:100%;'>";
// $Fields .= "<tr>";
// $Fields .= "<td style='padding:5px;'>Full Name</td>";
// $Fields .= "<td style='padding:5px;'>".$patient_name."</td>";
// $Fields .= "</tr>";

// $Fields .= "<tr>";
// $Fields .= "<td style='padding:5px;'>Mobile</td> ";
// $Fields .= "<td style='padding:5px;'>".$patient_phone."</td>";
// $Fields .= "</tr>";

// $Fields .= "<tr>";
// $Fields.= "<td style='padding:5px;'>Email</td>";
// $Fields .= "<td style='padding:5px;'>".$patient_email."</td>";
// $Fields .= "</tr>";

// $Fields .= "<tr>";
// $Fields .= "<td style='padding:5px;'>Amount</td>";
// $Fields .= "<td style='padding:5px;'>".$patient_date."</td>";
// $Fields .= "</tr>";

// $Fields .= "<tr>";
// $Fields .= "<td style='padding:5px;'>Amount</td>";
// $Fields .= "<td style='padding:5px;'>".$patient_time."</td>";
// $Fields .= "</tr>";
// $Fields .= "</table>"; 
// //
// $headers = "MIME-Version: 1.0" . "\r\n";
// $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
// $headers .= 'From: '.$email. "\r\n";
// $success = mail($EmailTo,  $Subject,  $Fields, $headers);
// header("Location:thankyou.php");
// echo " THIS IS A TEST ";

?>


<?php

if (isset($_POST['submit'])) {
    $patient_name = $_POST['name'];
    $patient_phone = $_POST['phone'];
    $patient_email = $_POST['email'];
    $patient_date = $_POST['date'];
    $patient_time = $_POST['time'];

    $to = 'javed1857@gmail.com';
    $subject = 'Form Submission';
    $message = "Name: " . $patient_name . "\n" . "Phone: " . $patient_phone . "\n" . "Date: " . $patient_date . "\n" . "Time: " . $patient_time;
    $headers = "Form: " . $patient_email;

    if (mail($to, $subject, $message, $headers)) {
        echo "<h1>Sent Successfully! Thank you" . " " . $patient_name . ".</h1>";
    } else {
        echo "Something went wrong!";
    }
}
?>