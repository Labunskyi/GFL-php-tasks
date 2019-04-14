<?php
class Musician implements iMusician
{
	private $nameBand;
	private $musicianType;
	
    public function addInstrument(iInstrument $obj)
    {
        $this->addInstrument = $obj;
    }

    public function getInstrument()
    {
		return $this->addInstrument;
		
    }

    public function assingToBand(iBand $nameBand)
    {
		$this->nameBand = $nameBand;
    }
	
	public function getAssingToBand()
    {
		return $this->nameBand;
    }
	
	public function setMusicianType($musicianType)
    {
		$this->musicianType = $musicianType;
    }
	
    public function getMusicianType()
    {
		return $this->musicianType;
    }
}
