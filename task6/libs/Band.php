<?php
class Band implements iBand
{
	
	private $bandName;
	private $bandGanre;
	private $musicians = array();
	
    public function setName($bandName)
    {
        $this->bandName = $bandName;
    }

    public function getName()
    {
        return $this->bandName;
    }

    public function setGenre($bandGanre)
    {
        $this->bandGanre = $bandGanre;
    }

    public function getGenre()
    {
        return $this->bandGanre;
    }

    public function addMusician(iMusician $obj)
    {
		array_push($this->musicians, $obj);
		$obj->assingToBand($this);
    }

    public function getMusician()
    {
		return $this->musicians;
    }

}
