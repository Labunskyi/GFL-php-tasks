<?php
include 'libs/iWorkData.php';
include 'libs/SessionClass.php';
include 'libs/CookieClass.php';
include 'libs/IniClass.php';
include 'libs/JsonClass.php';
include 'libs/SqlClass.php';


$session = new SessionClass();
$session->saveData('session', 4);
$cookie = new CookieClass();
$cookie->saveData('cookie', 4);
//$ini = new IniClass();
//$json = new JsonClass();
//$sql = new SqlClass();


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