<?php
class MysqlDb extends SqlDb 
{
    protected $connection;
	
	public function __construct($host, $user, $password, $db_name) {
        $this->connection = mysql_connect('localhost', 'mysql_user', 'mysql_password');
        mysql_select_db($db_name, $this->connection);
		
	}
	
	public function query($sql) {
		
		$data = array ();
		
		$result = $this->connection->mysql_query($sql);
		while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
			$data[] = $row;
		}
		
		return $data;
	
    }
}	
?>