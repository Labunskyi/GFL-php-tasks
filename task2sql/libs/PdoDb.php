<?php
class PdoDb
{
    protected $connection;
	protected $query;	
		
	public function __construct($user, $password) {
		$this->connection = new PDO ("mysql:host=localhost;dbname=test;charset=utf8", $user, $password);
	
	}
	
	public function randomPassword() {
    $alphabet = md5(uniqid(rand(), true));
    $pass = array(); 
    $alphaLength = strlen($alphabet) - 1; 
    for ($i = 0; $i < 5; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    $str = implode($pass); 
	return $str;
	}
	
	public function insert() {
		$data = array ();	
		ini_set('max_execution_time', 300);
		for ($id = 141; $id <= 150; $id++) {
			$name = $this->randomPassword();
			$desc = $name . $name . $name;
			$this->query = "INSERT INTO user2 (id, name, description) VALUES ({$id}, '{$name}', '{$desc}')";
			$result = $this->connection->query($this->query) ;
		}
		print_r($result);
		
	 
	}
	
	
}
