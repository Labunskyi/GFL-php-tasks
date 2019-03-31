<?php
include 'libs/Filesreader.php';

$fr = new Filereader('hello.txt', 'file.txt');

print_r($fr->readFileByRow());
echo "</br>";
print_r($fr->readFileBySymbol());
echo "</br>";
$fr->setChangeFileByRow(1, 'fff');
print_r($fr->getChangeFileByRow(1));
echo "</br>";
$fr->setChangeFileBySymbol(1, 55, '7');
print_r($fr->getChangeFileBySymbol(1, 55));
echo "</br>";

//include 'templates/index.php';
?>
