<?php

// Load WP components
define('WP_USE_THEMES', false);
require('../../../../../../wp-load.php');

//Retrieve form data. 
//GET - user submitted data using AJAX
//POST - in case user does not support javascript, we'll use POST instead
$email = ($_GET['email']) ?$_GET['email'] : $_POST['email'];

//flag to indicate which method it uses. If POST set it to 1
if ($_POST) $post=1;

//Simple server side validation for POST data, of course, you should validate the email
if (!$email || !filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[count($errors)] = __('Please enter your email.', 'omni');

//if the errors array is empty, send the mail
if (!$errors) {

	//recipient - YOUR EMAIL.. or whatever
	$to = omni_option('contactform_name').' <'. omni_option('contactform_email') .'>';	
	//sender - from the form
	$from = 'Newsletter Signup <' . $email . '>';
	
	//subject and the html message
	$subject = 'New Email Address - Newsletter Signup';	
	$message = '
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml">
	<head></head>
	<body>
	<table>
		<tr><td style="padding-right:30px; font-weight:bold;">Email</td><td>' . $email . '</td></tr>
	</table>
	</body>
	</html>';

	//send the mail
	$result = sendmail($to, $subject, $message, $from);
	
	//if POST was used, display the message straight away
	if ($_POST) {
		if ($result) echo 'Thank you! We have received your emailaddress.';
		else echo 'Sorry, unexpected error. Please try again later';
		
	//else if GET was used, return the boolean value so that 
	//ajax script can react accordingly
	//1 means success, 0 means failed
	} else {
		echo $result;	
	}

//if the errors array has values
} else {
	//display the errors message
	for ($i=0; $i<count($errors); $i++) echo $errors[$i] . '<br/>';
	echo '<a href="'.site_url().'">Back</a>';
	exit;
}


//Simple mail function with HTML header
function sendmail($to, $subject, $message, $from) {
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
	$headers .= 'From: ' . $from . "\r\n";
	
	$result = wp_mail($to, $subject, $message, $headers);
	
	if ($result) return 1;
	else return 0;
}


?>