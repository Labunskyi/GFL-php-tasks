<?php

include 'config.php';
include 'libs/SqlDb.php';
include 'libs/MysqlDb.php';
include 'libs/PdoDb.php';


$SqlDb = new SqlDb();

$SqlDb->setSelect('alias', 'books', '1' );
$SqlDb->getSelect();
$PdoDb = new PdoDb(HOST, USER, PASSWORD, DB_NAME);



print_r($PdoDb->select()->connect());

//include 'templates/index.php';

?>