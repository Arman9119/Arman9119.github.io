<?php	
	if(empty($_POST['name']) && strlen($_POST['name']) == 0 || empty($_POST['input_1202']) && strlen($_POST['input_1202']) == 0 || empty($_POST['message']) && strlen($_POST['message']) == 0)
	{
		return false;
	}
	
	$name = $_POST['name'];
	$input_1202 = $_POST['input_1202'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	
	$to = 'armanstorm911@gmail.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from a Blocs website.";
	$email_body = "You have received a new message. \n\n".
				  "Name: $name \nInput_1202: $input_1202 \nEmail: $email \nMessage: $message \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: armanstorm911@gmail.com\n";
	$headers .= "Reply-To: $email";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>