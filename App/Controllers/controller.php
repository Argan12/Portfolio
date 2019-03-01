<?php

namespace Portfolio\Controllers;

require_once('Models/MailManager.php');
require_once('Models/VisitorsManager.php');
	
	function sendMail($firstname, $lastname, $mail_address, $object, $message) {
		// Send mail
		$name = $firstname.' '.$lastname;
		$mail = $mail_address;
		$msg = $message;
		$to = $_POST['mail_address'];
		$body = "From: $name\n E-Mail: $mail\n Message:\n $msg";
		$headers = array(
			"MIME-Version: 1.0",
			"Content-Type: text/plain; charset=utf-8",
			"From: argan.piquet@gmail.com",
			"X-Mailer: PHP/" . phpversion()
		);
    
		$headers = implode("\r\n", $headers);
		mail($to, $object, $message, $headers);
		
		// Save mail
		$mailManager = new MailManager();
		
		$saveMsg = $mailManager->saveMail($firstname, $lastname, $mail_address, $object, $message);
		
		if ($msgEdit === false)
			throw new Exception('Action impossible');
		else 
			header('Location:index.php');
	}
	
	function getVisitors() {
		$visitorsManager = new VisitorsManager();
		$visit = $visitorsManager->visits();
	}