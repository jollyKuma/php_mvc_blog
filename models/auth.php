<?php
class Auth{
	public $id;
	public $user_id;
	public $email;
	public $password;

	public function __construct($email, $password){
		$this->email = $email;
		$this->password= $password;
	}
	public static function login($email, $password){

        if ($email&&$password) {
            try {
                $db = Db::getInstance();
            } catch (Exception $e) {
                echo $e->getMessage();
                die();
            }
            $query = $db->query("SELECT * FROM users WHERE email='$email'");
            $numrows = $query->rowCount();
            if ($numrows != 0) {
                while ($r = $query->fetch()) {
                    $db_email = $r['email'];
                    $db_password = $r['password'];
                    $db_user_id = $r['user_id'];
                }
                if ($email == $db_email && $password == $db_password) {
                    $_SESSION['email'] = $db_email;
                    $_SESSION['user_id'] = $db_user_id;

                    echo $_SESSION['email'];
                    echo $_SESSION['user_id'];
                    // $uri_array = explode("/", $_SERVER['REQUEST_URI']);
                    // $uri_link = [];
                    // for ($i=0; $i < sizeof($uri_array) - 1; $i++) {
                    //     array_push($uri_link, $uri_array[$i]);
                    // }
                    // $link_redirect = implode("/",$uri_link) . "/index.php";
                    // header('Location: '.$link_redirect);
					header('Location: '. "?controller=posts&action=index");
                }
                else
                    echo "Incorrent Password";
            }
            else
                die("User doesn't exist");
        }
        else
            die("Please enter a username and a password");

	}

	public static function register($email, $password){
        $db = Db::getInstance();
        $query = $db->query("INSERT INTO users(email, password) VALUES('$email', '$password')");
	}

}
 ?>
