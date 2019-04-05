<?php

include 'config.php';
include 'libs/SqlDb.php';
//include 'libs/MysqlDb.php';
include 'libs/PdoDb.php';




$PdoDb = new PdoDb(HOST, USER, PASSWORD, DB_NAME);
$PdoDb->setField('alias');
$PdoDb->setField('title');
$PdoDb->getField();

$PdoDb->setValue('102');
$PdoDb->setValue('101');
$PdoDb->getValue();

$PdoDb->setTable('category');
$PdoDb->getTable();

$PdoDb->setLimit(2);
$PdoDb->getLimit();

$PdoDb->setKeyField('id');
$PdoDb->getKeyField();

$PdoDb->setKeyValue(2);
$PdoDb->getKeyValue();



//print_r($PdoDb->select()->connect());
//print_r($PdoDb->insert()->connect());
//print_r($PdoDb->delete()->connect());
//print_r($PdoDb->update()->connect());

//include 'templates/index.php';

?>