<?php

namespace Portfolio;

require_once('Lib/Router.php');
require_once('App/Controllers/DefaultController.php');
require_once('App/Controllers/MessageController.php');
require_once('App/Controllers/PostsController.php');
require_once('App/Controllers/AdminController.php');

use \Portfolio\App\Controllers\MessageController;
use \Portfolio\Lib\Router;

$router = new Router($_GET['url']);

/*ini_set("display_errors",0);
error_reporting(0);*/

/* DefaultController */
$router->get('/about', "Default#aboutAction");
$router->get('/CV-download', "Default#cvDownloadAction");
$router->get('/legal-mentions', "Default#legalMentionsAction");

/* PostController */
$router->get('/', "Posts#getPostsAction");
$router->get('/posts', "Posts#getAllPostsAction");
$router->get('/posts/:id', "Posts#getOnePostAction")->with('id', '[0-9]+');

/* MessageController */
$router->post('/message-sent', function() {$messageController = new MessageController(); $messageController->sendMessageAction($_POST['firstname'], $_POST['lastname'], $_POST['mail_address'], $_POST['object'], $_POST['message']);});

/* Admin space */
$router->get('/admin', "Admin#indexAction");

$router->run();