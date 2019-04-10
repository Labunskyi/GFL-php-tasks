<?php
include 'config.php';

include 'libs/PdoDb.php';

ini_set('max_execution_time', 300);

$PdoDb = new PdoDb(USER, PASSWORD);


$PdoDb->insert();

$PdoDb->randomPassword();
?>