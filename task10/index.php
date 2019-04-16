<?php
include 'config.php';
include 'libs/SqlDb.php';
include 'libs/PdoDb.php';

$PdoDb = new PdoDb(USER, DB_NAME);

print_r($PdoDb->select()->setField('name')->setField('pwd')->from()->setTable('user')->connect());

?>
