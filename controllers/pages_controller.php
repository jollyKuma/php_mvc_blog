<?php
	class PagesController {
		public function home(){
			require_once('views/pages/login.php');
		}
		public function error(){
			require_once('views/pages/error.php');
		}
		public function login(){
			require_once('views/pages/login.php');
		}
		public function register(){
			require_once('views/pages/register.php');
		}
	}
 ?>
