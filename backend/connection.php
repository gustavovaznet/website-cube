<?php	
	//CONNECTION
	class Connection{
		private $host = 'localhost';
		private $dbname = 'cube';
		private $user = 'root';
		private $pass = '';
		//CONNECT FUNCTION
		public function connect(){
			$connection = new PDO(
				"mysql:host=$this->host;dbname=$this->dbname",
				"$this->user",
				"$this->pass"
			);
			return $connection;
		}
	}
?>
