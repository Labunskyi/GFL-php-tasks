<?php 
class SqlDb
{
	
	protected $table;
	protected $arrValues = array(); 
	protected $arrFields = array(); 
	protected $limit; 
	
	public function setTable($table) {
		$this->table = $table;
	}
	
	public function getTable() {
		return $this->table;
	}
	
	public function setLimit($limit) {
		if (is_int($limit)) {
			$this->limit = $limit;
		} else {
			return "Not an integer";
		}
	}
	
	public function getLimit() {
		return $this->limit;
	}
	
	public function setField($field) {
		array_push($this->arrFields, $field);
	}
	
	public function getField() {
		$this->strFields = implode(", ", $this->arrFields);
		return $this->strFields;
	}
	
	public function setValue($value) {
		if (is_string($value)) {
			array_push($this->arrValues, $value);
		} else {
			return "Not a string";
		}
	}
	
	public function getValue() {
		$this->strValues = implode(", ", $this->arrValues);
		return $this->strValues;
	}
	
	public function setKeyField($keyField) {
		$this->keyField = $keyField;
	}
	
	public function getKeyField() {
		return $this->keyField;
	}
	
	public function setKeyValue($keyValue) {
		$this->keyValue = $keyValue;
	}
	
	public function getKeyValue() {
		return $this->keyValue;
	}
	
	public function select() {
		$this->query = "SELECT {$this->getField()} FROM {$this->getTable()} LIMIT {$this->getLimit()}";
		return $this->query;
	}
	
	public function insert() {
		$this->query = "INSERT INTO {$this->getTable()} {$this->getField()} VALUES ({$this->getValue()})";
		return $this->query;
	}
	
	public function delete() {
		$this->query = "DELETE FROM {$this->getTable()} WHERE {$this->getKeyField()} = {$this->getKeyValue()}";
		return $this->query;
	}
	
	public function update() {
		$this->query = "UPDATE {$this->getTable()} SET {$this->getField()} = {$this->getValue()} WHERE {$this->getKeyField()} = {$this->getKeyValue()}";
		return $this->query;
	}
	
}
?>
