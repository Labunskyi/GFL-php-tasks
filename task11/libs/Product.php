<?php
class Product {


	private $id;
	private $title;
	private $price;
	private $discount;
	private $description;
	
	public function __construct($user, $password) {
		$this->connection = new PDO ('mysql:host=localhost;dbname=books;charset=utf8', $user, $password);
	}
	
	public function setId($id) {
		$this->id = $id;
	}
	
	public function getId() {
		return $this->id;
	}
	
	public function setTitle($title) {
		$this->title = $title;
	}
	
	public function getTitle() {
		return $this->title;
	}
	
	public function setPrice($price) {
		$this->price = $price;
	}
	
	public function getPrice() {
		return $this->price;
	}
	
	public function setDiscount($discount) {
		$this->discount = $discount;
	}
	
	public function getDiscount() {
		return $this->discount;
	}
	
	public function setDescription($description) {
		$this->description = $description;
	}
	
	public function getDescription() {
		return $this->description;
	}
	
	public function save() {
		if (isset($this->id)) {
			$this->update();
		} else {
			$this->insert();
		}
	}
	
	private function update() {
	$result = $this->connection->query("UPDATE `products` SET `title`='{$this->title}', "
		. "`price`='{$this->price}', `discount`='{$this->discount}', "
		. "`description`='{$this->description}' WHERE `id`={$this->id}");
	return $result;
	}

	private function insert() {
	$result = $this->connection->query("INSERT INTO `products` (`title`, `price`, `discount`, `description`)"
		. " VALUES ('{$this->title}', '{$this->price}', '{$this->discount}', '{$this->description}')");
	/* $new_id = $this->connection->lastInsertId();
	$this->id = $new_id; */
	return $result;
	}
	
	public function delete($id) {
	
	$result = $this->connection->query("DELETE FROM `products` WHERE `id`=" . $id);
	return $result;
	}

	public function select($id) {
	
	$result = $this->connection->query("SELECT * FROM `products` WHERE `id`=" . $id . " LIMIT 1");
	if ($result !== false) {
		$data = array ();
			while ($row = $result->fetch(PDO::FETCH_ASSOC) ) {
				$data[] = $row;
			}
		return $data;
	} else {
		return false;
	}
}
}