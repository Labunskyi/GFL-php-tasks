<?php
class MysqlDb extends SqlDb  
{
    protected $connection;
	
	
	public function __construct($host, $user, $password, $db_name) {
			$this->connection = mysql_connect($host, $user, $password);
			mysql_select_db($db_name, $this->connection);
		
	}
	
	public function connect() {
		$data = array();
		$result = mysql_query($this->query);
			while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
				$data[] = $row;
			} 
		return $data;
	}	
}	
