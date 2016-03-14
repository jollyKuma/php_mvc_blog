<?php
class Post{
	public $id;
	public $user_id;
	public $content;
	public $title;
	public $image;
	public $image_name;
	public $created;

	public function __construct($post_id, $post_id, $user_id, $title, $filepath, $filetype, $filename, $content, $created, $email){
		$this->post_id = $post_id;
		$this->post_id = $post_id;
		$this->user_id = $user_id;
		$this->title= $title;
		$this->filepath= $filepath;
		$this->filetype= $filetype;
		$this->filename= $filename;
		$this->content= $content;
		$this->created= $created;
		$this->email= $email;
	}
	public static function all(){
		$list = [];
		$db = Db::getInstance();
		$req = $db->query('SELECT * FROM posts');
		$list = [];
		foreach ($req -> fetchAll() as $post) {

			$id = intval($post['user_id']);

			$req = $db -> prepare('SELECT * FROM users WHERE user_id = :id');

			$req->execute(array('id' => $id));
			$user = $req->fetch();

			array_push($list, new Post($post['post_id'], $post['post_id'], $post['user_id'], $post['title'],$post['image_path'],$post['image_type'],$post['image_name'], $post['content'], $post['created'], $user['email']));
		}
		return $list;
	}

	public static function find($id){
		$db = Db::getInstance();

		$id = intval($id);

		$req = $db -> prepare('SELECT * FROM posts WHERE post_id = :id');

		$req->execute(array('id' => $id));
		$post = $req->fetch();

		$userid = intval($post['user_id']);

		$requser = $db -> prepare('SELECT * FROM users WHERE user_id = :id');

		$requser->execute(array('id' => $userid));
		$user = $req->fetch();

		return new Post($post['post_id'], $post['post_id'], $post['user_id'], $post['title'],$post['image_path'],$post['image_type'],$post['image_name'], $post['content'], $post['created'], $user['email']);
	}
	//add
	public static function add($filetmp, $filename, $filetype, $filepath, $title, $content){
		$db = Db::getInstance();

		$user_id = $_SESSION['user_id'];
		$temp_image_name = explode(".", $filename);

		$mydate=getdate(date("U"));
		$created_date="$mydate[weekday], $mydate[month] $mydate[mday], $mydate[year]";

		$imagename = time() . $_SESSION['email'] . "." . $temp_image_name[1];

		$newPath = $filepath . $imagename;

		if (is_uploaded_file($filetmp)) {
	        move_uploaded_file($filetmp, $newPath);
	        $query = $db->query("INSERT INTO posts(user_id, title, image_path, image_type, image_name, content, created)
	            VALUES('$user_id', '$title', '$newPath', '$filetype','$imagename', '$content', '$created_date')");

	        header('Location: '. "?controller=posts&action=index");
	    }
	}

	public static function delete($id) {
		$db = Db::getInstance();
		$query = $db->query("DELETE FROM posts WHERE post_id='$id'");
		header('Location: '. "?controller=posts&action=index");
	}

	public static function edit($title, $content, $id){
		$db = Db::getInstance();

		$query = $db->query("UPDATE posts SET title='$title', content='$content' WHERE post_id='$id'");
		header('Location: '. "?controller=posts&action=index");
	}

	public static function search($search_value) {
		$db = Db::getInstance();

		$query = $db->query("SELECT user_id FROM users WHERE email LIKE '%".$search_value."%'");
		$user = $query->fetch();
		$user_id = $user['user_id'];

		$reqpost = $db->query("SELECT * FROM posts WHERE user_id='$user_id'");
		$list = [];
		foreach ($reqpost -> fetchAll() as $post) {
			$id = intval($post['user_id']);

			$req = $db -> prepare('SELECT * FROM users WHERE user_id = :id');

			$req->execute(array('id' => $id));
			$user = $req->fetch();

			array_push($list, new Post($post['post_id'], $post['post_id'], $post['user_id'], $post['title'],$post['image_path'],$post['image_type'],$post['image_name'], $post['content'], $post['created'], $user['email']));
		}
		return $list;

	}
}
 ?>
