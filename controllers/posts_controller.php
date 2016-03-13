<?php 

	class PostsController{
		public function index(){
			$posts = Post::all();
			require_once('views/posts/index.php');
		}
		public function show(){
			if(!isset($_GET['id']))
				return call('pages','error');

			$post = Post::find($_GET['id']);
			require_once('views/posts/show.php');
		}
		public function addPosts(){
			$posts = Post::all();
			require_once('views/posts/addPosts.php');

			if(isset($_POST['submit'])){
				if (!empty($_POST['author']) && !empty($_POST['content'])) {
					$posts = POST::add();
					echo "Successfully added!";
				}
				else
				{
					echo "Field cannot be empty";
				}
			
			}
		}
	}
 ?>