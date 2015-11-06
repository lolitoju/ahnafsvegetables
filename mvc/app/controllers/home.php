<?php

	class Home extends Controller {
		
		public function index($name='blank') {
			$user = $this->model('User');
			$user->name = $name;
		}
		
		public function test() {
			echo 'test';
		}
	}
?>