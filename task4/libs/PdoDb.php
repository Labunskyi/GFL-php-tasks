<?php
class PdoDb extends SqlDb  
{
    protected $connection;
	protected $query;
	
	public function __construct($host, $user, $password, $db_name) {
		$this->connection = new PDO ('mysql:host=;dbname=books;charset=utf8', $user, $password);
		 
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
	
	$this->query = $this->getSelect();
	print_r($this->query);
	return $this;
	}	
}
?>
