<?php

namespace Portfolio\App\Models;

require_once('App/Models/DatabaseConnexion.php');

class MessageManager extends DatabaseConnexion {
	public function saveMessage($firstname, $lastname, $mail_address, $object, $message) {
		$database = DatabaseConnexion::getADConnexion();
	
		$msgEdit = $database->prepare('INSERT INTO mailer(firstname, lastname, mail_address, object, message, date) VALUES(?, ?, ?, ?, ?, NOW())');
		$saveMsg = $msgEdit->execute(array(htmlspecialchars($firstname), htmlspecialchars($lastname), htmlspecialchars($mail_address), htmlspecialchars($object), nl2br(htmlspecialchars($message))));
	
		return $saveMsg;
	}
}