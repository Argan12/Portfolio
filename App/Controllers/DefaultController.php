<?php

namespace Portfolio\App\Controllers;

require_once('App/Models/PostsManager.php');

use \Portfolio\App\Models\PostsManager;

class DefaultController {
	public function indexAction() {
		$postsManager = new PostsManager();
		$getAllPosts = $postsManager->getAllPosts();
		
		$errorMessage = false;
		require('App/Views/homepage.php');
	}
	
	public function postsViewAction() {
		require('App/Views/postsView.php');
	}
	
	public function aboutAction() {
		require('App/Views/about.php');
	}
	
	public function legalMentionsAction() {
		require('App/Views/legalMentions.php');
	}
	
	public function cvDownloadAction() {
		$file = 'Web/img/cv.pdf';
		
		header('Content-Transfer-Encoding:binary');
		header('Content-Disposition:attachment; filename="CV.pdf"');
		header('Content-Length: '. filesize($file));
		
		readfile($file);
	}
}