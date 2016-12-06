<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>PHPMailer - sendmail test</title>
</head>
<body>
<?php
require 'PHPMailerAutoload.php';


//Create a new PHPMailer instance
$mail = new PHPMailer();
// Set PHPMailer to use the sendmail transport
$mail->isSendmail();
//Set who the message is to be sent from
$mail->setFrom('from@example.com', 'First Last');
//Set an alternative reply-to address
$mail->addReplyTo('bijon.bairagi@gmail.com', 'First Last');
//Set who the message is to be sent to
$mail->addAddress('bijon.bairagi@clickbd.com', 'John Doe');
//Set the subject line
$mail->Subject = 'PHPMailer sendmail test';

$body="<h1>This is a plain-text message body</h1>";
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
//$mail->msgHTML(file_get_contents('examples/contents.html'), dirname(__FILE__));
//Replace the plain text body with one created manually
$mail->Body = $body;
$mail->IsHTML(true);
//Attach an image file
//$mail->addAttachment('images/phpmailer_mini.gif');

//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}
?>
</body>
</html>
