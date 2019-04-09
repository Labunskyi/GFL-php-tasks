<?php
include 'config.php';
include 'libs/SqlDb.php';
include 'libs/MysqlDb.php';
include 'libs/PostgreDb.php';
include 'libs/PdoDb.php';

$PdoDb = new PdoDb(USER, PASSWORD);

$MysqlDb = new MysqlDb(HOST, USER, PASSWORD, DB_NAME);

$PostgreDb = new PostgreDb(HOST, USER, PASSWORD, DB_NAME);

$PdoDb->setTable('category');
$PdoDb->getTable();
$PdoDb->setField('id_category');
$PdoDb->setField('name_category');
$PdoDb->getField();
$PdoDb->setValue(120);
$PdoDb->setValue('name');
$PdoDb->getValue();

$PdoDb->setKeyValue('names');
$PdoDb->getKeyValue();

$PdoDb->insert()->connect();

//include 'templates/index.php';

?>
