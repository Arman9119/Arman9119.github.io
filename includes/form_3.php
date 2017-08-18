<?php	
	if(empty($_POST['name3']) && strlen($_POST['name3']) == 0 || empty($_POST['email3']) && strlen($_POST['email3']) == 0 || empty($_POST['input_1260']) && strlen($_POST['input_1260']) == 0 || empty($_POST['message3']) && strlen($_POST['message3']) == 0)
	{
		return false;
	}
	
	$name3 = $_POST['name3'];
	$email3 = $_POST['email3'];
	$input_1260 = $_POST['input_1260'];
	$input_2180 = $_POST['input_2180'];
	$input_154 = $_POST['input_154'];
	$input_1186 = $_POST['input_1186'];
	$message3 = $_POST['message3'];
	
	$to = 'armanstorm911@gmail.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from a Blocs website.";
	$email_body = "You have received a new message. \n\n".
				  "Name3: $name3 \nEmail3: $email3 \nInput_1260: $input_1260 \nInput_2180: $input_2180 \nInput_154: $input_154 \nInput_1186: $input_1186 \nMessage3: $message3 \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: armanstorm911@gmail.com\n";
	$headers .= "Reply-To: $input_1260";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>