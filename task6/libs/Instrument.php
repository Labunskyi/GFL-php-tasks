<?php
class Instrument implements iInstrument
{
	private $instrumentName;
	private $categoryName;
	
    public function setName($instrumentName)
    {
        $this->instrumentName = $instrumentName;
    }
    
    public function getName()
    {
        return $this->instrumentName;
    }

    public function setCategory($categoryName)
    {
        $this->categoryName = $categoryName;
    }

    public function getCategory()
    {
        return $this->categoryName;
    }
}
