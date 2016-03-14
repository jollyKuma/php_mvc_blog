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
            $id = $_POST['id'];
            $password = $_POST['password'];
            $auth = Auth::editUser($id, $password);
            require_once('views/pages/editUser.php');

                }
	}
 ?>
