<?php 
class SqlDb
{
	
	protected $table;
	protected $value;
	protected $arrValues = array(); 
	protected $arrFields = array(); 
	protected $limit; 
	
	public function setTable($table) {
		$this->table = $table;
	}
	
	public function getTable() {
		return $this->table;
	}
	
	public function setField($field) {
		$this->field = $field;
		array_push($this->arrFields, $field);
	}
	
	public function getField() {
		$this->strFields = implode(", ", $this->arrFields);
		return $this->strFields;
	}
	
	public function setValue($value) {
		$this->velue= $value;
		array_push($this->arrValues, $value);
		$res = "";
		foreach ($this->arrValues as $element ) {
		$res .= "'".str_replace(' ', "', '",$element )."', ";
		}
		$this->substrValues = substr($res,0,-2);
	}
	
	public function getValue() {
		return $this->substrValues;
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
	
	public function setKeyField($keyField) {
		$this->keyField = $keyField;
	}
	
	public function getKeyField() {
		return $this->keyField;
	}
	
	public function setKeyValue($keyValue) {
		$this->keyValue = $keyValue;
		$str = '';
		$str .= "'".str_replace(' ', "', '",$this->keyValue )."', ";
		$this->substrKeyValue = substr($str,0,-2);
		
	}
	
	public function getKeyValue() {
		print_r($this->substrKeyValue);
		return $this->substrKeyValue;
	}
	
	public function select() {
		$this->query = "SELECT {$this->getField()} FROM {$this->getTable()} LIMIT {$this->getLimit()}";
		return $this->query;
	}
	
	public function insert() {
		$this->query = "INSERT INTO {$this->getTable()} ({$this->getField()}) VALUES ({$this->getValue()})";
		print_r($this->query);
		return $this;
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
