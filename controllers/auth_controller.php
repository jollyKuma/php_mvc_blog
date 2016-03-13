<?php
	class AuthController {
		public function login(){

            $email = $_POST['email'];
            $password = $_POST['password'];

            $auth = Auth::login($email, $password);
		}
		public function register(){
            $email = $_POST['email'];
            $password = $_POST['password'];

            $auth = Auth::register($email, $password);
		}
        public function logout() {
            $auth = Auth::logout();
        }
	}
 ?>
