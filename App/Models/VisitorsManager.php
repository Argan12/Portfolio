<?php

namespace Portfolio\Models;

require_once('Models/DatabaseConnexion.php');

class VisitorsManager extends DatabaseConnexion {
	public function visits() {
		$database = Database::getADConnexion();
		
		function getIP() {
			if (isset($_SERVER['HTTP_CLIENT_IP'])) {
				return $_SERVER['HTTP_CLIENT_IP'];
			} else if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
				return $_SERVER['HTTP_X_FORWARDED_FOR'];
			} else {
				return (isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '');
			}
		}
		
		$visits = $database->query("SELECT COUNT(*) AS views FROM visitors2 WHERE ip = '".getIP()."'");
		$count = $visits->fetch();
		
		$view = $database->query("SELECT nb_views FROM visitors2 WHERE ip = '".getIP()."'");
		$newView = $view->fetch();
		
		$nbView = $newView['nb_views'];
		
		if ($count['views'] > 0)
		{
			$visit = $database->prepare('UPDATE visitors2 SET nb_views = :nb_views, visit_date = NOW() WHERE ip = :ip');
			$visit->bindValue(':ip', getIP(), PDO::PARAM_STR);
			$visit->bindValue(':nb_views', $nbView + 1, PDO::PARAM_INT);
			$visit->execute();
			
			return $visit;
		} else if ($count['views'] == 0) {
			$visit = $database->prepare('INSERT INTO visitors2(ip, nb_views, visit_date) VALUES(:ip, :nb_views, NOW())');
			$visit->bindValue(':ip', getIP(), PDO::PARAM_STR);
			$visit->bindValue(':nb_views', 1, PDO::PARAM_INT);
			$visit->execute();	
			
			return $visit;
		} 
	} 
}