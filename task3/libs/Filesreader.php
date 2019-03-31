
<?php
class Filereader
{
    private $row; 
	private $symbol;
	private $changeEl; 
	
	
	public function __construct($writeFname, $readFname){
		$this->fd = fopen($writeFname, 'w+');
		$this->readFileByRow = file($readFname);
		$this->readFileBySymbol = file_get_contents($readFname);
		$this->changeFileByRow = file($readFname);
		$this->changeFileBySymbol = file($readFname);
    }
	
	public function readFileByRow() {
		$this->strWriteFileByRow = implode("</br>", $this->readFileByRow);
		return $this->strWriteFileByRow;
	}
	
	public function readFileBySymbol() {
		$this->explodeFileBySymbol = str_split($this->readFileBySymbol);
		$this->strFileBySymbol = implode(" ", $this->explodeFileBySymbol);
		return $this->strFileBySymbol;
	}
		
	public function setChangeFileByRow($row, $changeEl) {
		$this->row = $row;
		$this->changeEl = $changeEl;
		if ($row > count($this->changeFileByRow)) {
			echo "Wrong row number"; 
		} else {
			$this->changeFileByRow[$row] = $changeEl;
		}		
	}
	public function getChangeFileByRow($row) {
		if(isset($this->changeFileByRow[$row])){
            $this->changeFileByRow[$row];
			$this->strWriteFileByRow = implode("</br>", $this->changeFileByRow);
			return $this->strWriteFileByRow;
        }
		return null;
	}
	
	public function setChangeFileBySymbol($row, $symbol, $changeEl) {
		$this->row = $row;
		$this->symbol = $symbol;
		$this->changeEl = $changeEl;
		$res = [];
		foreach ($this->changeFileBySymbol as $key => $value) {
			$res[$key] = str_split($value);
			
		}
		if ($row > count($this->changeFileByRow)) {
			echo "Wrong row number"; 
		} elseif ($symbol > count($res[$row])) {
			echo "Wrong symbol number";
		} else {
		$this->changeFileBySymbol[$row][$symbol] = $changeEl;
		}	
	}
	
	public function getChangeFileBySymbol($row, $symbol) {
		if(isset($this->changeFileBySymbol[$row][$symbol])){
			$this->changeFileBySymbol[$row][$symbol];
			$this->changeFileBySymbol[$row][$symbol] = $this->changeFileBySymbol[$row][$symbol];
			$this->strWriteFileBySymbol = implode("</br>", $this->changeFileBySymbol);
			return $this->strWriteFileBySymbol;
        }
		return null;
	}

	public function __destruct() {
		
		fputs($this->fd, $this->readFileByRow());
		fputs($this->fd, PHP_EOL);
		fputs($this->fd, $this->readFileBySymbol());
		fputs($this->fd, PHP_EOL);
		fputs($this->fd, $this->getChangeFileByRow($this->row));
		fputs($this->fd, PHP_EOL);
		fputs($this->fd, $this->getChangeFileBySymbol($this->row, $this->symbol));
		fclose($this->fd); 
	}
	
}

?>
