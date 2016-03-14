<?php
	class AuthController {
            public function login(){

	            $email = $_POST['email'];
	            $password = $_POST['password'];

	            $auth = Auth::login($email, $password);
	            require_once('views/posts/index.php');
			}
            public function register(){
	            $email = $_POST['email'];
	            $password = $_POST['password'];

	            $auth = Auth::register($email, $password);
			}
            public function logout() {
                $auth = Auth::logout();
            }
	        public function  editUser(){
	            require_once('views/pages/editUser.php');
            }

			public function submitEditUser() {
				$user_id = $_POST['user_id'];
	            $password = $_POST['password'];

				$auth = Auth::submitEditUser($user_id, $password);
			}

			public function deleteUser() {
				$user_id = $_GET['id'];
				$auth = Auth::deleteUser($user_id);
			}

	}
 ?>
