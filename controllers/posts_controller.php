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
		}
		public function add() {
			$filetmp = $_FILES["toProcess"]["tmp_name"];
		    $filename = $_FILES["toProcess"]["name"];
		    $filetype = $_FILES["toProcess"]["type"]; // $filepath = "uploads/".$filename;
			$filepath = "uploads/";
			$title = $_POST['title'];
			$content = $_POST['content'];

			$posts = Post::add($filetmp, $filename, $filetype, $filepath, $title, $content);

		}

		public function edit() {
			$title = $_POST['title'];
			$content = $_POST['content'];
			$id = $_POST['id'];

			echo $id;
			echo $title;
			echo $content;

			$posts = Post::edit($title, $content, $id);
		}

		public function delete() {
			$post_id = $_GET['id'];

			$posts = Post::delete($post_id);
		}
	}
 ?>
