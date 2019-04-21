<?php 
class Sql
{
    protected $connection;
	protected $query;
	protected $name = [];
	private $from = [];
    private $where = [];
	private $select;
	
	public function __construct($user, $password) {
		$this->connection = new PDO ('mysql:host=localhost;dbname=books;charset=utf8', $user, $password);
	}
	
	// SELECT
	
	public function select() 
	{
		$this->name[] = 'SELECT ';
		return $this;
	}
	
	public function from($table)
    {
        $this->from[] = $table;
        return $this;
    }
	
	public function limit($limit)
    {
        $this->limit[] = $limit;
        return $this;
    }

    public function where($condition)
    {
        $this->where[] = $condition;
        return $this;
    }
	
	public function join()
    {
        $this->join[] = ' INNER JOIN ';
        return $this;
    }
	
	public function leftJoin()
    {
        $this->join[] = ' LEFT OUTER JOIN ';
        return $this;
    }
	
	public function rightJoin()
    {
        $this->join[] = ' RIGHT OUTER JOIN ';
        return $this;
    }
	
	public function crossJoin()
    {
        $this->join[] = ' CROSS JOIN ';
        return $this;
    }
	
	public function naturalJoin()
    {
        $this->join[] = ' NATURAL JOIN ';
        return $this;
    }
	
	public function on($on)
    {
        $this->on[] = $on;
        return $this;
    }
	
	// INSERT
	
	public function insert() {
		$this->name[] = 'INSERT ';
		
		return $this;
	}
	
	public function into($table)
    {
        $this->into[] = $table;
        return $this;
    }
	
    public function setField($field)
    {
        $this->field[] = $field;
        return $this;
    }
	
	public function setValue($value)
    {
        $this->value[] = ':' .$value;
		$this->values[] = $value;
        return $this;
    }

	// UPDATE
	
	public function update() 
	{
		$this->name[] = 'UPDATE ';
		return $this;
	}
	
	public function table($table)
    {
        $this->table[] = $table;
        return $this;
    }
	
	public function set($set)
    {
        $this->set[] = $set;
        return $this;
    }
	
	// DELETE
	
	public function delete() 
	{
		$this->name[] = 'DELETE ';
		return $this;
	}
	
	// EXECUTE
	
    public function execute()
    {			
		if ($this->name[0] == 'SELECT ') {
			
        $name = join($this->name);
		$field = join(', ', $this->field);
		$from = join(', ', $this->from);
		$join = join(', ', $this->join);
		$table = join(', ', $this->table);
		$on = join(', ', $this->on);
		$this->query = $name . $field . ' FROM ' . $from .  $join . $table . ' ON ' . $on;
		/* $result = $this->connection->query($this->query);
		$data = array ();
			while ($row = $result->fetch(PDO::FETCH_ASSOC) ) {
				$data[] = $row;
			}
		return $data; */
		} elseif ($this->name[0] == 'INSERT ') {
			$name = join($this->name);
			$combine = array_combine ($this->value, $this->values);
			$into = join(', ', $this->into);
			$field = join(', ', $this->field);
			$values = join(', ', $this->value);
			$this->query = $name . 'INTO ' . $into . ' (' . $field . ')' . ' VALUES ' . '(' . $values . ')';
			$result = $this->connection->prepare($this->query);
			foreach($combine as $key => &$value) {
				$result->bindParam($key, $value, PDO::PARAM_STR);
			}
			$result->execute();
		} elseif ($this->name[0] == 'DELETE ') {
			$name = join($this->name);
			$from = join(', ', $this->from);
			$where = join(', ', $this->where);
			$expl = explode(" ", $where);
			$valWithOutDots = array_pop($expl);
			$valWithDots = ':' . $valWithOutDots;
			array_push($expl, $valWithDots);
			$where = join(' ', $expl);
			
			$this->query = $name . ' FROM ' . $from .  ' WHERE ' . $where ;
			$result = $this->connection->prepare($this->query);
			$result->bindParam($valWithDots, $valWithOutDots, PDO::PARAM_STR);
			$result->execute();
		} elseif ($this->name[0] == 'UPDATE ') {
			$name = join($this->name);
			$table = join(', ', $this->table);
			
			$set = join(', ', $this->set);
			$explode = explode(" ", $set);
			$setValWithOutDots = array_pop($explode);
			$setValWithDots = ':' . $setValWithOutDots;
			array_push($explode, $setValWithDots);
			$set = join(' ', $explode);
			
			$where = join(', ', $this->where);
			$expl = explode(" ", $where);
			$valWithOutDots = array_pop($expl);
			$valWithDots = ':' . $valWithOutDots;
			array_push($expl, $valWithDots);
			$where = join(' ', $expl);
			
			$this->query = $name . ' ' . $table .  ' SET ' . $set . ' WHERE ' .$where ;
			$result = $this->connection->prepare($this->query);
			$result->bindParam($valWithDots, $valWithOutDots, PDO::PARAM_STR);
			$result->bindParam($setValWithDots, $setValWithOutDots, PDO::PARAM_STR);
			$result->execute();
		}
	} 
	
}
