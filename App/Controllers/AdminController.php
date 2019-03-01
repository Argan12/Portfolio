<?php

namespace Portfolio\App\Controllers;

// require_once('App/Models/AdminManager.php');

class AdminController {
	public function indexAction() {
		require('App/Views/admin.php');
	}
}