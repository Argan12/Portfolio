<?php

namespace Portfolio\App\Models;

require_once('App/Models/DatabaseConnexion.php');

class PostsManager extends DatabaseConnexion {
	public function getPosts() {
		$database = DatabaseConnexion::getADConnexion();
		
		$getPosts = $database->query('SELECT post_id, post_title, post_content, date FROM posts ORDER BY post_id DESC LIMIT 0, 3');
		
		return $getPosts;
	}
	
	public function getAllPosts() {
		$database = DatabaseConnexion::getADConnexion();
		
		$getAllPosts = $database->query('SELECT post_id, post_title, post_content, date FROM posts ORDER BY post_id DESC');
		
		return $getAllPosts;
	}
	
	public function getOnePost($postID) {
		$database = DatabaseConnexion::getADConnexion();
		
		$getOnePost = $database->prepare('SELECT post_id, post_title, post_content, DATE_FORMAT(date, \'%d/%m/%Y\') AS post_date FROM posts WHERE post_id = :post_id');
		$getOnePost->execute(array('post_id' => $postID));
		$post = $getOnePost->fetch();
		
		return $post;
	}
}