<<<<<<< HEAD
<?php
	class Controller {
		public function model($model) {
			require_once 'app/models/' . $model . '.php';
			return new $model();
		}
	}
?>
=======
<?php
	class Controller {
		public function model($model) {
			require_once '../models/' . $model . '.php';
			return new $model();
		}
	}
	}
?>
>>>>>>> fe06a12df8a2fa4d5fd4a93042b879e5163d49b2
