<?php
include 'libs/iBand.php';
include 'libs/iMusician.php';
include 'libs/iInstrument.php';
include 'libs/Band.php';
include 'libs/Musician.php';
include 'libs/Instrument.php';


$guitar = new Instrument();
$guitar->setName('guitar');
$guitar->setCategory('guitar');

$drum = new Instrument();
$drum->setName('drum');
$drum->setCategory('drum');

$synthesizer = new Instrument();
$synthesizer->setName('synthesizer');
$synthesizer->setCategory('synthesizer');


$vova = new Musician();
$vova->addInstrument($guitar);
$vova->getInstrument();
$vova->setMusicianType('Vova guitarist');
$vova->getMusicianType();

$petya = new Musician();
$petya->addInstrument($drum);
$petya->getInstrument();
$petya->setMusicianType('Petya drummer');
$petya->getMusicianType();

$misha = new Musician();
$misha->addInstrument($synthesizer);
$misha->getInstrument();
$misha->setMusicianType('Misha keybord player');
$misha->getMusicianType();

$scorpions = new Band();
$scorpions->setName('scorpions');
$scorpions->setGenre('rock');
$scorpions->addMusician($vova);
$scorpions->addMusician($petya);
$scorpions->getMusician();

$allScorpions = $scorpions->getMusician();

$scorpionsName = $scorpions->getName();
$scorpionsGenre = $scorpions->getGenre();
$scorpionsMusicians = '';

foreach($allScorpions as $value) 
{	
	$scorpionsMusicians .= $value->getMusicianType() . " on " . $value->getInstrument()->getName() . "<br/>";

}


$mband = new Band();
$mband->setName('mband');
$mband->setGenre('pop');
$mband->addMusician($misha);
$mband->getMusician();

$allMband = $mband->getMusician();

$mbandName = $mband->getName();
$mbandGenre = $mband->getGenre();
$mbandMusicians = '';

foreach($allMband as $value) 
{	
	$mbandMusicians .= $value->getMusicianType() . " on " . $value->getInstrument()->getName() . "<br/>";
	
}

include 'templates/index.php';
?>
