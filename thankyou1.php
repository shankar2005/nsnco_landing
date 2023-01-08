<?php
if(isset($_POST['email'])) {
// EDIT THE 2 LINES BELOW AS REQUIRED
$email_to = "www.nsnco.in@gmail.com";
$email_subject = "Contact Enquiry from NsNCo.in";


$name = $_POST['name']; // required
$email_from = $_POST['email']; // required
$subject = $_POST['subject']; // required
$message = $_POST['message']; // required

$email_message = "Query Details are Below:\n\n";
 
function clean_string($string) {
$bad = array("content-type","bcc:","to:","cc:","href");
return str_replace($bad,"",$string);
}

$email_message .= "Name: ".clean_string($name)."\n";
$email_message .= "Email: ".clean_string($email_from)."\n";
$email_message .= "Subject.: ".clean_string($subject)."\n";
$email_message .= "Message: ".clean_string($message)."\n";
$email_message .= "Package Url: ".$_SERVER['HTTP_REFERER']."\n";
 
 
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers); ?>
 


<?php
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Thank You</title>
</head>
<body>
<h1>Your message has been sent. Thank you!</h1>
<br /><br /><br /><br /><br /><br /><br />
<a href="index.html">Back to Website</a>
</body>
</html>
