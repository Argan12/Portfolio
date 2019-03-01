<?php

namespace Portfolio\App\Models;

class DatabaseConnexion {
	public static function getLocalConnexion() {
		$database = new \PDO('mysql:host=localhost;dbname=portfolio;charset=utf8', 'root', '');
		$database->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
		
		return $database;
	}
	
	public static function getADConnexion() {
		$database = new \PDO('mysql:host=mysql-arganpiquet.alwaysdata.net;dbname=arganpiquet_database;charset=utf8', '170338', 'ZehyfDatabase');
		$database->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
		
		return $database;
	}
}