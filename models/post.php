<?php
class Post{
	public $id;
	public $user_id;
	public $content;
	public $title;
	public $image;
	public $image_name;
	public $created;

	public function __construct($id, $user_id, $title, $filepath, $filetype, $filename, $content, $created){
		$this->user_id = $user_id;
		$this->title= $title;
		$this->filepath= $filepath;
		$this->filetype= $filetype;
		$this->filename= $filename;
		$this->content= $content;
	}
	public static function all(){
		$list = [];
		$db = Db::getInstance();
		$req = $db->query('SELECT * FROM posts');

		foreach ($req -> fetchAll() as $post) {
			echo "\n";
			$list[] = new Post($post['id'], $post['user_id'], $post['title'],$post['image_path'],$post['image_type'],$post['image_name'], $post['content'], $post['created']);
		}
		return $list;
	}

	public static function find($id){
		$db = Db::getInstance();

		$id = intval($id);

		$req = $db -> prepare('SELECT * FROM posts WHERE id = :id');

		$req->execute(array('id' => $id));
		$post = $req->fetch();

		return new Post($post['id'], $post['user_id'], $post['title'],$post['image_path'],$post['image_type'],$post['image_name'], $post['content'], $post['created']);
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
}
 ?>
