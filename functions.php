<?php

 function mailForm(){

	global $successMessage;

	global $error;

	$name = $_POST["name"];
	$email = $_POST["email"];
	$message = $_POST["message"];

	if(!$_POST["name"]){
		$error .= "Name";
	}

	if(!$_POST["email"]){
		if($error != ""){
			$error .= ", Email";
		} else{
			$error .= "Email";
		}
	}
	if(!$_POST["message"]){
		if ($error != ""){
			$error .= ", and Message";
		} else {
			$error .= "Message";
		}
	
	}

	if ($error != ""){
		$error = '<div class="message message__red"><p>Your form is incomplete... ' . $error . '</p></div>';
	} else {

		//Email the form

		$emailTo = "ericmeffley@live.com";

		$subject = "A message from ericmeffley.com";

		$content = "You have a message from Eric Meffley Online.\n\nCustomer Name:\n".$name."\n\nCustomer Email:\n".$email."\n\nMessage:\n".$message;

		$headers = "From: ".$email ;



		if (mail($emailTo, $subject, $content, $headers)){

			

			//If the mail sending succeeds......

			$successMessage = '<div class="message message__green"><p>Thank you for your message I\'ll respond soon.</div>';

			return $successMessage;



		} else {



			//Warning if email fails to send

			$error = '<div class="message"><p>There was a problem sending the form, please try again later.</p>';

			return $error;



		}



	}



}







?>