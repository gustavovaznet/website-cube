<?php
	//CUBE CLASS
	class Cube{
		private $id;
		private $name;
		private $surname;
		private $email;
		private $password;
		private $password_confirm;
		private $date;
		//GET
		public function __get($attribute){
			return $this->$attribute;
		}
		//SET
		public function __set($attribute, $value){
			$this->$attribute = $value;
			return $this;
		}
	}
?>
