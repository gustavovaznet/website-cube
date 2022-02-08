<?php
	//SERVICE CLASS
	class CubeService{
		private $connection;
		private $cube;
		//CONSTRUCTOR
		public function __construct(Connection $connection, Cube $cube){
			$this->connection = $connection->connect();
			$this->cube = $cube;
		}
		//REGISTER FUNCTION
		public function register(){
			$query = 'insert into tb_users(name, surname, email, password, password_confirm)values(:name, :surname, :email, md5(:password),md5(:password_confirm))';
			$stmt = $this->connection->prepare($query);
			$stmt->bindValue(':name',$this->cube->__get('name'));
			$stmt->bindValue(':surname',$this->cube->__get('surname'));
			$stmt->bindValue(':email',$this->cube->__get('email'));
			$stmt->bindValue(':password',$this->cube->__get('password'));
			$stmt->bindValue(':password_confirm',$this->cube->__get('password_confirm'));
			$stmt->execute();
		}
	}
?>
