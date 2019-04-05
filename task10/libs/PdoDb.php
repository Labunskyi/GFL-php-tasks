<?php
class PdoDb extends SqlDb  
{
    protected $connection;
	protected $query;
	
	public function __construct($host, $user, $password, $db_name) {
		$this->connection = new PDO ('mysql:host=localhost;dbname=books;charset=utf8', $user, $password);
		 
	}
	
	public function connect() {
		$result = $this->connection->query($this->query) ;
		print_r($result); 
		$data = array ();
			while ($row = $result->fetch(PDO::FETCH_ASSOC) ) {
				$data[] = $row;
			}
			return $data;
	 
	}
		
	public function select() {
		parent::select();
		return $this;
	}	
	
	public function insert() {
		parent::insert();
		return $this;
	}
	
	public function delete() {
		parent::delete();
		return $this;
	}
	
	public function update() {
		parent::update();
		return $this;
	}
}
?>