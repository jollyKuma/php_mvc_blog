<?php
	session_start();
	function call($controller, $action){
		//require the file that matches the controller name
		require_once('controllers/' . $controller . '_controller.php');
		//create a new instance of the needed controller
		switch ($controller) {
			case 'pages':
				$controller = new PagesController();
				break;
			case 'auth':
				require_once('models/auth.php');
				$controller = new AuthController();
				break;
			case 'posts':
				//we need the model to query the database later in  the controller
                session_destroy();
				if (empty($_SESSION['email']) && empty($_SESSION['user_id'])) {
					header('Location: '. "?controller=pages&action=login");
				}
				require_once('models/post.php');
				$controller = new PostsController();
			break;
		}
		//call the action
		$controller -> { $action }();
	}
	//just a list of the controllers we have and their actions
	//we consider those "alowed" values

	//adding an entry for he new controller and its actions
	$controllers = array(
		                'pages' =>['home' ,'error','login','register' ],
						'posts' => ['index','show','addPosts'],
						'auth' => ['login','register']
					);

	//check that the requested controller and action are both allowed
	//if someone tries to access something else he will be redirected to the error action of the page
	if (array_key_exists($controller, $controllers)) {
		if (in_array($action, $controllers[$controller])) {
			call($controller, $action);
		} else{
			call('pages', 'error');
		}
	}else{
		call('pages','error');
	}
 ?>
