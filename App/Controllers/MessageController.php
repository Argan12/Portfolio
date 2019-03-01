<?php

namespace Portfolio\App\Controllers;

require_once('App/Models/MessageManager.php');

use \Portfolio\App\Models\MessageManager;

class MessageController {
	public function sendMessageAction($firstname, $lastname, $mail_address, $object, $message) {
		$messageManager = new MessageManager();
		
		if (!empty($firstname) && !empty($lastname) && !empty($mail_address) && !empty($object) && !empty($message))
		{
			$name = $firstname.' '.$lastname;
			$mail = $mail_address;
			$msg = $message;
			$to = 'argan.piquet@gmail.com';
			$body = "From: $name\n E-Mail: $mail\n Message:\n $msg";
			$headers = array(
				"MIME-Version: 1.0",
				"Content-Type: text/plain; charset=utf-8",
				"From: ".$_POST['mail_address'],
				"X-Mailer: PHP/" . phpversion()
			);
		
			$headers = implode("\r\n", $headers);
			mail(htmlspecialchars($to), htmlspecialchars($object), htmlspecialchars($message), htmlspecialchars($headers));

			$saveMsg = $messageManager->saveMessage($firstname, $lastname, $mail_address, $object, $message);
		} else {
			$errorMessage = 'Le formulaire contient des erreurs';
			require('App/Views/homepage.php');
		}
		
		if ($msgEdit === false)
			throw new Exception('Action impossible');
		else 
			header('Location:/');
	}
}