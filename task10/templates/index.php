 <?php

print_r($fr->readFileByRow());
echo "</br>";
echo "</br>";
print_r($fr->readFileBySymbol());
echo "</br>";
echo "</br>";
$fr->setChangeByRow(1, 'fff as');
print_r($fr->getChangeByRow(1));
echo "</br>";
echo "</br>";
$fr->setChangeBySymbol(1, 2, 't');
print_r($fr->getChangeBySymbol(1, 2));

?>