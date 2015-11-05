<?php

class User
{
	public $fname;
	public $mname;
	public $lname;
	public $email;

	//small validation rules for this model
	public function isValid(){
		$email = filter_var($this->email, FILTER_VALIDATE_EMAIL);
		$name = $this->fname != '' && $this->lname != '';
		return $name && $email;
	}

}

?>