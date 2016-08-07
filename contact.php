<?php
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['message'])){
	$to = "ajayjainhealer@gmail.com";
	$subject = "DivineAdvice.com - New Contact Inquiry";
	$message = "Dear Mr. Jain,
A new contact inquiry has been made. Here are the details:
	Name - {$_POST['name']},
	Email - {$_POST['email']},
	Phone - {$_POST['phone']},
	Message - \"
{$_POST['message']}
	\"

Please reply to the inquiry accordingly.
	";
	mail($to, $subject, $message);
	header("Location: www.DivineAdvice.com");
}

header("Location: contact.html");

?>