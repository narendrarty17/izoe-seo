<?php

if (isset($_GET['email']) && filter_var($_GET['email'], FILTER_VALIDATE_EMAIL)) {
    // Use the email from the URL parameter as the recipient email
    $recipientEmail = $_GET['email'];
}

// $recipientEmail = "rajdipsinharoy@gmail.com";
$subject = "Test mail";


    // Load the HTML content from an external file
    $htmlContent = file_get_contents('./w/index.html');


$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';


$headers[] = 'From: iZoe Solutions <info@akountercrm.com>';
// $headers[] = 'Cc: birthdayarchive@example.com';
// $headers[] = 'Bcc: birthdaycheck@example.com';



    // Send email using mail() function
   if (mail($recipientEmail, $subject, $htmlContent, implode("\r\n", $headers))) {
        echo 'Message has been sent';
    } else {
        // If mail() fails, display an error message
        echo 'Failed to send message. Please check your email configuration.';
        // Optional: Log the error for further investigation
        error_log("Failed to send email to $recipientEmail with subject $subject. Check mail server configuration.");
    }
?>
