 <?php
class Calculator 
{
    private $valOne; 
	private $valTwo;
	private $valMemory;
	
	public function __construct($valOne, $valTwo, $valMemory){
		
        $this->valOne = $valOne;
        $this->valTwo = $valTwo;
		$this->valMemory = $valMemory;
    }
	
	public function setValOne($newValOne) {
		if (is_int($newValOne)) {
			$this->valOne = $newValOne;
		} else {
			echo "Not an integer";
		}
	}
	
	public function getValOne() {
		return $this->valOne;
	}
	
	public function setValTwo($newValTwo) {
		if (is_int($newValTwo)) {
			$this->valTwo = $newValTwo;
		} elseif ($newValTwo == 0) {
			echo "Not an integer";
		}
		else {
			echo "Not an integer";			
		}
	}
	
	public function getValTwo() {
		return $this->valTwo;
	}
	
	public function setValMemory($newValMemory) {
		if (is_int($newValMemory)) {
			$this->valMemory = $newValMemory;
		} else {
			echo "Not an integer";
		}
	}
	
	public function getValMemory() {
		return $this->valMemory;
	}

    public function add(){
        return $this->getValOne() + $this->getValTwo();
    }

    public function subtract(){
        return $this->getValOne() - $this->getValTwo();
    }

    public function multiply(){
        return $this->getValOne() * $this->getValTwo();
    }

    public function divide() {
		if ($this->getValTwo() != 0) {
			return $this->getValOne() / $this->getValTwo();
		} else {
			echo "Can not divide on 0";
		}
    }
	
	public function divideNumOneOnValOne() {
        return 1 / $this->getValOne();
    }
	
	public function valOneOnPrecent() {
        return $this->getValOne() * 0.01;
    }
	
	public function root(){
        return sqrt($this->getValOne());
    }
}

?>
