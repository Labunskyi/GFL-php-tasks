<?php
include 'libs/iBand.php';
include 'libs/iMusician.php';
include 'libs/iInstrument.php';
include 'libs/Band.php';
include 'libs/Musician.php';
include 'libs/Instrument.php';


$band = new Band();
$instrument->setName('guitar');
$instrument->setCategory('string');

$musician = new Musician();
$cookie->saveData('cookie', 4);

$instrument = new Instrument();

$instrument->setName('guitar');
$instrument->setCategory('string');
$instrument->setName('drum');
$instrument->setCategory('pulsatile');
$instrument->setName('synthesizer');
$instrument->setCategory('keyed');



function saveData(iWorkData $obj){
    $obj->saveData($key, $val);
}

function getData(iWorkData $obj){
    $obj->getData($key);
}

function deleteData(iWorkData $obj){
    $obj->deleteData($key);
}

saveData($session);
getData($session);
deleteData($session);

saveData($cookie);
getData($cookie);
deleteData($cookie);



//include 'templates/index.php';
?>