<?php

namespace Portfolio\App\Controllers;

require_once('App/Models/PostsManager.php');

use \Portfolio\App\Models\PostsManager;

class PostsController {
	public function getPostsAction() {
		$postsManager = new PostsManager();
		
		$getPosts = $postsManager->getPosts();
		
		require('App/Views/homepage.php');
	}
	
	public function getAllPostsAction() {
		$postsManager = new PostsManager();
		
		$getAllPosts = $postsManager->getAllPosts();
		
		require('App/Views/postsView.php');
	}
	
	public function getOnePostAction($postID) {
		$postsManager = new PostsManager();
		
		if ($postID != NULL)
		{
			$post = $postsManager->getOnePost($postID);
		} else {
			throw new \Exception('Page introuvable');
		}
		
		require('App/Views/posts.php');
	}
}