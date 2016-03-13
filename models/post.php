<?php
class Post{
	public $id;
	public $user_id;
	public $content;
	public $title;
	public $image;
	public $image_name;
	public $created;

	public function __construct($id, $user_id, $content, $title, $image, $image_name, $created){
		$this->id = $id;
		$this->user_id = $user_id;
		$this->content= $content;
		$this->title= $title;
		$this->image_name= $image_name;
		$this->image= $image;
		$this->created= $created;
		$this->content= $content;
	}
	public static function all(){
		$list = [];
		$db = Db::getInstance();
		$req = $db->query('SELECT * FROM posts');

		foreach ($req -> fetchAll() as $post) {
			$list[] = new Post($post['id'],$post['user_id'], $post['content'], $post['title'], $post['image'],$post['image_name'],$post['created']);
		}
		return $list;
	}

	public static function find($id){
		$db = Db::getInstance();

		$id = intval($id);

		$req = $db -> prepare('SELECT * FROM posts WHERE id = :id');

		$req->execute(array('id' => $id));
		$post = $req->fetch();

		return new Post($post['id'],$post['user_id'], $post['content'], $post['title'], $post['image'],$post['image_name'],$post['created']);
	}
	//add
	public static function add(){
		$db = Db::getInstance();
		$content = $_POST['content'];
		$req = $db -> query("INSERT INTO posts(content) VALUES('$content')");

	}
}
 ?>
