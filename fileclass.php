<?php 

class Database{

	public $host;
	public $uname;
	public $passwd;
	public $dbname;
	public $mysqli;
	public $command;


	public function __construct($host , $user , $passwd , $dbname){
		$this->host = $host;
		$this->uname = $user;
		$this->passwd = $passwd;
		$this->dbname = $dbname;

		$connect = $this->connection();

		if(!$connect){
			echo "Database is not connect";
			echo  $this->mysqli->connect_errno;
			exit();
		}
	}

	public function connection() {
		$this->mysqli = new mysqli($this->host , $this->uname , $this->passwd ,$this->dbname);
		return $this->mysqli->connect_errno === 0;
	}

	public function exec($command){
		$this->command = $command;
		$this->mysqli->query($command);
	}
}

 