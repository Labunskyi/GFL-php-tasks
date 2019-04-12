<?php
<?php
class Band implements iBand
{
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

    }

    public function getMusician()
    {

    }

}