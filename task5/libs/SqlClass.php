<?php
class SqlClass implements iWorkData
{
	
	protected $connection;
	protected $query;	
		
	public function __construct() {
		$this->connection = new PDO ("mysql:host=localhost;dbname=mvc;charset=utf8", 'root', '');
		
	}
  
    public function saveData($key, $val)
    {
		$this->field = $key;
		$this->value = $val;
		$str = '';
		$str .= "'".str_replace(' ', "', '",$this->value )."', ";
		$this->substrValue = substr($str,0,-2);
		
		$this->query = "INSERT INTO category ({$this->field}) VALUES ({$this->substrValue})";
		$result = $this->connection->query($this->query) ;
		return $result;
    }

    public function getData($key)
    {	
		$this->field = $key;
		$this->query = "SELECT {$this->field} FROM category";
		$result = $this->connection->query($this->query) ;
		return $result;
    }

    public function deleteData($key)
    {	
		$this->field = $key;
        $this->query = "ALTER TABLE categories DROP COLUMN {$this->field}";
		$result = $this->connection->query($this->query) ;
		return $result;
    }
}
