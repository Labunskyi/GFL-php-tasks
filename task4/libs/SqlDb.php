<?php 
class SqlDb
{
	
	protected $table;
	protected $value; // название значение ячейки
	protected $values; // название значение ячейки
	protected $field; // название полей таблицы
	protected $fields; // массив полей
	protected $limit; // название лимита
	
	
	public function __construct() {
		$this->table = '';
		$this->value = ''; 
		$this->values = array(); 
		$this->field = ''; 
		$this->fields = array(); 
	}
	
	public function setSelect($field, $table, $limit ) {
		$this->field = $field;
		$this->table = $table;
		$this->limit = $limit;
	}
	
	
	public function getSelect() {
		
		$query = "SELECT $this->field FROM $this->table LIMIT $this->limit";
		print_r($query); 
		return $query;
	}
	
}
?>
