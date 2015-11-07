<?php

	class Home extends Controller {
		
		public function index($name = '') {
			$user = $this->model('User');
			$user->fname = $name;
			
			$this->view('home/index', ['name' => $user->fname]);
		}
		
		public function test() {
		}
		
	}
?>