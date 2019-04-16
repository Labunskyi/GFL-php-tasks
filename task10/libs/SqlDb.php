<?php 
class SqlDb
{
	
	protected $table;
	protected $field; 
	protected $arrFields = array();
	

	
	public function select() {
		$this->query = "SELECT ";
		
		return $this;
	}

	public function setField($field) {
		//$field = strval($field);
		array_push($this->arrFields, $field);
		$this->strFields = implode(", ", $this->arrFields);
		print_r($this->strFields);
		$this->query .= "{$this->strFields}";
		return $this;
		//print_r($this->arrFields);
		
	}

	public function getField() {
		$this->strFields = implode(", ", $this->arrFields);
		print_r($this->strFields);
		$this->query .= "{$this->strFields}";
		return $this->query;
		//print_r($this->query);
		
	}
	
	public function from() {
		$this->query .= " FROM ";
		
		return $this;
	}

	public function setTable($table) {
		$this->table = $table;
		$this->getTable();
		return $this;
		
	}

	public function getTable() {
		$this->query .= "{$this->table}";
		print_r($this->query);
		return $this;
	}

	
	
}
?>
